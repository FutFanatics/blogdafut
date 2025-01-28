<?php get_header('news');?>
<section id="posts">

    <div class="name-category">
        <h1><?php single_cat_title(); ?></h1>
    </div>

    <div class="init-posts">
        <div class="container">
            <?php if (have_posts() && $paged < 2): ?>
                <div class="row">
                    <section id="topo">
                        <?php
                        $i = 0;
                        while (have_posts()):
                            if ($i < 3) {
                                the_post();
                                ?>
                                <div class="col-xs-12 <?php echo $i == 0 ? 'col-md-8' : 'col-sm-6 col-md-4'; ?>">
                                    <div class="fundo-gradient">
                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?>
                                        <div class="<?php echo $i == 0 ? 'slide-grande' : 'slide-pequeno'; ?>" style="background-image:url('<?php echo $image ? $image[0] : ''; ?>');background-position: center center;background-repeat: no-repeat;"></div>
                                        <div class="<?php echo $i == 0 ? 'texto' : 'texto-small'; ?>">
                                            <a href="<?php the_permalink(); ?>">
                                                <h3><?php the_title(); ?></h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $i++;
                            } else {
                                break;
                            }
                        endwhile;
                        ?>
                    </section>
                </div>
            <?php endif; ?>

            <div class="row">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        ?>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                <div class="thumbnail">
                                    <div class="cat-slug">
                                        <ul>
                                            <?php foreach ((get_the_category()) as $category) { ?>
                                                <li>
                                                    <a href="<?php echo get_category_link($category->cat_ID); ?>" class="category-color"><?php echo $category->category_nicename; ?> </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <a href="<?php the_permalink() ?>">
                                        <div class="img-thumb" style="background-image: url(<?php echo $featured_img_url; ?>); height: 230px;"></div>
                                    </a>
                                    <div class="caption col-eq-height">
                                        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                        <p>
                                            <?php the_excerpt(); ?>
                                        </p>
                                    </div>
                                    <div class="footer-post">
                                        <ul>
                                            <li>
                                                <small><i class="glyphicon glyphicon-time" aria-hidden="true"></i> <?php echo get_the_time('d/m/Y', get_the_ID()); ?></small>
                                            </li>
                                            <li>
                                                <small>
                                                    <i class="glyphicon glyphicon-comment" aria-hidden="true"></i> 
                                                    <fb:comments-count href="<?php echo get_permalink(the_ID()); ?>"></fb:comments-count>
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
                    <?php endwhile;
                    ?>

                    <div class="paginacao">
                        <?php if (function_exists('wp_pagenavi')) : ?>
                            <?php wp_pagenavi() ?>
                        <?php else : ?>
                            <div class="maisantigos"><?php next_posts_link(__('&laquo; Mais antigos', 'arclite')) ?></div>
                            <div class="maisrecentes"><?php previous_posts_link(__('Mais recentes &raquo;', 'arclite')) ?></div>
                        <?php endif; ?>
                    </div>
                <?php else:
                    ?>
                    <li><?php _e('Sorry, no posts matched your criteria.'); ?></li>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
