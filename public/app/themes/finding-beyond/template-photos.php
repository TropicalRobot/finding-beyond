<?php
/*
Template Name: Photo Galleries Landing Page
*/
?>


<?php get_header(); ?>

<?php while (have_posts()): $p = tev_post_factory(); ?>

    <div class="hero hero--single" style="background-image:url(<?php echo $p->getFeaturedImageUrl('large');?>);">
        <div class="hero__header container">
            <h1 class="hero__heading"><?php echo $p->getTitle(); ?></h1>
        </div>
    </div>

<?php endwhile; ?>


<?php $photoGalleries = get_posts( ['post_type' => 'fbphotos'] ); ?>


<section class="full-width-section single-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="margin-top: 50px;">
            <?php if(count($photoGalleries)) : ?>

                <?php foreach ($photoGalleries as $post): ?>

                    <?php $p = tev_post_factory($post); ?>

                    <div class="cta cta--full-width" style="background-image:url(<?php echo $p->getFeaturedImageUrl('large');?>); margin-bottom: 20px;">
                    <a class="cta__link link-block" href="<?php echo $p->getUrl(); ?>"></a>
                    <div class="cta__header">
                        <h1 class="cta__heading"><?php echo $p->getTitle(); ?></h1>
                    </div>
                </div>
                <?php endforeach; ?>

            <?php else: ?>
            <?php endif; ?>

            </div>

            <div class="col-md-3 col-md-offset-1 sidebar" style="margin-top: 50px;">
                <?php echo tev_partial('partials/sidebar'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
