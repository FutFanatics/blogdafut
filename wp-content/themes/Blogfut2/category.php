<?php
if (strpos(get_category_parents(get_queried_object_id()), 'News/') !== false) {
    require_once 'category-news.php';
} else { ?>

    <?php get_header(); ?>

    <section id="posts">
        <div class="container">
            <div class="name-category">
                <h1>
                    <span class="icon-category"><?= getIconCategory(get_queried_object_id()) ?></span>    
                <?php single_cat_title(); ?></h1>
            </div>
        </div>      

        <section id="topo">
            <div class="container">
                <div class="row">
                    <?php

                    $category_id = get_queried_object_id();
                  
                    global $post;

                    $myPosts = get_posts(array(
                        'category' => $category_id,
                        'numberposts' => 3,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ));

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

        <section id="posts" class="post-page-category">

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
                            'post__not_in' => array($myPosts[0]->ID, $myPosts[1]->ID, $myPosts[2]->ID),
                            'posts_per_page' => 8,
                            'category__in' => array(get_queried_object_id()),
                            'order' => 'DESC',
                            'paged' => get_query_var('paged') ? get_query_var('paged') : 1
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
                    
                        <div class="paginacao paginacao-style">                           
                           
                            <?php if (function_exists('wp_pagenavi')) : ?>
                                <div class="ir-para-inicio">
                                    <a href="<?= get_pagenum_link(1); ?>"><?php _e('<svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 12.9692C0.716667 12.9692 0.479167 12.8734 0.2875 12.6817C0.0958333 12.4901 0 12.2526 0 11.9692V1.96924C0 1.6859 0.0958333 1.4484 0.2875 1.25674C0.479167 1.06507 0.716667 0.969238 1 0.969238C1.28333 0.969238 1.52083 1.06507 1.7125 1.25674C1.90417 1.4484 2 1.6859 2 1.96924V11.9692C2 12.2526 1.90417 12.4901 1.7125 12.6817C1.52083 12.8734 1.28333 12.9692 1 12.9692ZM7.8 6.96924L11.7 10.8692C11.8833 11.0526 11.975 11.2859 11.975 11.5692C11.975 11.8526 11.8833 12.0859 11.7 12.2692C11.5167 12.4526 11.2833 12.5442 11 12.5442C10.7167 12.5442 10.4833 12.4526 10.3 12.2692L5.7 7.66924C5.6 7.56924 5.52917 7.46091 5.4875 7.34424C5.44583 7.22757 5.425 7.10257 5.425 6.96924C5.425 6.83591 5.44583 6.71091 5.4875 6.59424C5.52917 6.47757 5.6 6.36924 5.7 6.26924L10.3 1.66924C10.4833 1.4859 10.7167 1.39424 11 1.39424C11.2833 1.39424 11.5167 1.4859 11.7 1.66924C11.8833 1.85257 11.975 2.0859 11.975 2.36924C11.975 2.65257 11.8833 2.88591 11.7 3.06924L7.8 6.96924Z" fill="#192C53"/></svg>', 'arclite'); ?></a>
                                </div>

                                <?php wp_pagenavi(array('options' => array(
                                    'prev_text' => '<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.7998 5.96929L6.6998 9.86929C6.88314 10.0526 6.9748 10.286 6.9748 10.5693C6.9748 10.8526 6.88314 11.086 6.6998 11.2693C6.51647 11.4526 6.28314 11.5443 5.9998 11.5443C5.71647 11.5443 5.48314 11.4526 5.2998 11.2693L0.699805 6.66929C0.599805 6.56929 0.528971 6.46095 0.487305 6.34429C0.445638 6.22762 0.424805 6.10262 0.424805 5.96929C0.424805 5.83595 0.445638 5.71095 0.487305 5.59429C0.528971 5.47762 0.599805 5.36929 0.699805 5.26929L5.2998 0.669287C5.48314 0.485954 5.71647 0.394287 5.9998 0.394287C6.28314 0.394287 6.51647 0.485954 6.6998 0.669287C6.88314 0.85262 6.9748 1.08595 6.9748 1.36929C6.9748 1.65262 6.88314 1.88595 6.6998 2.06929L2.7998 5.96929Z" fill="#192C53"/></svg>', 
                                    'next_text' => '<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.2002 5.96929L0.300195 9.86929C0.116862 10.0526 0.0251951 10.286 0.0251951 10.5693C0.0251951 10.8526 0.116862 11.086 0.300195 11.2693C0.483529 11.4526 0.716862 11.5443 1.0002 11.5443C1.28353 11.5443 1.51686 11.4526 1.7002 11.2693L6.3002 6.66929C6.4002 6.56929 6.47103 6.46095 6.5127 6.34429C6.55436 6.22762 6.5752 6.10262 6.5752 5.96929C6.5752 5.83595 6.55436 5.71095 6.5127 5.59429C6.47103 5.47762 6.4002 5.36929 6.3002 5.26929L1.7002 0.669287C1.51686 0.485954 1.28353 0.394287 1.0002 0.394287C0.716862 0.394287 0.483529 0.485954 0.300195 0.669287C0.116862 0.85262 0.0251951 1.08595 0.0251951 1.36929C0.0251951 1.65262 0.116862 1.88595 0.300195 2.06929L4.2002 5.96929Z" fill="#192C53"/></svg>', 
                                    'dotleft_text' => '...', 
                                    'dotright_text' => '...',))); ?>

                                <div class="ir-para-final">
                                    <a href="<?= get_pagenum_link($wp_query->max_num_pages); ?>"><?php _e('<svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 12.9692C11.2833 12.9692 11.5208 12.8734 11.7125 12.6817C11.9042 12.4901 12 12.2526 12 11.9692V1.96924C12 1.6859 11.9042 1.4484 11.7125 1.25674C11.5208 1.06507 11.2833 0.969238 11 0.969238C10.7167 0.969238 10.4792 1.06507 10.2875 1.25674C10.0958 1.4484 10 1.6859 10 1.96924V11.9692C10 12.2526 10.0958 12.4901 10.2875 12.6817C10.4792 12.8734 10.7167 12.9692 11 12.9692ZM4.2 6.96924L0.3 10.8692C0.116667 11.0526 0.0249996 11.2859 0.0249996 11.5692C0.0249996 11.8526 0.116667 12.0859 0.3 12.2692C0.483334 12.4526 0.716666 12.5442 1 12.5442C1.28333 12.5442 1.51667 12.4526 1.7 12.2692L6.3 7.66924C6.4 7.56924 6.47083 7.46091 6.5125 7.34424C6.55417 7.22757 6.575 7.10257 6.575 6.96924C6.575 6.83591 6.55417 6.71091 6.5125 6.59424C6.47083 6.47757 6.4 6.36924 6.3 6.26924L1.7 1.66924C1.51667 1.4859 1.28333 1.39424 1 1.39424C0.716666 1.39424 0.483334 1.4859 0.3 1.66924C0.116667 1.85257 0.0249996 2.0859 0.0249996 2.36924C0.0249996 2.65257 0.116667 2.88591 0.3 3.06924L4.2 6.96924Z" fill="#192C53"/></svg>', 'arclite'); ?></a>
                                </div>
                            <?php else : ?>
                                <div class="maisantigos"> <?php next_posts_link(__('«', 'arclite')) ?> </div>
                                <div class="maisrecentes"> <?php previous_posts_link(__('»', 'arclite')) ?> </div>
                            <?php endif; ?>
                            
                            
                            
                           
                        </div>
                                
                    </div>
                </div>
            </div>
        </section>

    </section>

    <section id='post-explorer'>

        <div class="container">
            <div class="row">
                <div class="col-md-12 title-section-home">
                    <h3>Explore também</h3>
                    <div class="line-divisor"></div>
                </div>
            </div>

            <?php
                $category = get_the_category();
                $category_id = $category ? $category[0]->cat_ID : null;

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'orderby' => 'rand',
                    'post__not_in' => array(get_the_ID())
                );

                if ($category_id) {
                    $args['cat'] = $category_id;
                }

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


    <?php get_footer(); ?><?php } ?>