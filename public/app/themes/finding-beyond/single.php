<?php get_header(); ?>

<?php while (have_posts()): $p = tev_post_factory(); ?>

    <div class="hero hero--single" style="background-image:url(<?php echo $p->getFeaturedImageUrl('large');?>);">
        <div class="hero__header container">
            <h1 class="hero__heading"><?php echo $p->getTitle(); ?></h1>
        </div>
    </div>

<?php endwhile; ?>


<section class="full-width-section single-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="margin-top: 50px;">
                <?php echo $p->getContent(); ?>
            </div>

            <div class="col-md-3 col-md-offset-1 sidebar" style="margin-top: 50px;">
               <?php echo tev_partial('partials/related-posts', ['id' => $p->getId(), 'cats' => wp_get_post_categories($p->getId())]); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
