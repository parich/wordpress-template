<?php
get_header();
$related = new WP_Query(
    array(
        'category_name' => 'promotion',
        'posts_per_page' => 3,
        'orderby' => 'rand',
        'post__not_in' => array(get_the_ID())
    )
);
?>

<div class="single-wrapper">
    <div class="container">
        <!-- breadcrumb -->
        <ul class="single-breadcrumb-list">
            <li><a href="<?php echo home_url(); ?>" title="Home">Home</a></li>
            <li>Article</li>
        </ul>

        <!-- content -->
        <?php if (have_posts()): ?>
            <?php while (have_posts()):
                the_post(); ?>
                <section class="single-content-block">
                    <div class="row">
                        <!-- cover -->
                        <div class="col-md-5 col-xl-6">
                            <div class="single-promotion-image">
                                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>" />
                            </div>
                        </div>
                        <!-- description -->
                        <div class="col-md-7 col-xl-6 flex-center">
                            <article class="single-main-content page-content">
                                <h1>
                                    <?php the_title() ?>
                                </h1>
                                <?php the_content(); ?>
                            </article>
                        </div>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>

        <!-- related -->
        <section class="single-related-block">
            <h3>Related Posts</h3>
            <div class="row">

                <?php if ($related->have_posts()): ?>
                    <?php while ($related->have_posts()):
                        $related->the_post(); ?>
                        <div class="col-6 col-md-3">
                            <div class="related-item">
                                <a href="<?php the_permalink(); ?>" class="related-image">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'product') ?>"
                                        alt="<?php the_title(); ?>" />
                                </a>
                                <p class="related-name">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>

        </section>
    </div>
</div>

<?php get_footer(); ?>