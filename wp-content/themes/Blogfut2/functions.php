<?php

function carrega_scripts() {

    wp_enqueue_style('template', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('Bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0', 'all');
    wp_enqueue_style('owl.carousel-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.0', 'all');
//    wp_enqueue_style('fonts', 'https://scripts.futfanatics.com.br/css/futfanatics-fonts.css?v5', array(), '1.0', 'all');
    wp_enqueue_style('fonts', 'https://cdn.futfanatics.com.br/scripts/css/futfanatics-fonts.css?v5', array(), '1.0', 'all');
    wp_enqueue_style('select2', get_template_directory_uri() . '/assets/js/select2-v4.0.7/select2.min.css', array(), '1.0', 'all');
    wp_enqueue_style('customTemplate', get_template_directory_uri() . '/style-fut.css', array(), '1.0', 'all');

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('function', get_template_directory_uri() . '/assets/js/function.js', array('jquery'), null, true);
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/d4ff45abe9.js', array(), null, true);
    wp_enqueue_script('select2', get_template_directory_uri() . '/assets/js/select2-v4.0.7/select2.min.js', array('jquery'), null, true);
    wp_enqueue_script('inputMask', get_template_directory_uri() . '/assets/js/inputmask.min.js', array('jquery'), null, true);
    wp_enqueue_script('inputMaskBinding', get_template_directory_uri() . '/assets/js/inputmask.binding.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'carrega_scripts');


add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('video', 'image'));


// Função para registro de nossos menus

register_nav_menus(
        array(
            'meu_menu_principal' => 'Menu Principal',
        )
);


add_action('after_setup_theme', 'theme_functions');

function theme_functions() {
    add_theme_support('title-tag');
}

add_filter('wp_title', 'custom_titles', 10, 2);

function custom_titles($title, $sep) {
    //Check if custom titles are enabled from your option framework
    if (ot_get_option('enable_custom_titles') === 'on') {
        //Some silly example
        $title = "" . $title;
    }
    return $title;
}

if (function_exists('register_sidebar')) {
    register_sidebar(
            array(
                'name' => 'Barra Lateral 1',
                'id' => 'sidebar-1',
                'description' => 'Barra lateral da página home',
                'before_widget' => '<div id="inner-sidebar" class="inner-content-wrap">',
                'after_widget' => '</div><hr/>',
                'before_title' => '<h2 class="widget-title"><span>',
                'after_title' => '</span></h2>',
            )
    );
}

function getPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);

    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }

    return $count . '';
}

// function to count views.

function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);

    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// Add it to a column in WP-Admin

add_filter('manage_posts_columns', 'posts_column_views');

add_action('manage_posts_custom_column', 'posts_custom_column_views', 5, 2);

function posts_column_views($defaults) {
    $defaults['post_views'] = __('Visualizações');

    return $defaults;
}

function posts_custom_column_views($column_name, $id) {
    if ($column_name === 'post_views') {
        echo getPostViews(get_the_ID());
    }
}

// Register and load the widget

function wpb_load_widget() {
    register_widget('wpb_widget');
}

add_action('widgets_init', 'wpb_load_widget');

// Creating the widget 

class wpb_widget extends WP_Widget {

    function __construct() {

        parent::__construct(
// Base ID of your widget

                'wpb_widget',
// Widget name will appear in UI
                __('FutFanatics Populares Widget', 'wpb_widget_domain'),
// Widget description
                array('description' => __('Widget para mostrar os posts mais populares', 'wpb_widget_domain'),)
        );
    }

// Creating widget front-end



    public function widget($args, $instance) {

        $title = apply_filters('widget_title', $instance['title']);



// before and after widget arguments are defined by themes

        echo $args['before_widget'];

        if (!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];



        $argsPost = array(
            'numberposts' => 5, /* QUANTIDADE DE POSTS EM DESTAQUE */
            'orderby' => 'meta_value_num',
            'meta_key' => 'post_views_count',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish'
        );

        $myposts = get_posts($argsPost);

        foreach ($myposts as $mypost) {
            $post_thumbnail_id = get_post_thumbnail_id($mypost->ID);
            $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
            ?>
            <div class="media">
                <a href="<?php echo $mypost->guid; ?>">
                    <div class="media-left">
                        <img src="<?php echo $post_thumbnail_url; ?>" class="media-object" style="width:60px">
                    </div>

                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $mypost->post_title ?></h4>
                    </div>
                </a>
            </div>

            <div class="footer-post">
                <ul>
                    <li>
                        <small><i class="glyphicon glyphicon-time" aria-hidden="true"></i> <?php echo get_the_time('d/m/Y', $mypost->ID) ?></small>
                    </li>
                    <li>
                        <small>
                            <i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i> 
                            <?php echo getPostViews($mypost->ID); ?>
                        </small>
                    </li>
                </ul>
            </div>
            <?php
        }

        echo $args['after_widget'];
    }

// Widget Backend 

    public function form($instance) {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'wpb_widget_domain');
        }
// Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <?php
    }

// Updating widget replacing old instances with new

    public function update($new_instance, $old_instance) {
        $instance = array();

        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';

        return $instance;
    }

}

// Class wpb_widget ends here


