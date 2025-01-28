<?php
/*
 * Template name: Home
 */

get_header();

$not_in = array();
$newsCat = get_category_by_slug('news');
if ($newsCat) {
    $not_in = get_term_children($newsCat->term_id, $newsCat->taxonomy);
    array_push($not_in, $newsCat->term_id);
}
?>

<section id="topo" class="home-page">
    <div class="container">
        <div class="row">
            <?php
            global $post;

            $myPosts = get_posts(array('tag' => 'destaque'));

            setup_postdata($myPosts[0]);

            setup_postdata($myPosts[1]);

            setup_postdata($myPosts[2]);

            $image0 = wp_get_attachment_image_src(get_post_thumbnail_id($myPosts[0]->ID), 'single-post-thumbnail');

            $image1 = wp_get_attachment_image_src(get_post_thumbnail_id($myPosts[1]->ID), 'single-post-thumbnail');

            $image2 = wp_get_attachment_image_src(get_post_thumbnail_id($myPosts[2]->ID), 'single-post-thumbnail');
            ?>

            <div class="display-desktop-on">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="fundo-gradient">
                        <div class="slide-grande" style="background-image:url('<?= $image0[0]; ?>');background-position: center center;background-repeat: no-repeat;">

                        </div>
                        <div class="texto">
                            <div class="post-category-slide">
                                <?php foreach ((get_the_category($myPosts[0]->ID)) as $category) { ?>
                                    <a href="<?= get_category_link($category->cat_ID); ?>" class="category-color"><?= $category->category_nicename; ?> </a>
                                <?php } ?>
                            </div>
                            <a href="<?= $myPosts[0]->guid; ?>">
                                <h3><?= $myPosts[0]->post_title; ?></h3>
                                <p>
                                    <?= $myPosts[0]->post_excerpt; ?>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-ms-12 col-xs-12">
                    <div class="row">
                        <div class="col-sm-6 col-md-12">
                            <div class="fundo-gradient">
                                <div class="slide-pequeno" style="background-image:url('<?= $image1[0]; ?>');background-position: center center">

                                </div>
                                <div class="texto-small">
                                    <a href="<?= $myPosts[1]->guid; ?>">
                                        <h3><?= $myPosts[1]->post_title; ?></h3>
                                        <p>
                                            <?= $myPosts[1]->post_excerpt; ?>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-12 padding-top">
                            <div class="fundo-gradient">
                                <div class="slide-pequeno" style="background-image:url('<?= $image2[0]; ?>');background-position: center center">

                                </div>
                                <div class="texto-small">
                                    <a href="<?= $myPosts[2]->guid; ?>">
                                        <h3><?= $myPosts[2]->post_title; ?></h3>
                                        <p>
                                            <?= $myPosts[2]->post_excerpt; ?>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="display-mobile-on">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="fundo-gradient">
                        <div class="slide-grande" style="background-image:url('<?= $image0[0]; ?>');background-position: center center;background-repeat: no-repeat;">

                        </div>
                        <div class="texto">
                            <div class="post-category-slide">
                                <?php foreach ((get_the_category($myPosts[0]->ID)) as $category) { ?>
                                    <a href="<?= get_category_link($category->cat_ID); ?>" class="category-color"><?= $category->category_nicename; ?> </a>
                                <?php } ?>
                            </div>
                            <a href="<?= $myPosts[0]->guid; ?>">
                                <h3><?= $myPosts[0]->post_title; ?></h3>
                                <p>
                                    <?= $myPosts[0]->post_excerpt; ?>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-sm-12 col-xs-12 ">
                    <div class="fundo-gradient">
                        <div class="slide-grande" style="background-image:url('<?= $image1[0]; ?>');background-position: center center;background-repeat: no-repeat;">

                        </div>
                        <div class="texto">
                            <div class="post-category-slide">
                                <?php foreach ((get_the_category($myPosts[1]->ID)) as $category) { ?>
                                    <a href="<?= get_category_link($category->cat_ID); ?>" class="category-color"><?= $category->category_nicename; ?> </a>
                                <?php } ?>
                            </div>
                            <a href="<?= $myPosts[1]->guid; ?>">
                                <h3><?= $myPosts[1]->post_title; ?></h3>
                                <p>
                                    <?= $myPosts[1]->post_excerpt; ?>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-sm-12 col-xs-12 ">
                    <div class="fundo-gradient">
                        <div class="slide-grande" style="background-image:url('<?= $image2[0]; ?>');background-position: center center;background-repeat: no-repeat;">

                        </div>
                        <div class="texto">
                            <div class="post-category-slide">
                                <?php foreach ((get_the_category($myPosts[2]->ID)) as $category) { ?>
                                    <a href="<?= get_category_link($category->cat_ID); ?>" class="category-color"><?= $category->category_nicename; ?> </a>
                                <?php } ?>
                            </div>
                            <a href="<?= $myPosts[2]->guid; ?>">
                                <h3><?= $myPosts[2]->post_title; ?></h3>
                                <p>
                                    <?= $myPosts[2]->post_excerpt; ?>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="destaque">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-section-home">
                <h3>Destaques</h3>
                <div class="line-divisor"></div>
            </div>
        </div>
        <div class="row box-destaque">
            <?php
            $args = array(
                'post_type' => 'post',
                'meta_key' => '_campo_destaque',
                'meta_value' => 'sim',
                'posts_per_page' => 4,
            );

            $my_query = new WP_Query($args);

            while ($my_query->have_posts()) : $my_query->the_post();

                $post_thumbnail_id = get_post_thumbnail_id($post->ID);

                $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
            ?>

                <div class="col-md-3 col-sm-6 col-xs-12 destaque-itens">
                    <div class="thumbnail">

                        <a href="<?php the_permalink(); ?>">
                            <div class="img-thumb" style="background-image: url(<?= $post_thumbnail_url; ?>);"></div>
                        </a>

                        <div class="caption">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                        </div>

                        <div class="footer-post">
                            <div class="counter-post-view-home">
                                <small>
                                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.74316 6C6.36816 6 6.89941 5.78125 7.33691 5.34375C7.77441 4.90625 7.99316 4.375 7.99316 3.75C7.99316 3.125 7.77441 2.59375 7.33691 2.15625C6.89941 1.71875 6.36816 1.5 5.74316 1.5C5.11816 1.5 4.58691 1.71875 4.14941 2.15625C3.71191 2.59375 3.49316 3.125 3.49316 3.75C3.49316 4.375 3.71191 4.90625 4.14941 5.34375C4.58691 5.78125 5.11816 6 5.74316 6ZM5.74316 5.1C5.36816 5.1 5.04941 4.96875 4.78691 4.70625C4.52441 4.44375 4.39316 4.125 4.39316 3.75C4.39316 3.375 4.52441 3.05625 4.78691 2.79375C5.04941 2.53125 5.36816 2.4 5.74316 2.4C6.11816 2.4 6.43691 2.53125 6.69941 2.79375C6.96191 3.05625 7.09316 3.375 7.09316 3.75C7.09316 4.125 6.96191 4.44375 6.69941 4.70625C6.43691 4.96875 6.11816 5.1 5.74316 5.1ZM5.74316 7.5C4.5265 7.5 3.41816 7.16042 2.41816 6.48125C1.41816 5.80208 0.693164 4.89167 0.243164 3.75C0.693164 2.60833 1.41816 1.69792 2.41816 1.01875C3.41816 0.339583 4.5265 0 5.74316 0C6.95983 0 8.06816 0.339583 9.06816 1.01875C10.0682 1.69792 10.7932 2.60833 11.2432 3.75C10.7932 4.89167 10.0682 5.80208 9.06816 6.48125C8.06816 7.16042 6.95983 7.5 5.74316 7.5ZM5.74316 6.5C6.68483 6.5 7.54941 6.25208 8.33691 5.75625C9.12441 5.26042 9.7265 4.59167 10.1432 3.75C9.7265 2.90833 9.12441 2.23958 8.33691 1.74375C7.54941 1.24792 6.68483 1 5.74316 1C4.8015 1 3.93691 1.24792 3.14941 1.74375C2.36191 2.23958 1.75983 2.90833 1.34316 3.75C1.75983 4.59167 2.36191 5.26042 3.14941 5.75625C3.93691 6.25208 4.8015 6.5 5.74316 6.5Z" fill="#192C53" />
                                    </svg>

                                    <?= getPostViews(get_the_ID()); ?>
                                </small>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <div class="row box-pesquisa">
            <div class="col-md-12">
                <div id="inner-sidebar" class="inner-content-wrap">
                    <form action="https://blog.futfanatics.com.br/" method="get" accept-charset="utf-8" id="searchform" role="search">
                        <div class="relative-form">
                            <input type="text" placeholder="Procure por posts" name="s" id="s" value="">
                            <button type="submit" id="searchsubmit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="posts">

    <div class="container">

        <div class="row">
            <div class="col-md-12 title-section-home">
                <h3>Últimos Posts</h3>
                <div class="line-divisor"></div>
            </div>
        </div>

        <div class="col-md-12">

            <div class="row box-ultimos-posts">

                <?php
                $args = array(
                    'tag__not_in' => 2,
                    'posts_per_page' => 8,
                    'category__not_in' => $not_in
                );

                $my_query = new WP_Query($args);

                while ($my_query->have_posts()) : $my_query->the_post();

                    $post_thumbnail_id = get_post_thumbnail_id($post->ID);
                    $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
                ?>

                    <div class="col-md-3 col-sm-6 col-xs-6 posts-itens">
                        <div class="thumbnail">

                            <a href="<?php the_permalink(); ?>">
                                <div class="img-thumb" style="background-image: url(<?= $post_thumbnail_url; ?>);"></div>
                            </a>

                            <div class="caption">
                                <a href="<?php the_permalink(); ?>">
                                    <h3><?php the_title(); ?></h3>
                                </a>
                            </div>

                            <div class="footer-post">
                                <div class="counter-post-view-home">
                                    <small>
                                        <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.74316 6C6.36816 6 6.89941 5.78125 7.33691 5.34375C7.77441 4.90625 7.99316 4.375 7.99316 3.75C7.99316 3.125 7.77441 2.59375 7.33691 2.15625C6.89941 1.71875 6.36816 1.5 5.74316 1.5C5.11816 1.5 4.58691 1.71875 4.14941 2.15625C3.71191 2.59375 3.49316 3.125 3.49316 3.75C3.49316 4.375 3.71191 4.90625 4.14941 5.34375C4.58691 5.78125 5.11816 6 5.74316 6ZM5.74316 5.1C5.36816 5.1 5.04941 4.96875 4.78691 4.70625C4.52441 4.44375 4.39316 4.125 4.39316 3.75C4.39316 3.375 4.52441 3.05625 4.78691 2.79375C5.04941 2.53125 5.36816 2.4 5.74316 2.4C6.11816 2.4 6.43691 2.53125 6.69941 2.79375C6.96191 3.05625 7.09316 3.375 7.09316 3.75C7.09316 4.125 6.96191 4.44375 6.69941 4.70625C6.43691 4.96875 6.11816 5.1 5.74316 5.1ZM5.74316 7.5C4.5265 7.5 3.41816 7.16042 2.41816 6.48125C1.41816 5.80208 0.693164 4.89167 0.243164 3.75C0.693164 2.60833 1.41816 1.69792 2.41816 1.01875C3.41816 0.339583 4.5265 0 5.74316 0C6.95983 0 8.06816 0.339583 9.06816 1.01875C10.0682 1.69792 10.7932 2.60833 11.2432 3.75C10.7932 4.89167 10.0682 5.80208 9.06816 6.48125C8.06816 7.16042 6.95983 7.5 5.74316 7.5ZM5.74316 6.5C6.68483 6.5 7.54941 6.25208 8.33691 5.75625C9.12441 5.26042 9.7265 4.59167 10.1432 3.75C9.7265 2.90833 9.12441 2.23958 8.33691 1.74375C7.54941 1.24792 6.68483 1 5.74316 1C4.8015 1 3.93691 1.24792 3.14941 1.74375C2.36191 2.23958 1.75983 2.90833 1.34316 3.75C1.75983 4.59167 2.36191 5.26042 3.14941 5.75625C3.93691 6.25208 4.8015 6.5 5.74316 6.5Z" fill="#192C53" />
                                        </svg>

                                        <?= getPostViews(get_the_ID()); ?>
                                    </small>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="btn-mais-posts">
                    <a href="<?= get_category_link($newsCat->term_id); ?>">Ver Mais</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('templates/newsletter'); ?>

