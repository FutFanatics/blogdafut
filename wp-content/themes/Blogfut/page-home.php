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

<section id="topo">
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

            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="fundo-gradient">
                    <div class="slide-grande" style="background-image:url('<?php echo $image0[0]; ?>');background-position: center center;background-repeat: no-repeat;">

                    </div>
                    <div class="texto">
                        <a href="<?php echo $myPosts[0]->guid; ?>">
                            <h3><?php echo $myPosts[0]->post_title; ?></h3>
                            <p>
                                <?php echo $myPosts[0]->post_excerpt; ?>
                            </p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-ms-12 col-xs-12">
                <div class="row">
                    <div class="col-sm-6 col-md-12">
                        <div class="fundo-gradient">
                            <div class="slide-pequeno" style="background-image:url('<?php echo $image1[0]; ?>');background-position: center center">

                            </div>
                            <div class="texto-small">
                                <a href="<?php echo $myPosts[1]->guid; ?>">
                                    <h3><?php echo $myPosts[1]->post_title; ?></h3>
                                    <p>
                                        <?php echo $myPosts[1]->post_excerpt; ?>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-12 padding-top">
                        <div class="fundo-gradient">
                            <div class="slide-pequeno" style="background-image:url('<?php echo $image2[0]; ?>');background-position: center center">

                            </div>
                            <div class="texto-small">
                                <a href="<?php echo $myPosts[2]->guid; ?>">
                                    <h3><?php echo $myPosts[2]->post_title; ?></h3>
                                    <p>
                                        <?php echo $myPosts[2]->post_excerpt; ?>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr/>
    </div>
</section>



<section id="posts">

    <div class="container">

        <div class="col-md-8">

            <div class="row">

                <?php
                $args = array(
                    'tag__not_in' => 2,
                    'posts_per_page' => 10,
                    'category__not_in' => $not_in
                );

                $my_query = new WP_Query($args);

                $counter = 1;

                while ($my_query->have_posts()) : $my_query->the_post();

                    $post_thumbnail_id = get_post_thumbnail_id($post->ID);

                    $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
                    ?>

                    <div class="col-sm-6 col-md-6 col-xs-12">

                        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                            <div class="thumbnail">
                                <div class="cat-slug">
                                    <ul>
                                        <?php foreach ((get_the_category()) as $category) { ?>
                                            <li><a href="<?php echo get_category_link($category->cat_ID); ?>" class="category-color"><?php echo $category->category_nicename; ?> </a></li>
                                        <?php } ?>
                                    </ul>
                                </div>

                                <a href="<?php the_permalink(); ?>">
                                    <div class="img-thumb" style="background-image: url(<?php echo $post_thumbnail_url; ?>); height: 230px;"></div>
                                </a>

                                <div class="caption col-eq-height">
                                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                    <p><?php the_excerpt(); ?></p>

                                </div>

                                <div class="footer-post">
                                    <ul>
                                        <li>
                                            <small><i class="glyphicon glyphicon-time" aria-hidden="true"></i> <?php echo get_the_date('d/m/Y'); ?></small>
                                        </li>

                                        <li>
                                            <small>
                                                <i class="glyphicon glyphicon-comment" aria-hidden="true"></i> 
                                                <fb:comments-count href="<?php echo get_permalink($post->ID); ?>"></fb:comments-count>
                                            </small>
                                        </li>

                                        <li>
                                            <small>
                                                <i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i> 
                                                <?php echo getPostViews(get_the_ID()); ?>
                                            </small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>

                    <?php
                    if ($counter % 2 == 0) {
                        echo '<hr style="clear: left;">';
                    }

                    $counter++;
                    ?>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
            </div>
        </div>

        <div class="col-md-4 col-xs-12">
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>