// Formulario times
function getTimes() {
    return array(
        'athletico-pr' => array(
            'time' => 'Athletico Paranaense',
            'nome-exibicao' => 'Athletico',
            'form-code' => 43,
            'lead' => 'BlogFut_Athletico',
            'action' => 'https://receiver.emkt.dinamize.com/in/301603/1/73cfd/0'
        ),
        'atletico-mg' => array(
            'time' => 'Atlético Mineiro',
            'nome-exibicao' => 'Atlético-MG',
            'form-code' => 41,
            'lead' => 'BlogFut_AtleticoMG',
            'action' => 'https://receiver.emkt.dinamize.com/in/301603/1/73cfd/0'
        ),
        'bahia' => array(
            'time' => 'Bahia',
            'nome-exibicao' => 'Bahia',
            'form-code' => 42,
            'lead' => 'BlogFut_Bahia',
            'action' => 'https://receiver.emkt.dinamize.com/in/301603/1/73cfd/0'
        ),
        'botafogo' => array(
            'time' => 'Botafogo',
            'nome-exibicao' => 'Botafogo',
            'form-code' => 39,
            'lead' => 'BlogFut_Botafogo',
            'action' => 'https://receiver.emkt.dinamize.com/in/301603/1/73cfd/0'
        ),
        'corinthians' => array(
            'time' => 'Corinthians',
            'nome-exibicao' => 'Timão',
            'form-code' => 31,
            'lead' => 'BlogFut_Corinthians',
            'action' => 'https://receiver.emkt.dinamize.com/in/301603/1/73cfd/0'
        ),
        'cruzeiro' => array(
            'time' => 'Cruzeiro',
            'nome-exibicao' => 'Cruzeiro',
            'form-code' => 40,
            'lead' => 'BlogFut_Cruzeiro',
            'action' => 'https://receiver.emkt.dinamize.com/in/301603/1/73cfd/0'
        ),
        'flamengo' => array(
            'time' => 'Flamengo',
            'nome-exibicao' => 'Flamengo',
            'form-code' => 37,
            'lead' => 'BlogFut_Flamengo',
            'action' => 'https://receiver.emkt.dinamize.com/in/301603/1/73cfd/0'
        ),
        'fluminense' => array(
            'time' => 'Fluminense',
            'nome-exibicao' => 'Fluminense',
            'form-code' => 38,
            'lead' => 'BlogFut_Fluminense',
            'action' => 'https://receiver.emkt.dinamize.com/in/301603/1/73cfd/0'
        ),
        'gremio' => array(
            'time' => 'Grêmio',
            'nome-exibicao' => 'Grêmio',
            'form-code' => 35,
            'lead' => 'BlogFut_Gremio',
            'action' => 'https://receiver.emkt.dinamize.com/in/301603/1/73cfd/0'
        ),
        'internacional' => array(
            'time' => 'Internacional',
            'nome-exibicao' => 'Internacional',
            'form-code' => 72,
            'lead' => 'BlogFut_Internacional',
            'action' => 'https://receiver.emkt.dinamize.com/in/301603/1/73cfd/0'
        ),
        'palmeiras' => array(
            'time' => 'Palmeiras',
            'nome-exibicao' => 'Palmeiras',
            'form-code' => 34,
            'lead' => 'BlogFut_Palmeiras',
            'action' => 'https://receiver.emkt.dinamize.com/in/301603/1/73cfd/0'
        ),
        'santos' => array(
            'time' => 'Santos',
            'nome-exibicao' => 'Santos',
            'form-code' => 33,
            'lead' => 'BlogFut_Santos',
            'action' => 'https://receiver.emkt.dinamize.com/in/301603/1/73cfd/0'
        ),
        'sao-paulo' => array(
            'time' => 'São Paulo',
            'nome-exibicao' => 'São Paulo',
            'form-code' => 32,
            'lead' => 'BlogFut_SaoPaulo',
            'action' => 'https://receiver.emkt.dinamize.com/in/301603/1/73cfd/0'
        ),
        'vasco' => array(
            'time' => 'Vasco da Gama',
            'nome-exibicao' => 'Vasco',
            'form-code' => 68,
            'lead' => 'Vasco_BlogFut',
            'action' => 'https://receiver.emkt.dinamize.com/in/301603/1/73cfd/0'
        ),
    );
}

