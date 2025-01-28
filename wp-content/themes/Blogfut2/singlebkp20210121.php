<?php get_header(); ?>
<section id="posts">
    <div class="container">
        <div class="col-md-8 col-xs-12">
            <?php
            // The Loop
            while (have_posts()) : the_post();
                ?>
                <?php setPostViews(get_the_ID()); ?>
                <article class="post standard col12" id="single-post">
                    <div class="post-header">
                        <div class="post-interno">

                            <div class="borda-post">
                                <span class="post-cat"><?php the_category(); ?></span>
                                <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                            </div>
                        </div>
                        <span class="divider"></span>
                    </div>
                    <div class="footer-post">
                        <?php
                        if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
                            the_post_thumbnail('full');
                        }
                        ?>
                        <ul>
                            <li>
                                <small><i class="glyphicon glyphicon-time" aria-hidden="true"></i> <?php the_date('d/m/Y'); ?></small>
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
                    <hr>
                    <div class="post-content">
                        <?php the_content(); ?>

                        <?php include_once 'templates/forms-times.php'; ?>
                        
                        <?php echo do_shortcode('[fbcomments]'); ?>
                    </div>
                </article>					
            <?php endwhile; ?>
        </div>


        <div class="col-md-4 col-xs-12 hidden-xs">
            <?php get_sidebar(); ?>
        </div>


        <div class="row"></div>
        <div class="row">
            <h2 class="text-center" style="margin-top: 45px; font-family: GothamBlack; color: #121135;">Últimos Posts</h2>
            <?php
            // args
            $my_args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'orderby' => 'id'
            );

            // query
            $my_query = new WP_Query($my_args);
            ?>

            <?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>

                    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12" style="margin-bottom: 45px;">
                        <div class="thumbnail">
                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-responsive card-img-top')) ?>
                            <div class="caption col-eq-height" style="height: 235px;">
                                <a href="<?php the_permalink() ?>">
                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>
                                </a>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                            <!--<a href="<?php //the_permalink();                    ?>" class="btn btn-my-color-5">Leia mais</a>-->
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>

            <?php wp_reset_query(); ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>
<script type="text/javascript">
    jQuery("#lancamento-meio").owlCarousel({
        items: 3,
        nav: false,
        margin: 10,
        slideBy: 3,
        responsiveClass: true,
        loop: true,
        autoplay: true,
        dots: true,
        responsive: {
            320: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 3
            }
        }
    });
</script>