<section id="posts-categorys">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="post-category-title">
                    <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_5_2764" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="33" height="33">
                            <rect x="0.986328" y="0.969238" width="32" height="32" fill="#D9D9D9" />
                        </mask>
                        <g mask="url(#mask0_5_2764)">
                            <rect x="3.65332" y="7.63586" width="26.6667" height="18.6667" rx="2" stroke="#1C1B1F" stroke-width="2" />
                            <path d="M7.09999 15.9859L16.2514 10.4245C16.5721 10.2296 16.9748 10.2307 17.2945 10.4272L26.7602 16.2467C27.4104 16.6464 27.3911 17.5979 26.7252 17.9709L16.8009 23.5314C16.4726 23.7154 16.0687 23.6994 15.7559 23.49L7.06309 17.6715C6.45573 17.2649 6.47542 16.3654 7.09999 15.9859Z" stroke="#1C1B1F" stroke-width="2" />
                            <circle cx="16.986" cy="16.9693" r="2.66667" fill="#1C1B1F" />
                        </g>
                    </svg>

                    <h3>Brasileiros</h3>
                </div>

                <div class="post-category-box">
                    <?php
                    $brasileirosCat = get_category_by_slug('brasileiros');
                    if ($brasileirosCat) {
                        $args = array(
                            'category_name' => 'brasileiros',
                            'posts_per_page' => 4,
                        );

                        $brasileiros_query = new WP_Query($args);

                        if ($brasileiros_query->have_posts()) {
                            while ($brasileiros_query->have_posts()) {
                                $brasileiros_query->the_post();
                                $post_thumbnail_id = get_post_thumbnail_id($post->ID);
                                $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
                    ?>

                                <div class="post-category-item">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <div class="post-thumbnail">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="img-thumb" style="background-image: url(<?= $post_thumbnail_url; ?>);"></div>
                                            </a>
                                        </div>
                                    <?php } ?>

                                    <div class="texto">
                                        <a href="<?php the_permalink(); ?>" class="post-category-item-title">
                                            <h4><?php the_title(); ?></h4>
                                        </a>
                                    </div>

                                </div>
                    <?php }
                            wp_reset_postdata();
                        }
                    } ?>



                    <div class="post-category-nextmore">
                        <a href="<?= get_category_link($brasileirosCat->term_id); ?>">
                            Ver mais em Brasileiros
                            <svg width="20" height="20" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_5_2859" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="21" height="21">
                                    <rect x="0.49707" y="0.969238" width="20" height="20" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_5_2859)">
                                    <path d="M13.9759 11.8027H4.66341C4.4273 11.8027 4.22938 11.7228 4.06966 11.5631C3.90994 11.4034 3.83008 11.2054 3.83008 10.9693C3.83008 10.7332 3.90994 10.5353 4.06966 10.3756C4.22938 10.2159 4.4273 10.136 4.66341 10.136H13.9759L9.89258 6.05266C9.72591 5.886 9.64605 5.69155 9.65299 5.46933C9.65994 5.24711 9.74674 5.05266 9.91341 4.886C10.0801 4.73322 10.2745 4.65336 10.4967 4.64641C10.719 4.63947 10.9134 4.71933 11.0801 4.886L16.5801 10.386C16.6634 10.4693 16.7224 10.5596 16.7572 10.6568C16.7919 10.7541 16.8092 10.8582 16.8092 10.9693C16.8092 11.0804 16.7919 11.1846 16.7572 11.2818C16.7224 11.3791 16.6634 11.4693 16.5801 11.5527L11.0801 17.0527C10.9273 17.2054 10.7363 17.2818 10.5072 17.2818C10.278 17.2818 10.0801 17.2054 9.91341 17.0527C9.74674 16.886 9.66341 16.6881 9.66341 16.4589C9.66341 16.2297 9.74674 16.0318 9.91341 15.8652L13.9759 11.8027Z" fill="#1C1B1F" />
                                </g>
                            </svg>
                        </a>
                    </div>

                </div>


            </div>

            <div class="col-md-6">
                <div class="post-category-title">
                    <svg width="33" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_5_2780" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="33" height="33">
                            <rect x="0.0078125" y="0.969238" width="32" height="32" fill="#D9D9D9" />
                        </mask>
                        <g mask="url(#mask0_5_2780)">
                            <path d="M16.0081 30.3025C14.1637 30.3025 12.4304 29.9525 10.8081 29.2525C9.18592 28.5525 7.7748 27.6025 6.5748 26.4025C5.3748 25.2025 4.4248 23.7914 3.7248 22.1692C3.0248 20.547 2.6748 18.8136 2.6748 16.9692C2.6748 15.1248 3.0248 13.3914 3.7248 11.7692C4.4248 10.147 5.3748 8.73586 6.5748 7.53586C7.7748 6.33586 9.18592 5.38586 10.8081 4.68586C12.4304 3.98586 14.1637 3.63586 16.0081 3.63586C17.8526 3.63586 19.5859 3.98586 21.2081 4.68586C22.8304 5.38586 24.2415 6.33586 25.4415 7.53586C26.6415 8.73586 27.5915 10.147 28.2915 11.7692C28.9915 13.3914 29.3415 15.1248 29.3415 16.9692C29.3415 18.8136 28.9915 20.547 28.2915 22.1692C27.5915 23.7914 26.6415 25.2025 25.4415 26.4025C24.2415 27.6025 22.8304 28.5525 21.2081 29.2525C19.5859 29.9525 17.8526 30.3025 16.0081 30.3025ZM16.0081 27.6359C18.9859 27.6359 21.5081 26.6025 23.5748 24.5359C25.6415 22.4692 26.6748 19.947 26.6748 16.9692C26.6748 16.8136 26.6692 16.6525 26.6581 16.4859C26.647 16.3192 26.6415 16.1803 26.6415 16.0692C26.5304 16.7136 26.2304 17.247 25.7415 17.6692C25.2526 18.0914 24.6748 18.3025 24.0081 18.3025H21.3415C20.6081 18.3025 19.9804 18.0414 19.4581 17.5192C18.9359 16.997 18.6748 16.3692 18.6748 15.6359V14.3025H13.3415V11.6359C13.3415 10.9025 13.6026 10.2748 14.1248 9.75253C14.647 9.23031 15.2748 8.9692 16.0081 8.9692H17.3415C17.3415 8.45809 17.4804 8.00809 17.7581 7.6192C18.0359 7.23031 18.3748 6.91364 18.7748 6.6692C18.3304 6.55809 17.8804 6.4692 17.4248 6.40253C16.9692 6.33586 16.497 6.30253 16.0081 6.30253C13.0304 6.30253 10.5081 7.33586 8.44147 9.40253C6.3748 11.4692 5.34147 13.9914 5.34147 16.9692H12.0081C13.4748 16.9692 14.7304 17.4914 15.7748 18.5359C16.8192 19.5803 17.3415 20.8359 17.3415 22.3025V23.6359H13.3415V27.3025C13.7859 27.4136 14.2248 27.497 14.6581 27.5525C15.0915 27.6081 15.5415 27.6359 16.0081 27.6359Z" fill="#1C1B1F" />
                        </g>
                    </svg>

                    <h3>Internacionais</h3>
                </div>

                <div class="post-category-box">
                    <?php
                    $internacionaisCat = get_category_by_slug('internacionais');
                    if ($internacionaisCat) {
                        $args = array(
                            'category_name' => 'internacionais',
                            'posts_per_page' => 4,
                        );

                        $internacionais_query = new WP_Query($args);

                        if ($internacionais_query->have_posts()) {
                            while ($internacionais_query->have_posts()) {
                                $internacionais_query->the_post();
                                $post_thumbnail_id = get_post_thumbnail_id($post->ID);
                                $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
                    ?>

                                <div class="post-category-item">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <div class="post-thumbnail">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="img-thumb" style="background-image: url(<?= $post_thumbnail_url; ?>);"></div>
                                            </a>
                                        </div>
                                    <?php } ?>

                                    <div class="texto">
                                        <a href="<?php the_permalink(); ?>" class="post-category-item-title">
                                            <h4><?php the_title(); ?></h4>
                                        </a>
                                    </div>

                                </div>
                    <?php }
                            wp_reset_postdata();
                        }
                    } ?>

                    <div class="post-category-nextmore">
                        <a href="<?= get_category_link($internacionaisCat->term_id); ?>">
                            Ver mais em Internacionais
                            <svg width="20" height="20" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_5_2859" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="21" height="21">
                                    <rect x="0.49707" y="0.969238" width="20" height="20" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_5_2859)">
                                    <path d="M13.9759 11.8027H4.66341C4.4273 11.8027 4.22938 11.7228 4.06966 11.5631C3.90994 11.4034 3.83008 11.2054 3.83008 10.9693C3.83008 10.7332 3.90994 10.5353 4.06966 10.3756C4.22938 10.2159 4.4273 10.136 4.66341 10.136H13.9759L9.89258 6.05266C9.72591 5.886 9.64605 5.69155 9.65299 5.46933C9.65994 5.24711 9.74674 5.05266 9.91341 4.886C10.0801 4.73322 10.2745 4.65336 10.4967 4.64641C10.719 4.63947 10.9134 4.71933 11.0801 4.886L16.5801 10.386C16.6634 10.4693 16.7224 10.5596 16.7572 10.6568C16.7919 10.7541 16.8092 10.8582 16.8092 10.9693C16.8092 11.0804 16.7919 11.1846 16.7572 11.2818C16.7224 11.3791 16.6634 11.4693 16.5801 11.5527L11.0801 17.0527C10.9273 17.2054 10.7363 17.2818 10.5072 17.2818C10.278 17.2818 10.0801 17.2054 9.91341 17.0527C9.74674 16.886 9.66341 16.6881 9.66341 16.4589C9.66341 16.2297 9.74674 16.0318 9.91341 15.8652L13.9759 11.8027Z" fill="#1C1B1F" />
                                </g>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="post-category-title">
                    <svg width="27" height="30" viewBox="0 0 27 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.3334 18.3691C12.1778 18.3691 10.6001 18.4913 9.60006 18.7358C8.60006 18.9802 7.74451 19.458 7.0334 20.1691L2.50007 24.7024C2.25562 24.9469 1.95007 25.0691 1.5834 25.0691C1.21673 25.0691 0.900065 24.9469 0.633398 24.7024C0.366732 24.4358 0.233398 24.1191 0.233398 23.7524C0.233398 23.3858 0.366732 23.0691 0.633398 22.8024L5.1334 18.3024C5.82229 17.6136 6.29451 16.7524 6.55007 15.7191C6.80562 14.6858 6.9334 13.1025 6.9334 10.9691C6.9334 9.68023 7.22229 8.41356 7.80007 7.16912C8.37784 5.92467 9.20006 4.76912 10.2667 3.70245C12.289 1.68023 14.5223 0.535784 16.9667 0.269117C19.4112 0.00245042 21.4223 0.680228 23.0001 2.30245C24.6001 3.90245 25.2667 5.92467 25.0001 8.36912C24.7334 10.8136 23.6001 13.0358 21.6001 15.0358C20.5334 16.1025 19.3778 16.9247 18.1334 17.5024C16.889 18.0802 15.6223 18.3691 14.3334 18.3691ZM10.7334 14.5024C11.7778 15.5247 13.189 15.9024 14.9667 15.6358C16.7445 15.3691 18.3334 14.5358 19.7334 13.1358C21.1556 11.7136 22.0056 10.1191 22.2834 8.35245C22.5612 6.58578 22.1778 5.20245 21.1334 4.20245C20.0667 3.13578 18.6723 2.73578 16.9501 3.00245C15.2278 3.26912 13.6445 4.11356 12.2001 5.53578C10.8001 6.93578 9.95006 8.51912 9.65006 10.2858C9.35006 12.0525 9.71118 13.458 10.7334 14.5024ZM21.0001 29.6358C19.5334 29.6358 18.2778 29.1136 17.2334 28.0691C16.189 27.0247 15.6667 25.7691 15.6667 24.3024C15.6667 22.8358 16.189 21.5802 17.2334 20.5358C18.2778 19.4913 19.5334 18.9691 21.0001 18.9691C22.4667 18.9691 23.7223 19.4913 24.7667 20.5358C25.8112 21.5802 26.3334 22.8358 26.3334 24.3024C26.3334 25.7691 25.8112 27.0247 24.7667 28.0691C23.7223 29.1136 22.4667 29.6358 21.0001 29.6358ZM21.0001 26.9691C21.7334 26.9691 22.3612 26.708 22.8834 26.1858C23.4056 25.6636 23.6667 25.0358 23.6667 24.3024C23.6667 23.5691 23.4056 22.9413 22.8834 22.4191C22.3612 21.8969 21.7334 21.6358 21.0001 21.6358C20.2667 21.6358 19.639 21.8969 19.1167 22.4191C18.5945 22.9413 18.3334 23.5691 18.3334 24.3024C18.3334 25.0358 18.5945 25.6636 19.1167 26.1858C19.639 26.708 20.2667 26.9691 21.0001 26.9691Z" fill="#1C1B1F" />
                    </svg>

                    <h3>Esportes</h3>
                </div>

                <div class="post-category-box">
                    <?php
                    $esportesCat = get_category_by_slug('esportes');
                    if ($esportesCat) {
                        $args = array(
                            'category_name' => 'esportes',
                            'posts_per_page' => 4,
                        );

                        $esportes_query = new WP_Query($args);

                        if ($esportes_query->have_posts()) {
                            while ($esportes_query->have_posts()) {
                                $esportes_query->the_post();
                                $post_thumbnail_id = get_post_thumbnail_id($post->ID);
                                $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
                    ?>

                                <div class="post-category-item">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <div class="post-thumbnail">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="img-thumb" style="background-image: url(<?= $post_thumbnail_url; ?>);"></div>
                                            </a>
                                        </div>
                                    <?php } ?>

                                    <div class="texto">
                                        <a href="<?php the_permalink(); ?>" class="post-category-item-title">
                                            <h4><?php the_title(); ?></h4>
                                        </a>
                                    </div>

                                </div>
                    <?php }
                            wp_reset_postdata();
                        }
                    } ?>

                    <div class="post-category-nextmore">
                        <a href="<?= get_category_link($esportesCat->term_id); ?>">
                            Ver mais em Esportes
                            <svg width="20" height="20" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_5_2859" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="21" height="21">
                                    <rect x="0.49707" y="0.969238" width="20" height="20" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_5_2859)">
                                    <path d="M13.9759 11.8027H4.66341C4.4273 11.8027 4.22938 11.7228 4.06966 11.5631C3.90994 11.4034 3.83008 11.2054 3.83008 10.9693C3.83008 10.7332 3.90994 10.5353 4.06966 10.3756C4.22938 10.2159 4.4273 10.136 4.66341 10.136H13.9759L9.89258 6.05266C9.72591 5.886 9.64605 5.69155 9.65299 5.46933C9.65994 5.24711 9.74674 5.05266 9.91341 4.886C10.0801 4.73322 10.2745 4.65336 10.4967 4.64641C10.719 4.63947 10.9134 4.71933 11.0801 4.886L16.5801 10.386C16.6634 10.4693 16.7224 10.5596 16.7572 10.6568C16.7919 10.7541 16.8092 10.8582 16.8092 10.9693C16.8092 11.0804 16.7919 11.1846 16.7572 11.2818C16.7224 11.3791 16.6634 11.4693 16.5801 11.5527L11.0801 17.0527C10.9273 17.2054 10.7363 17.2818 10.5072 17.2818C10.278 17.2818 10.0801 17.2054 9.91341 17.0527C9.74674 16.886 9.66341 16.6881 9.66341 16.4589C9.66341 16.2297 9.74674 16.0318 9.91341 15.8652L13.9759 11.8027Z" fill="#1C1B1F" />
                                </g>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="post-category-title">
                    <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_5_2812" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="33" height="33">
                            <rect x="0.0078125" y="0.969238" width="32" height="32" fill="#D9D9D9" />
                        </mask>
                        <g mask="url(#mask0_5_2812)">
                            <path d="M10.1748 9.50265L13.9081 4.66932C14.1748 4.31376 14.4915 4.05265 14.8581 3.88599C15.2248 3.71932 15.6081 3.63599 16.0081 3.63599C16.4081 3.63599 16.7915 3.71932 17.1581 3.88599C17.5248 4.05265 17.8415 4.31376 18.1081 4.66932L21.8415 9.50265L27.5081 11.4027C28.0859 11.5804 28.5415 11.9082 28.8748 12.386C29.2081 12.8638 29.3748 13.3915 29.3748 13.9693C29.3748 14.236 29.3359 14.5027 29.2581 14.7693C29.1804 15.036 29.0526 15.2915 28.8748 15.536L25.2081 20.736L25.3415 26.2027C25.3637 26.9804 25.1081 27.636 24.5748 28.1693C24.0415 28.7027 23.4192 28.9693 22.7081 28.9693C22.6637 28.9693 22.4192 28.936 21.9748 28.8693L16.0081 27.2027L10.0415 28.8693C9.93036 28.9138 9.80814 28.9415 9.6748 28.9527C9.54147 28.9638 9.41925 28.9693 9.30814 28.9693C8.59703 28.9693 7.9748 28.7027 7.44147 28.1693C6.90814 27.636 6.65258 26.9804 6.6748 26.2027L6.80814 20.7027L3.1748 15.536C2.99703 15.2915 2.86925 15.036 2.79147 14.7693C2.71369 14.5027 2.6748 14.236 2.6748 13.9693C2.6748 13.4138 2.83592 12.8971 3.15814 12.4193C3.48036 11.9415 3.93036 11.6027 4.50814 11.4027L10.1748 9.50265ZM11.8081 11.8027L5.34147 13.936L9.4748 19.9027L9.34147 26.2693L16.0081 24.436L22.6748 26.3027L22.5415 19.9027L26.6748 14.0027L20.2081 11.8027L16.0081 6.30265L11.8081 11.8027Z" fill="#1C1B1F" />
                        </g>
                    </svg>

                    <h3>Lançamentos</h3>
                </div>

                <div class="post-category-box">
                    <?php
                    $lancamentosCat = get_category_by_slug('lancamentos');
                    if ($lancamentosCat) {
                        $args = array(
                            'category_name' => 'lancamentos',
                            'posts_per_page' => 4,
                        );

                        $lancamentos_query = new WP_Query($args);

                        if ($lancamentos_query->have_posts()) {
                            while ($lancamentos_query->have_posts()) {
                                $lancamentos_query->the_post();
                                $post_thumbnail_id = get_post_thumbnail_id($post->ID);
                                $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
                    ?>

                                <div class="post-category-item">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <div class="post-thumbnail">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="img-thumb" style="background-image: url(<?= $post_thumbnail_url; ?>);"></div>
                                            </a>
                                        </div>
                                    <?php } ?>

                                    <div class="texto">
                                        <a href="<?php the_permalink(); ?>" class="post-category-item-title">
                                            <h4><?php the_title(); ?></h4>
                                        </a>
                                    </div>

                                </div>
                    <?php }
                            wp_reset_postdata();
                        }
                    } ?>

                    <div class="post-category-nextmore">
                        <a href="<?= get_category_link($lancamentosCat->term_id); ?>">
                            Ver mais em Lançamentos
                            <svg width="20" height="20" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_5_2859" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="21" height="21">
                                    <rect x="0.49707" y="0.969238" width="20" height="20" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_5_2859)">
                                    <path d="M13.9759 11.8027H4.66341C4.4273 11.8027 4.22938 11.7228 4.06966 11.5631C3.90994 11.4034 3.83008 11.2054 3.83008 10.9693C3.83008 10.7332 3.90994 10.5353 4.06966 10.3756C4.22938 10.2159 4.4273 10.136 4.66341 10.136H13.9759L9.89258 6.05266C9.72591 5.886 9.64605 5.69155 9.65299 5.46933C9.65994 5.24711 9.74674 5.05266 9.91341 4.886C10.0801 4.73322 10.2745 4.65336 10.4967 4.64641C10.719 4.63947 10.9134 4.71933 11.0801 4.886L16.5801 10.386C16.6634 10.4693 16.7224 10.5596 16.7572 10.6568C16.7919 10.7541 16.8092 10.8582 16.8092 10.9693C16.8092 11.0804 16.7919 11.1846 16.7572 11.2818C16.7224 11.3791 16.6634 11.4693 16.5801 11.5527L11.0801 17.0527C10.9273 17.2054 10.7363 17.2818 10.5072 17.2818C10.278 17.2818 10.0801 17.2054 9.91341 17.0527C9.74674 16.886 9.66341 16.6881 9.66341 16.4589C9.66341 16.2297 9.74674 16.0318 9.91341 15.8652L13.9759 11.8027Z" fill="#1C1B1F" />
                                </g>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