function postFields() {
    global $post;

    $form_post = get_post_meta($post->ID, 'post_form_time', true);
    $vitrine = get_post_meta($post->ID, 'post_vitrine', true);

    $formularios = getTimes();
    ?>
    <table class="form-table">
        <tr>
            <td colspan="2">
                <strong>Formulários</strong><hr />
                <select name="post_form_time">
                    <option value="">Selecione o formulário</option>
                    <option value="none" <?php echo 'none' == $form_post ? 'selected="selected"' : ''; ?>>Nenhum</option>
                    <option value="blackfriday" <?php echo 'blackfriday' == $form_post ? 'selected="selected"' : ''; ?>>Black Friday</option>
                    <?php foreach ($formularios as $form => $dadosForm) { ?>
                        <option value="<?php echo $form; ?>" <?php echo $form == $form_post ? 'selected="selected"' : ''; ?>><?php echo $dadosForm['time']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <strong>Vitrine</strong><hr />
                <input type="text" name="post_vitrine" id="post_vitrine" style="width: 100%;" placeholder="Códigos dos produtos" value="<?php echo $vitrine; ?>">
                <span class="description">Colocar os códigos dos produtos separados por vírgula e sem espaços. Ex: 123,456,789</span>
            </td>
        </tr>
    </table>
    <?php
}

function postMetaboxes() {
    add_meta_box('postFields', 'Dados do Post', 'postFields', 'post');
}

add_action('add_meta_boxes', 'postMetaboxes');

function savePostFields() {
    global $typenow;

    if ($typenow == 'post') {
        global $post;

        update_post_meta($post->ID, 'post_form_time', $_REQUEST['post_form_time']);
        update_post_meta($post->ID, 'post_vitrine', $_REQUEST['post_vitrine']);
    }
}

add_action('save_post', 'savePostFields');

function scriptsFormTimes() {
    ?>
    <script>
        jQuery(function () {
            jQuery('.form-custom form').on('submit', function (event) {
                event.preventDefault();

                var form = jQuery(this);
                var formData = form.serialize();
                var url = 'https://microservicos.futfanatics.com.br/api/v1/futfanatics-nacional/dinamizeAjax?url=' + encodeURIComponent(form.attr('action'));
                var validateSelects = '';

                form.find('.msg-resp').html('').removeClass('bg-success text-success bg-danger text-danger bg-info text-info').slideUp();
                
                form.find('select.select-multi').each(function () {
                    if (!jQuery(this).val()) {
                        validateSelects = form.find('.msg-resp').html('Por favor, selecione o(s) ' + jQuery(this).attr('data-placeholder')).addClass('bg-info text-info').slideDown();
                        return false;
                    }
                });

                if (validateSelects && form.hasClass('form-geral')) {
                    return false;
                }

                if (form.find('.aceite-input').length > 0 && !form.find('.aceite-input').is(':checked')) {
                    form.find('.msg-resp').html('Por favor, concorde com a Política de Privacidade').addClass('bg-info text-info').slideDown();
                    return false;
                }

                var data = form.find('.dt-nasc').val();
                if (data) {
                    data = data.split('/');
                    data = data[2] + '-' + data[1] + '-' + data[0];
                    formData += '&' + form.find('.dt-nasc').attr('hd-name') + '=' + encodeURIComponent(data);
                }

                form.find('select.select-multi').each(function () {
                    var selectMulti = '';
                    jQuery(this).val().forEach(function (item) {
                        selectMulti += item + '|';
                    });
                    formData += '&' + jQuery(this).attr('hd-name') + '=' + encodeURIComponent(selectMulti.substring(0, selectMulti.length - 1));
                });

                jQuery.post(url, formData, function (response) {
                    if (response.status) {
                        form.find('.msg-resp').html('Seu e-mail foi cadastrado com sucesso!').addClass('bg-success text-success').slideDown();
                    } else {
                        form.find('.msg-resp').html('Desculpe-nos, ocorreu um erro ao cadastrar.').addClass('bg-danger text-danger').slideDown();
                        console.log('Error form dinamize: ' + response.error_msg.result);
                    }
                });

                return false;
            });

            jQuery('.form-custom .aceite-input').on('change', function () {
                if (jQuery(this).is(':checked')) {
                    jQuery(this).parents('.aceite-label').find('.icon-checkbox').addClass('checked');
                } else {
                    jQuery(this).parents('.aceite-label').find('.icon-checkbox').removeClass('checked');
                }
            });

            jQuery('.select-multi').each(function () {
                var select = jQuery(this);
                select.select2({
                    dropdownParent: select.parent(),
                    multiple: true,
                    closeOnSelect: false
                });
            });
            
            jQuery('.select-single').each(function () {
                var select = jQuery(this);
                select.select2({
                    dropdownParent: select.parent(),
                    multiple: false,
                    closeOnSelect: true
                });
            });
            
            jQuery('.form-custom .genero input[type="radio"]').on('change', function() {
                jQuery('.form-custom .genero label').removeClass('selected');
                if (jQuery(this).is(':checked')) {
                    jQuery(this).parent('label').addClass('selected');
                }
            });
        });
    </script>
    <?php
}

add_action('wp_footer', 'scriptsFormTimes');

function scriptsVitrine() {
    ?>
    <script>
        jQuery(function () {
            if (jQuery('#vitrine-fut').length > 0) {
                var produtos = jQuery('input#vitrine_products').val();
            
                produtos = produtos.split(',');

                var template_produtos =
                        '<div class="item">' +
                        '<a target="_blank">' +
                            '<div class="foto"><span class="discount hidden"></span><img class="img-fluid" /></div>' +
                            '<h2 class="title"></h2>' +
                            '<div class="price"></div>' +
                        '</a>' +
                        '</div>';
                var vitrine = jQuery('#vitrine-fut');

                vitrine.html('');

                var owl = vitrine.owlCarousel({
                    autoplay: false,
                    loop: true,
                    autoplaySpeed: 500,
                    nav: false,
                    dots: true,
                    navText: ['<i class="glyphicon glyphicon-menu-left"></i>', '<i class="glyphicon glyphicon-menu-right"></i>'],
                    margin: -15,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 2,
                            slideBy: 2
                        },
                        768: {
                            items: 4,
                            slideBy: 4
                        }
                    }
                });

                for (var i = 0; i < produtos.length; i++) {
                    jQuery.getJSON('https://www.futfanatics.com.br/web_api/products/' + produtos[i], '', function (data) {
                        if (data) {
                            var product = data.Product;

                            if (product.available != 0) {
                                var template = jQuery(template_produtos);

                                var link = product.url.https;
    //                var img = product.ProductImage[0].https;
                                var img = product.ProductImage[0].thumbs[180].https;
                                var title = product.name;
                                var pricePromo = product.promotional_price;
                                var price = product.price;
                                var percentDiscount = 100 - (pricePromo / price) * 100;
                                var payment = product.payment_option;

                                template.find('a').attr('href', link + '?utm_source=blog-da-fut&utm_medium=vitrine-blog');
                                template.find('.foto img').attr('src', img);
                                template.find('.title').html(title);
                                if (percentDiscount < 100) {
                                    template.find('.foto .discount').html('▾ ' + percentDiscount.toFixed() + '%').removeClass('hidden');
                                }

                                if (pricePromo != 0) {
                                    template.find('.price').html('<div class="old-price">R$ ' + price.replace('.', ',') + '</div><div class="current-price">R$ ' + pricePromo.replace('.', ',') + '</div>');
                                } else {
                                    template.find('.price').html('<div class="current-price">R$ ' + price.replace('.', ',') + '</div>');
                                }

                                if (payment) {
                                    template.find('.price').append('<div class="installments">' + payment.replace('Sem juros', '') + '</div>');
                                }

    //                            vitrine.append(template);
                                owl.trigger('add.owl.carousel', [template]);
                                owl.trigger('refresh.owl.carousel');
                            }
                        }
                    });
                }
            }
        });
    </script>
    <?php
}

add_action('wp_footer', 'scriptsVitrine');
// Formulario times end

function adicionar_campo_destaque() {
    add_meta_box(
        'campo_destaque',
        'Destaque',
        'exibir_campo_destaque',
        'post',
        'side',
        'high' 
    );
}
add_action('add_meta_boxes', 'adicionar_campo_destaque');

function exibir_campo_destaque($post) {
    $valor = get_post_meta($post->ID, '_campo_destaque', true);
    ?>
    <label for="campo_destaque">Destaque:</label>
    <select name="campo_destaque" id="campo_destaque">
        <option value="nao" <?php selected($valor, 'nao'); ?>>Não</option>
        <option value="sim" <?php selected($valor, 'sim'); ?>>Sim</option>
    </select>
    <?php
}

function salvar_campo_destaque($post_id) {
    if (isset($_POST['campo_destaque'])) {
        update_post_meta($post_id, '_campo_destaque', sanitize_text_field($_POST['campo_destaque']));
    }
}
add_action('save_post', 'salvar_campo_destaque');

function adicionar_submenu_redes_sociais() {
    add_options_page(
        'Redes Sociais',
        'Redes Sociais',
        'manage_options', 
        'redes-sociais', 
        'exibir_pagina_redes_sociais'
    );
}
add_action('admin_menu', 'adicionar_submenu_redes_sociais');

