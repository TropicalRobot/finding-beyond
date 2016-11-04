<?php get_header(); ?>

<?php while (have_posts()): $p = tev_post_factory(); ?>

    <div class="hero hero--single">
        <div class="hero__image" style="background-image:url(<?php echo $p->getFeaturedImageUrl('hero');?>)"></div>
        <div class="hero__header container">
            <h1 class="hero__heading"><?php echo $p->getTitle(); ?></h1>
        </div>
    </div>


    <section class="full-width-section single-content">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8" style="margin-top: 50px;">
                    <?php echo $p->getContent(); ?>
                </div>
       <!--          <div class="col-md-3 offset-md-1 sidebar" style="margin-top: 50px;">
                    <?php echo tev_partial('partials/sidebar'); ?>
                </div> -->
            </div>
        </div>
    </section>

<?php endwhile; ?>
<?php get_footer(); ?>