<section id="sobre">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-section-home">
                <h3>Sobre a Fut</h3>
                <div class="line-divisor"></div>
            </div>
        </div>

        <div class="box-sobre">
            <div class="sobre-img">
                <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="2.25488" y="2.46924" width="80" height="80" rx="8" fill="url(#paint0_linear_5_2928)" />
                    <rect x="1.50488" y="1.71924" width="81.5" height="81.5" rx="8.75" stroke="#192C53" stroke-opacity="0.24" stroke-width="1.5" />
                    <path d="M27.9339 62.3783L14.2549 62.3636L28.7785 22.5603L70.2549 22.6045L66.1688 33.8086L38.3665 33.7792L36.5162 38.8466L32.6107 49.5406L27.929 62.3734L27.9339 62.3783ZM38.5325 38.8515L60.8963 38.876L56.9713 49.624L34.6074 49.5994L38.5325 38.8515Z" fill="#192C53" />
                    <path d="M32.141 49.3692L27.5775 61.8779L14.9693 61.8643L29.1281 23.0607L69.5406 23.1037L65.819 33.3083L38.367 33.2792L38.0169 33.2788L37.8968 33.6077L36.0466 38.6751L36.0466 38.6751L32.1411 49.3691L32.141 49.3692ZM35.322 49.1002L38.882 39.3519L60.1817 39.3752L56.6217 49.1236L35.322 49.1002Z" stroke="#192C53" stroke-opacity="0.24" />
                    <defs>
                        <linearGradient id="paint0_linear_5_2928" x1="82.2549" y1="2.46923" x2="3.53187" y2="82.4692" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#E5E5E5" />
                            <stop offset="1" stop-color="white" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>

            <p><?php echo nl2br(esc_html(get_option('sobre_texto'))); ?></p>
        </div>
    </div>
</section>

<?php get_footer(); ?>