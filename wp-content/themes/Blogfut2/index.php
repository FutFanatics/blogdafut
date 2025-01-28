<?php

/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */

get_header();?>
<section id="posts">

    <div class="container">

        <div class="row box-pesquisa">
            <div class="col-md-12">
                <div id="inner-sidebar" class="inner-content-wrap">
                    <form action="https://blog.futfanatics.com.br/" method="get" accept-charset="utf-8" id="searchform" role="search">
                        <div class="relative-form">
                            <input type="text" placeholder="Procure por posts" name="s" id="s" value="<?= (get_search_query()) ?? '' ?>" />
                            <button type="submit" id="searchsubmit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="name-category">
            <h1 class="page-title"><?php printf(__('Resultados por: %s', 'shape'), '<span>' . get_search_query() . '</span>'); ?></h1>
        </div>

    </div>

    <div class="init-posts">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-posts-post">
                        <?php
                        if (!have_posts()) { ?>
                            <h3>Não foi dessa vez fanático! A sua pesquisa não foi encontrada...</h3>
                        <?php }

                        while (have_posts()) : the_post();

                            $post_thumbnail_id = get_post_thumbnail_id($post->ID);
                            $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
                        ?>

                            <article>

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
                                
                            </article>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('templates/newsletter'); ?>

    <section id='post-explorer'>

        <div class="container">
            <div class="row">
                <div class="col-md-12 title-section-home">
                    <h3>Explore também</h3>
                    <div class="line-divisor"></div>
                </div>
            </div>

            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'orderby' => 'rand',
                'post__not_in' => array(get_the_ID())
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) { ?>
                <div class="row box-posts-post-itens">
                    <?php while ($query->have_posts()) {
                        $query->the_post();
                        $post_thumbnail_id = get_post_thumbnail_id($post->ID);
                        $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
                    ?>
                        <div class="col-6 col-sm-6 col-md-3">
                            <article>
                                <div class="thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="img-thumb" style="background-image: url(<?= $post_thumbnail_url; ?>);"></div>
                                    </a>
                                    <div class="caption col-eq-height">
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
                            </article>
                        </div>
                    <?php } ?>

                </div>
            <?php } ?>

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

                <p><?= nl2br(esc_html(get_option('sobre_texto'))); ?></p>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>