function exibir_pagina_redes_sociais() {
    ?>
    <div class="wrap">
        <h1>Configurações de Redes Sociais</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('redes_sociais_options_group');
            do_settings_sections('redes-sociais');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function registrar_configuracoes_redes_sociais() {
    register_setting('redes_sociais_options_group', 'facebook_url');
    register_setting('redes_sociais_options_group', 'twitter_url');
    register_setting('redes_sociais_options_group', 'instagram_url');
    register_setting('redes_sociais_options_group', 'youtube_url');
    register_setting('redes_sociais_options_group', 'tiktok_url');

    add_settings_section(
        'redes_sociais_section',
        'URLs das Redes Sociais',
        null,
        'redes-sociais'
    );

    add_settings_field(
        'facebook_url',
        'Facebook URL',
        'exibir_campo_facebook_url',
        'redes-sociais',
        'redes_sociais_section'
    );

    add_settings_field(
        'twitter_url',
        'Twitter URL',
        'exibir_campo_twitter_url',
        'redes-sociais',
        'redes_sociais_section'
    );

    add_settings_field(
        'instagram_url',
        'Instagram URL',
        'exibir_campo_instagram_url',
        'redes-sociais',
        'redes_sociais_section'
    );

    add_settings_field(
        'youtube_url',
        'YouTube URL',
        'exibir_campo_youtube_url',
        'redes-sociais',
        'redes_sociais_section'
    );

    add_settings_field(
        'tiktok_url',
        'TikTok URL',
        'exibir_campo_tiktok_url',
        'redes-sociais',
        'redes_sociais_section'
    );
}

add_action('admin_init', 'registrar_configuracoes_redes_sociais');

function exibir_campo_facebook_url(){
    $facebook_url = get_option('facebook_url');
    echo '<input type="text" name="facebook_url" value="' . esc_attr($facebook_url) . '" />';
}

function exibir_campo_twitter_url(){
    $twitter_url = get_option('twitter_url');
    echo '<input type="text" name="twitter_url" value="' . esc_attr($twitter_url) . '" />';
}

function exibir_campo_instagram_url(){
    $instagram_url = get_option('instagram_url');
    echo '<input type="text" name="instagram_url" value="' . esc_attr($instagram_url) . '" />';
}

function exibir_campo_youtube_url(){
    $youtube_url = get_option('youtube_url');
    echo '<input type="text" name="youtube_url" value="' . esc_attr($youtube_url) . '" />';
}

function exibir_campo_tiktok_url(){
    $tiktok_url = get_option('tiktok_url');
    echo '<input type="text" name="tiktok_url" value="' . esc_attr($tiktok_url) . '" />';
}

function obter_redes_sociais(){
    $redes_sociais = array(
        'facebook' => get_option('facebook_url'),
        'twitter' => get_option('twitter_url'),
        'instagram' => get_option('instagram_url'),
        'youtube' => get_option('youtube_url'),
        'tiktok' => get_option('tiktok_url')
    );

    return array_filter($redes_sociais, function($url) {
        return !empty($url);
    });
}

function adicionar_submenu_sobre() {
    add_options_page(
        'Sobre',
        'Sobre',
        'manage_options',
        'sobre',
        'exibir_pagina_sobre'
    );
}
add_action('admin_menu', 'adicionar_submenu_sobre');

function exibir_pagina_sobre() {
    ?>
    <div class="wrap">
        <h1>Sobre a Empresa</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('sobre_options_group');
            do_settings_sections('sobre');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function registrar_configuracoes_sobre() {
    register_setting('sobre_options_group', 'sobre_texto');

    add_settings_section(
        'sobre_section',
        'Informações Sobre a Empresa',
        null,
        'sobre'
    );

    add_settings_field(
        'sobre_texto',
        'Texto sobre a empresa',
        'exibir_campo_sobre_texto',
        'sobre',
        'sobre_section'
    );
}
add_action('admin_init', 'registrar_configuracoes_sobre');

function exibir_campo_sobre_texto() {
    $sobre_texto = get_option('sobre_texto');
    echo '<textarea name="sobre_texto" rows="10" cols="50" class="large-text">' . esc_textarea($sobre_texto) . '</textarea>';
}

function adicionar_submenu_newsletter() {
    add_options_page(
        'Newsletter', // Título da página
        'Newsletter', // Título do menu
        'manage_options', // Capacidade necessária
        'newsletter', // Slug do menu
        'exibir_pagina_newsletter' // Função de callback para exibir o conteúdo da página
    );
}
add_action('admin_menu', 'adicionar_submenu_newsletter');

function exibir_pagina_newsletter() {
    ?>
    <div class="wrap">
        <h1>Configurações da Newsletter</h1>
        <form method="post" action="options.php" enctype="multipart/form-data">
            <?php
            settings_fields('newsletter_options_group');
            do_settings_sections('newsletter');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function registrar_configuracoes_newsletter() {
    register_setting('newsletter_options_group', 'newsletter_titulo');
    register_setting('newsletter_options_group', 'newsletter_imagem', 'handle_file_upload');

    add_settings_section(
        'newsletter_section',
        'Configurações da Newsletter',
        null,
        'newsletter'
    );

    add_settings_field(
        'newsletter_titulo',
        'Título da Newsletter',
        'exibir_campo_newsletter_titulo',
        'newsletter',
        'newsletter_section'
    );

    add_settings_field(
        'newsletter_imagem',
        'Imagem da Newsletter',
        'exibir_campo_newsletter_imagem',
        'newsletter',
        'newsletter_section'
    );
}
add_action('admin_init', 'registrar_configuracoes_newsletter');

function exibir_campo_newsletter_titulo() {
    $newsletter_titulo = get_option('newsletter_titulo');
    echo '<input type="text" name="newsletter_titulo" value="' . esc_attr($newsletter_titulo) . '" class="regular-text" />';
}

function exibir_campo_newsletter_imagem() {
    $newsletter_imagem = get_option('newsletter_imagem');
    echo '<input type="file" name="newsletter_imagem" />';
    if ($newsletter_imagem) {
        echo '<br><img src="' . esc_url($newsletter_imagem) . '" style="max-width: 300px; margin-top: 10px;" />';
        echo '<br><input type="checkbox" name="remover_newsletter_imagem" value="1" /> Remover imagem';
    }
}

function handle_file_upload($option) {
    if (!empty($_FILES['newsletter_imagem']['tmp_name'])) {
        $urls = wp_handle_upload($_FILES['newsletter_imagem'], array('test_form' => false));
        $temp = $urls['url'];
        return $temp;
    }
    if (isset($_POST['remover_newsletter_imagem']) && $_POST['remover_newsletter_imagem'] == '1') {
        return '';
    }
    return get_option($option);
}

function enqueue_slick_slider() {
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
    wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('custom-slick-js', get_template_directory_uri() . '/js/custom-slick.js', array('slick-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_slick_slider');


function getIconCategory($category = 0){

    switch($category){
        case 6:
            return '<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_37_3333" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="32" height="32"><rect width="32" height="32" fill="#D9D9D9"/></mask><g mask="url(#mask0_37_3333)"><rect x="2.66797" y="6.66699" width="26.6667" height="18.6667" rx="2" stroke="#1C1B1F" stroke-width="2"/><path d="M6.11269 15.0165L15.2641 9.45513C15.5848 9.26027 15.9875 9.26131 16.3072 9.45783L25.7729 15.2773C26.4231 15.6771 26.4038 16.6285 25.7379 17.0016L15.8136 22.562C15.4853 22.746 15.0814 22.73 14.7686 22.5206L6.07578 16.7021C5.46842 16.2956 5.48812 15.3961 6.11269 15.0165Z" stroke="#1C1B1F" stroke-width="2"/><circle cx="15.9987" cy="15.9997" r="2.66667" fill="#1C1B1F"/></g></svg>';
        break;
        case 7:
            return '<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_37_3339" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="32" height="32"><rect width="32" height="32" fill="#D9D9D9"/></mask><g mask="url(#mask0_37_3339)"><path d="M16.0013 29.3337C14.1569 29.3337 12.4235 28.9837 10.8013 28.2837C9.17908 27.5837 7.76797 26.6337 6.56797 25.4337C5.36797 24.2337 4.41797 22.8225 3.71797 21.2003C3.01797 19.5781 2.66797 17.8448 2.66797 16.0003C2.66797 14.1559 3.01797 12.4225 3.71797 10.8003C4.41797 9.1781 5.36797 7.76699 6.56797 6.56699C7.76797 5.36699 9.17908 4.41699 10.8013 3.71699C12.4235 3.01699 14.1569 2.66699 16.0013 2.66699C17.8457 2.66699 19.5791 3.01699 21.2013 3.71699C22.8235 4.41699 24.2346 5.36699 25.4346 6.56699C26.6346 7.76699 27.5846 9.1781 28.2846 10.8003C28.9846 12.4225 29.3346 14.1559 29.3346 16.0003C29.3346 17.8448 28.9846 19.5781 28.2846 21.2003C27.5846 22.8225 26.6346 24.2337 25.4346 25.4337C24.2346 26.6337 22.8235 27.5837 21.2013 28.2837C19.5791 28.9837 17.8457 29.3337 16.0013 29.3337ZM16.0013 26.667C18.9791 26.667 21.5013 25.6337 23.568 23.567C25.6346 21.5003 26.668 18.9781 26.668 16.0003C26.668 15.8448 26.6624 15.6837 26.6513 15.517C26.6402 15.3503 26.6346 15.2114 26.6346 15.1003C26.5235 15.7448 26.2235 16.2781 25.7346 16.7003C25.2457 17.1225 24.668 17.3337 24.0013 17.3337H21.3346C20.6013 17.3337 19.9735 17.0725 19.4513 16.5503C18.9291 16.0281 18.668 15.4003 18.668 14.667V13.3337H13.3346V10.667C13.3346 9.93366 13.5957 9.30588 14.118 8.78366C14.6402 8.26144 15.268 8.00033 16.0013 8.00033H17.3346C17.3346 7.48921 17.4735 7.03921 17.7513 6.65033C18.0291 6.26144 18.368 5.94477 18.768 5.70033C18.3235 5.58921 17.8735 5.50033 17.418 5.43366C16.9624 5.36699 16.4902 5.33366 16.0013 5.33366C13.0235 5.33366 10.5013 6.36699 8.43464 8.43366C6.36797 10.5003 5.33464 13.0225 5.33464 16.0003H12.0013C13.468 16.0003 14.7235 16.5225 15.768 17.567C16.8124 18.6114 17.3346 19.867 17.3346 21.3337V22.667H13.3346V26.3337C13.7791 26.4448 14.218 26.5281 14.6513 26.5837C15.0846 26.6392 15.5346 26.667 16.0013 26.667Z" fill="#1C1B1F"/></g></svg>';
        break;
        case 34:
            return '<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_37_3330" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="32" height="32"><rect width="32" height="32" fill="#D9D9D9"/></mask><g mask="url(#mask0_37_3330)"><path d="M8.0013 26.667C7.62352 26.667 7.30686 26.5392 7.0513 26.2837C6.79575 26.0281 6.66797 25.7114 6.66797 25.3337C6.66797 24.9559 6.79575 24.6392 7.0513 24.3837C7.30686 24.1281 7.62352 24.0003 8.0013 24.0003H24.0013C24.3791 24.0003 24.6957 24.1281 24.9513 24.3837C25.2069 24.6392 25.3346 24.9559 25.3346 25.3337C25.3346 25.7114 25.2069 26.0281 24.9513 26.2837C24.6957 26.5392 24.3791 26.667 24.0013 26.667H8.0013ZM8.93464 22.0003C8.29019 22.0003 7.71797 21.7892 7.21797 21.367C6.71797 20.9448 6.41241 20.4114 6.3013 19.767L4.96797 11.3003C4.92352 11.3003 4.87352 11.3059 4.81797 11.317C4.76241 11.3281 4.71241 11.3337 4.66797 11.3337C4.11241 11.3337 3.64019 11.1392 3.2513 10.7503C2.86241 10.3614 2.66797 9.88921 2.66797 9.33366C2.66797 8.7781 2.86241 8.30588 3.2513 7.91699C3.64019 7.5281 4.11241 7.33366 4.66797 7.33366C5.22352 7.33366 5.69575 7.5281 6.08464 7.91699C6.47352 8.30588 6.66797 8.7781 6.66797 9.33366C6.66797 9.48921 6.6513 9.63366 6.61797 9.76699C6.58464 9.90033 6.54575 10.0225 6.5013 10.1337L10.668 12.0003L14.8346 6.30033C14.5902 6.12255 14.3902 5.88921 14.2346 5.60033C14.0791 5.31144 14.0013 5.00033 14.0013 4.66699C14.0013 4.11144 14.1957 3.63921 14.5846 3.25033C14.9735 2.86144 15.4457 2.66699 16.0013 2.66699C16.5569 2.66699 17.0291 2.86144 17.418 3.25033C17.8069 3.63921 18.0013 4.11144 18.0013 4.66699C18.0013 5.00033 17.9235 5.31144 17.768 5.60033C17.6124 5.88921 17.4124 6.12255 17.168 6.30033L21.3346 12.0003L25.5013 10.1337C25.4569 10.0225 25.418 9.90033 25.3846 9.76699C25.3513 9.63366 25.3346 9.48921 25.3346 9.33366C25.3346 8.7781 25.5291 8.30588 25.918 7.91699C26.3069 7.5281 26.7791 7.33366 27.3346 7.33366C27.8902 7.33366 28.3624 7.5281 28.7513 7.91699C29.1402 8.30588 29.3346 8.7781 29.3346 9.33366C29.3346 9.88921 29.1402 10.3614 28.7513 10.7503C28.3624 11.1392 27.8902 11.3337 27.3346 11.3337C27.2902 11.3337 27.2402 11.3281 27.1846 11.317C27.1291 11.3059 27.0791 11.3003 27.0346 11.3003L25.7013 19.767C25.5902 20.4114 25.2846 20.9448 24.7846 21.367C24.2846 21.7892 23.7124 22.0003 23.068 22.0003H8.93464ZM8.93464 19.3337H23.068L23.9346 13.767L22.4013 14.4337C21.8235 14.6781 21.2346 14.7225 20.6346 14.567C20.0346 14.4114 19.5457 14.0781 19.168 13.567L16.0013 9.20033L12.8346 13.567C12.4569 14.0781 11.968 14.4114 11.368 14.567C10.768 14.7225 10.1791 14.6781 9.6013 14.4337L8.06797 13.767L8.93464 19.3337Z" fill="#1C1B1F"/></g></svg>';

        break;
        case 5:
            return '<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_37_3318" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="32" height="32"><rect width="32" height="32" fill="#D9D9D9"/></mask><g mask="url(#mask0_37_3318)"><path d="M13.8013 26.4003L14.2013 24.5337C14.268 24.2448 14.4069 24.0059 14.618 23.817C14.8291 23.6281 15.0902 23.5114 15.4013 23.467L19.5346 23.1337C19.8235 23.0892 20.0902 23.1448 20.3346 23.3003C20.5791 23.4559 20.7569 23.667 20.868 23.9337L21.4013 25.2003C22.268 24.6892 23.0457 24.0725 23.7346 23.3503C24.4235 22.6281 25.0013 21.8225 25.468 20.9337L25.068 20.7337C24.8235 20.5559 24.6457 20.3392 24.5346 20.0837C24.4235 19.8281 24.4013 19.5559 24.468 19.267L25.4013 15.2003C25.468 14.9337 25.6069 14.7114 25.818 14.5337C26.0291 14.3559 26.268 14.2448 26.5346 14.2003C26.4235 13.6448 26.2846 13.1059 26.118 12.5837C25.9513 12.0614 25.7346 11.5559 25.468 11.067C25.268 11.1781 25.0513 11.2281 24.818 11.217C24.5846 11.2059 24.3791 11.1337 24.2013 11.0003L20.668 8.86699C20.4235 8.71144 20.2457 8.50033 20.1346 8.23366C20.0235 7.96699 20.0013 7.68921 20.068 7.40033L20.3346 6.26699C19.6457 5.95588 18.9402 5.72255 18.218 5.56699C17.4957 5.41144 16.7569 5.33366 16.0013 5.33366C15.6902 5.33366 15.368 5.35033 15.0346 5.38366C14.7013 5.41699 14.3791 5.46699 14.068 5.53366L15.068 7.80033C15.1791 8.06699 15.2069 8.34477 15.1513 8.63366C15.0957 8.92255 14.9569 9.15588 14.7346 9.33366L11.6013 12.067C11.3791 12.267 11.118 12.3781 10.818 12.4003C10.518 12.4225 10.2457 12.3559 10.0013 12.2003L6.93464 10.3337C6.42352 11.1781 6.02908 12.0837 5.7513 13.0503C5.47352 14.017 5.33464 15.0003 5.33464 16.0003C5.33464 16.3559 5.37908 16.9337 5.46797 17.7337L8.4013 17.467C8.71241 17.4225 8.99575 17.4725 9.2513 17.617C9.50686 17.7614 9.69019 17.9781 9.8013 18.267L11.4013 22.067C11.5124 22.3337 11.5402 22.6114 11.4846 22.9003C11.4291 23.1892 11.2902 23.4225 11.068 23.6003L9.8013 24.667C10.4013 25.1114 11.0402 25.4781 11.718 25.767C12.3957 26.0559 13.0902 26.267 13.8013 26.4003ZM16.2013 20.667C15.9124 20.7114 15.6457 20.6559 15.4013 20.5003C15.1569 20.3448 14.9791 20.1337 14.868 19.867L13.068 15.7337C12.9569 15.467 12.9402 15.1892 13.018 14.9003C13.0957 14.6114 13.2457 14.3781 13.468 14.2003L16.868 11.3337C17.068 11.1337 17.3124 11.0225 17.6013 11.0003C17.8902 10.9781 18.1569 11.0448 18.4013 11.2003L22.1346 13.4003C22.3791 13.5559 22.568 13.767 22.7013 14.0337C22.8346 14.3003 22.868 14.5781 22.8013 14.867L21.7346 19.2003C21.668 19.4892 21.5346 19.7281 21.3346 19.917C21.1346 20.1059 20.8902 20.2225 20.6013 20.267L16.2013 20.667ZM16.0013 29.3337C14.1569 29.3337 12.4235 28.9837 10.8013 28.2837C9.17908 27.5837 7.76797 26.6337 6.56797 25.4337C5.36797 24.2337 4.41797 22.8225 3.71797 21.2003C3.01797 19.5781 2.66797 17.8448 2.66797 16.0003C2.66797 14.1559 3.01797 12.4225 3.71797 10.8003C4.41797 9.1781 5.36797 7.76699 6.56797 6.56699C7.76797 5.36699 9.17908 4.41699 10.8013 3.71699C12.4235 3.01699 14.1569 2.66699 16.0013 2.66699C17.8457 2.66699 19.5791 3.01699 21.2013 3.71699C22.8235 4.41699 24.2346 5.36699 25.4346 6.56699C26.6346 7.76699 27.5846 9.1781 28.2846 10.8003C28.9846 12.4225 29.3346 14.1559 29.3346 16.0003C29.3346 17.8448 28.9846 19.5781 28.2846 21.2003C27.5846 22.8225 26.6346 24.2337 25.4346 25.4337C24.2346 26.6337 22.8235 27.5837 21.2013 28.2837C19.5791 28.9837 17.8457 29.3337 16.0013 29.3337Z" fill="#1C1B1F"/></g></svg>';
        break;
        case 8:
            return '<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_37_3321" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="32" height="32"><rect width="32" height="32" fill="#D9D9D9"/></mask><g mask="url(#mask0_37_3321)"><path d="M7.20029 12.6666C8.06695 12.6666 8.88918 12.8222 9.66695 13.1333C10.4447 13.4444 11.1558 13.9 11.8003 14.5L24.5336 26.6666H25.3336C25.7114 26.6666 26.0281 26.5389 26.2836 26.2833C26.5392 26.0277 26.667 25.7111 26.667 25.3333C26.667 25.1555 26.6503 24.9666 26.617 24.7666C26.5836 24.5666 26.467 24.3666 26.267 24.1666L20.167 18.0666L17.8003 10.9333L15.3336 11.5333C14.4892 11.7555 13.7225 11.6 13.0336 11.0666C12.3447 10.5333 12.0003 9.8333 12.0003 8.96664V6.16664L11.067 5.69997L5.93362 12.5666C5.9114 12.5889 5.90029 12.6055 5.90029 12.6166C5.90029 12.6277 5.88918 12.6444 5.86695 12.6666H7.20029ZM7.20029 15.3333H5.66695C5.73362 15.4889 5.81695 15.6333 5.91695 15.7666C6.01695 15.9 6.13362 16.0222 6.26695 16.1333L17.067 25.9666C17.3114 26.2111 17.5892 26.3889 17.9003 26.5C18.2114 26.6111 18.5336 26.6666 18.867 26.6666H20.667L9.96695 16.4333C9.58918 16.0555 9.1614 15.7777 8.68362 15.6C8.20584 15.4222 7.7114 15.3333 7.20029 15.3333ZM18.867 29.3333C18.2003 29.3333 17.567 29.2111 16.967 28.9666C16.367 28.7222 15.8114 28.3777 15.3003 27.9333L4.46695 18.1C3.44473 17.1666 2.87251 16.0222 2.75029 14.6666C2.62807 13.3111 2.97807 12.0777 3.80029 10.9666L8.93362 4.09997C9.3114 3.58886 9.81696 3.24997 10.4503 3.0833C11.0836 2.91664 11.6892 2.98886 12.267 3.29997L13.2003 3.76664C13.667 4.01108 14.0281 4.34441 14.2836 4.76664C14.5392 5.18886 14.667 5.65553 14.667 6.16664V8.96664L17.1336 8.3333C17.8003 8.15553 18.4447 8.23886 19.067 8.5833C19.6892 8.92775 20.1114 9.42219 20.3336 10.0666L22.5003 16.6L28.167 22.2666C28.6114 22.7111 28.917 23.1889 29.0836 23.7C29.2503 24.2111 29.3336 24.7555 29.3336 25.3333C29.3336 26.4444 28.9447 27.3889 28.167 28.1666C27.3892 28.9444 26.4447 29.3333 25.3336 29.3333H18.867Z" fill="#1C1B1F"/></g></svg>';
        break;
        case 9:
            return '<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_37_3342" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="32" height="32"><rect width="32" height="32" fill="#D9D9D9"/></mask><g mask="url(#mask0_37_3342)"><path d="M17.3344 19.3996C15.1788 19.3996 13.601 19.5219 12.601 19.7663C11.601 20.0107 10.7455 20.4885 10.0344 21.1996L5.50104 25.733C5.2566 25.9774 4.95104 26.0996 4.58438 26.0996C4.21771 26.0996 3.90104 25.9774 3.63438 25.733C3.36771 25.4663 3.23438 25.1496 3.23438 24.783C3.23438 24.4163 3.36771 24.0996 3.63438 23.833L8.13437 19.333C8.82326 18.6441 9.29549 17.783 9.55104 16.7496C9.8066 15.7163 9.93437 14.133 9.93437 11.9996C9.93437 10.7107 10.2233 9.44408 10.801 8.19963C11.3788 6.95519 12.201 5.79963 13.2677 4.73297C15.2899 2.71075 17.5233 1.5663 19.9677 1.29963C22.4122 1.03297 24.4233 1.71075 26.001 3.33297C27.601 4.93297 28.2677 6.95519 28.001 9.39963C27.7344 11.8441 26.601 14.0663 24.601 16.0663C23.5344 17.133 22.3788 17.9552 21.1344 18.533C19.8899 19.1107 18.6233 19.3996 17.3344 19.3996ZM13.7344 15.533C14.7788 16.5552 16.1899 16.933 17.9677 16.6663C19.7455 16.3996 21.3344 15.5663 22.7344 14.1663C24.1566 12.7441 25.0066 11.1496 25.2844 9.38297C25.5622 7.6163 25.1788 6.23297 24.1344 5.23297C23.0677 4.1663 21.6733 3.7663 19.951 4.03297C18.2288 4.29963 16.6455 5.14408 15.201 6.5663C13.801 7.9663 12.951 9.54963 12.651 11.3163C12.351 13.083 12.7122 14.4885 13.7344 15.533ZM24.001 30.6663C22.5344 30.6663 21.2788 30.1441 20.2344 29.0996C19.1899 28.0552 18.6677 26.7996 18.6677 25.333C18.6677 23.8663 19.1899 22.6107 20.2344 21.5663C21.2788 20.5219 22.5344 19.9996 24.001 19.9996C25.4677 19.9996 26.7233 20.5219 27.7677 21.5663C28.8122 22.6107 29.3344 23.8663 29.3344 25.333C29.3344 26.7996 28.8122 28.0552 27.7677 29.0996C26.7233 30.1441 25.4677 30.6663 24.001 30.6663ZM24.001 27.9996C24.7344 27.9996 25.3622 27.7385 25.8844 27.2163C26.4066 26.6941 26.6677 26.0663 26.6677 25.333C26.6677 24.5996 26.4066 23.9719 25.8844 23.4496C25.3622 22.9274 24.7344 22.6663 24.001 22.6663C23.2677 22.6663 22.6399 22.9274 22.1177 23.4496C21.5955 23.9719 21.3344 24.5996 21.3344 25.333C21.3344 26.0663 21.5955 26.6941 22.1177 27.2163C22.6399 27.7385 23.2677 27.9996 24.001 27.9996Z" fill="#1C1B1F"/></g></svg>';
        break;
        case 10:
            return '<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_37_3324" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="32" height="32"><rect width="32" height="32" fill="#D9D9D9"/></mask><g mask="url(#mask0_37_3324)"><path d="M6.50009 12.4L10.6668 10.1V18C10.2001 18.0444 9.74454 18.1167 9.30009 18.2167C8.85565 18.3167 8.42232 18.4556 8.00009 18.6333V14.6333L6.63343 15.3667C6.32232 15.5444 5.98898 15.5833 5.63343 15.4833C5.27787 15.3833 5.01121 15.1778 4.83343 14.8667L2.16676 10.2333C1.98898 9.92222 1.95009 9.58333 2.05009 9.21667C2.15009 8.85 2.35565 8.57778 2.66676 8.4L9.30009 4.56667C9.56676 4.41111 9.84454 4.27778 10.1334 4.16667C10.4223 4.05556 10.7223 4 11.0334 4C11.3445 4 11.6112 4.09444 11.8334 4.28333C12.0557 4.47222 12.2223 4.71111 12.3334 5C12.6445 5.84444 13.0501 6.55556 13.5501 7.13333C14.0501 7.71111 14.8668 8 16.0001 8C17.1334 8 17.9501 7.71111 18.4501 7.13333C18.9501 6.55556 19.3557 5.84444 19.6668 5C19.7779 4.71111 19.9501 4.47222 20.1834 4.28333C20.4168 4.09444 20.689 4 21.0001 4C21.3112 4 21.6057 4.05556 21.8834 4.16667C22.1612 4.27778 22.4334 4.41111 22.7001 4.56667L29.3334 8.4C29.6445 8.57778 29.8445 8.84444 29.9334 9.2C30.0223 9.55556 29.9779 9.88889 29.8001 10.2L27.1668 14.8667C26.989 15.1778 26.7223 15.3833 26.3668 15.4833C26.0112 15.5833 25.6779 15.5444 25.3668 15.3667L24.0001 14.6333V21.0333L21.9001 22.8667C21.8112 22.9333 21.7223 22.9944 21.6334 23.05C21.5445 23.1056 21.4445 23.1556 21.3334 23.2V10.1L25.5001 12.4L26.8334 10.0667L21.7334 7.1C21.2001 8.18889 20.4168 9.05556 19.3834 9.7C18.3501 10.3444 17.2223 10.6667 16.0001 10.6667C14.7779 10.6667 13.6501 10.3444 12.6168 9.7C11.5834 9.05556 10.8001 8.18889 10.2668 7.1L5.13343 10.0667L6.50009 12.4ZM5.33343 24.8333C5.08898 24.5444 4.98343 24.2167 5.01676 23.85C5.05009 23.4833 5.21121 23.1778 5.50009 22.9333L7.36676 21.3333C7.87787 20.8889 8.46121 20.55 9.11676 20.3167C9.77232 20.0833 10.4556 19.9667 11.1668 19.9667C11.8779 19.9667 12.5557 20.0833 13.2001 20.3167C13.8445 20.55 14.4223 20.8889 14.9334 21.3333L18.8001 24.6333C19.0668 24.8556 19.3834 25.0278 19.7501 25.15C20.1168 25.2722 20.489 25.3333 20.8668 25.3333C21.2668 25.3333 21.639 25.2778 21.9834 25.1667C22.3279 25.0556 22.6334 24.8778 22.9001 24.6333L24.7668 23.0333C25.0557 22.7889 25.3834 22.6778 25.7501 22.7C26.1168 22.7222 26.4223 22.8778 26.6668 23.1667C26.9112 23.4556 27.0168 23.7833 26.9834 24.15C26.9501 24.5167 26.789 24.8222 26.5001 25.0667L24.6334 26.6667C24.1223 27.1111 23.5445 27.4444 22.9001 27.6667C22.2557 27.8889 21.5779 28 20.8668 28C20.1557 28 19.4723 27.8889 18.8168 27.6667C18.1612 27.4444 17.5779 27.1111 17.0668 26.6667L13.2001 23.3667C12.9334 23.1444 12.6279 22.9722 12.2834 22.85C11.939 22.7278 11.5668 22.6667 11.1668 22.6667C10.789 22.6667 10.4168 22.7278 10.0501 22.85C9.68343 22.9722 9.36676 23.1444 9.10009 23.3667L7.20009 24.9667C6.91121 25.2111 6.58898 25.3222 6.23343 25.3C5.87787 25.2778 5.57787 25.1222 5.33343 24.8333Z" fill="#1C1B1F"/></g></svg>';
        break;
        case 13:
            return '<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_37_3345" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="32" height="32"><rect width="32" height="32" fill="#D9D9D9"/></mask><g mask="url(#mask0_37_3345)"><path d="M10.166 8.53366L13.8993 3.70033C14.166 3.34477 14.4827 3.08366 14.8493 2.91699C15.216 2.75033 15.5993 2.66699 15.9993 2.66699C16.3993 2.66699 16.7827 2.75033 17.1493 2.91699C17.516 3.08366 17.8327 3.34477 18.0993 3.70033L21.8327 8.53366L27.4993 10.4337C28.0771 10.6114 28.5327 10.9392 28.866 11.417C29.1993 11.8948 29.366 12.4225 29.366 13.0003C29.366 13.267 29.3271 13.5337 29.2493 13.8003C29.1716 14.067 29.0438 14.3225 28.866 14.567L25.1993 19.767L25.3327 25.2337C25.3549 26.0114 25.0993 26.667 24.566 27.2003C24.0327 27.7337 23.4105 28.0003 22.6993 28.0003C22.6549 28.0003 22.4105 27.967 21.966 27.9003L15.9993 26.2337L10.0327 27.9003C9.92157 27.9448 9.79935 27.9725 9.66602 27.9837C9.53268 27.9948 9.41046 28.0003 9.29935 28.0003C8.58824 28.0003 7.96602 27.7337 7.43268 27.2003C6.89935 26.667 6.64379 26.0114 6.66602 25.2337L6.79935 19.7337L3.16602 14.567C2.98824 14.3225 2.86046 14.067 2.78268 13.8003C2.7049 13.5337 2.66602 13.267 2.66602 13.0003C2.66602 12.4448 2.82713 11.9281 3.14935 11.4503C3.47157 10.9725 3.92157 10.6337 4.49935 10.4337L10.166 8.53366ZM11.7993 10.8337L5.33268 12.967L9.46601 18.9337L9.33268 25.3003L15.9993 23.467L22.666 25.3337L22.5327 18.9337L26.666 13.0337L20.1993 10.8337L15.9993 5.33366L11.7993 10.8337Z" fill="#1C1B1F"/></g></svg>';
        break;
        default:
            return '';
    }
}
