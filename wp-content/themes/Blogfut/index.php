<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */
 
get_header(); ?>
 <section id="posts">
<div class="name-category">
    <h1 class="page-title"><?php printf( __( 'Resultados por: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
</div>
    <div class="init-posts">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <?php
                        // The Loop
                       if( !have_posts()){ ?>
                       <h3>Não foi dessa vez fanático! A sua pesquisa não foi encontrada...</h3>
                       <?php }
                        while ( have_posts() ) : the_post();
                        
                        $post_thumbnail_id = get_post_thumbnail_id($post->ID);
                        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
                        ?>

                            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                            <div class="col-sm-6 col-md-6">
                                <div class="thumbnail">
                                <div class="cat-slug">
                                <ul>
                                <?php
                                foreach((get_the_category()) as $category) { ?>
                                    <li><a href="<?php echo get_category_link($category->cat_ID); ?>" class="category-color"><?php echo $category->category_nicename; ?> </a> </li> 
                                <?php } ?>
                                </ul>
                                </div>
                                <a href="<?php the_permalink(); ?>">
                                 <div class="img-thumb" style="background-image: url(<?php echo $post_thumbnail_url; ?>); height: 240px;"></div>
                                 </a>
                                  <div class="caption col-eq-height">
                                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                    <p><?php the_excerpt(); ?></p>
                                  </div>
                                  <div class="footer-post">
                                                <ul>
                                                    <li>
                                                        <small><i class="glyphicon glyphicon-time" aria-hidden="true"></i> <?php the_date('d/m/Y'); ?></small>
                                                    </li>
                                                    <li>
                                                        <small>
                                <i class="glyphicon glyphicon-comment" aria-hidden="true"></i> 
                                <?php echo $my_var = get_comments_number( $post_id ); ?> 
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
                            </div>
                            </article>   
                        <?php endwhile; ?>               
                    </div>
                </div>
                <div class="col-md-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>