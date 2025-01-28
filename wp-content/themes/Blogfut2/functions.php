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