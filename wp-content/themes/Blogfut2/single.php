<?php get_header();?>

<section id="posts" class="page-noticia">
    <div class="container">
        <div class="col-md-12 col-xs-12">

            <?php while (have_posts()) : the_post();?>

                <?php setPostViews(get_the_ID()); ?>

                <article class="post standard col12" id="single-post">
                    <div class="post-header">
                        <div class="post-interno">
                            <div class="">                               
                                <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                            </div>
                        </div>
                        <span class="divider"></span>
                    </div>
                    <div class="footer-post">
                        <?php
                            if (has_post_thumbnail()){
                                the_post_thumbnail('full');
                            }
                        ?>

                        <div class="footer-post-interno">

                           <span class="post-cat"><?php the_category(); ?></span>
                           
                           <div class="post-details-content">

                                <div class="post-dc-date">
                                    <small>
                                        <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.65 7.85L7.35 7.15L5.5 5.3V3H4.5V5.7L6.65 7.85ZM5 10.5C4.30833 10.5 3.65833 10.3687 3.05 10.1062C2.44167 9.84375 1.9125 9.4875 1.4625 9.0375C1.0125 8.5875 0.65625 8.05833 0.39375 7.45C0.13125 6.84167 0 6.19167 0 5.5C0 4.80833 0.13125 4.15833 0.39375 3.55C0.65625 2.94167 1.0125 2.4125 1.4625 1.9625C1.9125 1.5125 2.44167 1.15625 3.05 0.89375C3.65833 0.63125 4.30833 0.5 5 0.5C5.69167 0.5 6.34167 0.63125 6.95 0.89375C7.55833 1.15625 8.0875 1.5125 8.5375 1.9625C8.9875 2.4125 9.34375 2.94167 9.60625 3.55C9.86875 4.15833 10 4.80833 10 5.5C10 6.19167 9.86875 6.84167 9.60625 7.45C9.34375 8.05833 8.9875 8.5875 8.5375 9.0375C8.0875 9.4875 7.55833 9.84375 6.95 10.1062C6.34167 10.3687 5.69167 10.5 5 10.5ZM5 9.5C6.10833 9.5 7.05208 9.11042 7.83125 8.33125C8.61042 7.55208 9 6.60833 9 5.5C9 4.39167 8.61042 3.44792 7.83125 2.66875C7.05208 1.88958 6.10833 1.5 5 1.5C3.89167 1.5 2.94792 1.88958 2.16875 2.66875C1.38958 3.44792 1 4.39167 1 5.5C1 6.60833 1.38958 7.55208 2.16875 8.33125C2.94792 9.11042 3.89167 9.5 5 9.5Z" fill="#192C53"/>
                                        </svg>
                                        <span><?php the_date('d/m/Y'); ?></span>
                                    </small>
                                </div>

                                <div class="post-dc-views">
                                    <small>
                                        <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 6.5C6.625 6.5 7.15625 6.28125 7.59375 5.84375C8.03125 5.40625 8.25 4.875 8.25 4.25C8.25 3.625 8.03125 3.09375 7.59375 2.65625C7.15625 2.21875 6.625 2 6 2C5.375 2 4.84375 2.21875 4.40625 2.65625C3.96875 3.09375 3.75 3.625 3.75 4.25C3.75 4.875 3.96875 5.40625 4.40625 5.84375C4.84375 6.28125 5.375 6.5 6 6.5ZM6 5.6C5.625 5.6 5.30625 5.46875 5.04375 5.20625C4.78125 4.94375 4.65 4.625 4.65 4.25C4.65 3.875 4.78125 3.55625 5.04375 3.29375C5.30625 3.03125 5.625 2.9 6 2.9C6.375 2.9 6.69375 3.03125 6.95625 3.29375C7.21875 3.55625 7.35 3.875 7.35 4.25C7.35 4.625 7.21875 4.94375 6.95625 5.20625C6.69375 5.46875 6.375 5.6 6 5.6ZM6 8C4.78333 8 3.675 7.66042 2.675 6.98125C1.675 6.30208 0.95 5.39167 0.5 4.25C0.95 3.10833 1.675 2.19792 2.675 1.51875C3.675 0.839583 4.78333 0.5 6 0.5C7.21667 0.5 8.325 0.839583 9.325 1.51875C10.325 2.19792 11.05 3.10833 11.5 4.25C11.05 5.39167 10.325 6.30208 9.325 6.98125C8.325 7.66042 7.21667 8 6 8ZM6 7C6.94167 7 7.80625 6.75208 8.59375 6.25625C9.38125 5.76042 9.98333 5.09167 10.4 4.25C9.98333 3.40833 9.38125 2.73958 8.59375 2.24375C7.80625 1.74792 6.94167 1.5 6 1.5C5.05833 1.5 4.19375 1.74792 3.40625 2.24375C2.61875 2.73958 2.01667 3.40833 1.6 4.25C2.01667 5.09167 2.61875 5.76042 3.40625 6.25625C4.19375 6.75208 5.05833 7 6 7Z" fill="#192C53"/>
                                        </svg>
                                        <span><?= getPostViews(get_the_ID()); ?></span>
                                    </small>
                                </div>

                                <div class="post-dc-comments">
                                    <small class="post-el-comments-details">
                                        <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 10.5V1.5C0 1.225 0.0979167 0.989583 0.29375 0.79375C0.489583 0.597917 0.725 0.5 1 0.5H9C9.275 0.5 9.51042 0.597917 9.70625 0.79375C9.90208 0.989583 10 1.225 10 1.5V7.5C10 7.775 9.90208 8.01042 9.70625 8.20625C9.51042 8.40208 9.275 8.5 9 8.5H2L0 10.5ZM1.575 7.5H9V1.5H1V8.0625L1.575 7.5Z" fill="#1C1B1F"/>
                                        </svg>
                                        <fb:comments-count href="<?= get_permalink($post->ID); ?>"></fb:comments-count>
                                    </small>
                                </div>
                           </div>

                        </div>
                    </div>

                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>

                </article>
            <?php endwhile; ?>
        </div>

        <div class="">

            <?php include_once 'templates/vitrine.php'; ?>

            <?php include_once 'templates/newsletter.php'; ?>

            <?= do_shortcode('[fbcomments]'); ?>
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