<?php
/*
Template Name: Photo Galleries Landing Page
*/
?>


<?php get_header(); ?>

<?php while (have_posts()): $p = tev_post_factory(); ?>

    <div class="hero hero--full-height">
        <div class="hero__image" style="background-image:url(<?php echo $p->getFeaturedImageUrl('large');?>)"></div>
        <div class="container">
            <div class="hero__header">
                <h1 class="hero__title"><?php echo $p->getTitle(); ?></h1>
            </div>
        </div>
    </div>

<?php endwhile; ?>


<?php $photoGalleries = get_posts( ['post_type' => 'fbphotos'] ); ?>


<section class="full-width-section single-content">
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10" style="margin-top: 50px;">
            <?php if(count($photoGalleries)) : ?>
                <div class="row">
                <?php foreach ($photoGalleries as $post): ?>
                <div class="col-xs-12 col-sm-6">
                    <?php $p = tev_post_factory($post); ?>

                    <div class="cta cta--full-width" style="background-image:url(<?php echo $p->getFeaturedImageUrl('large');?>); margin-bottom: 20px;">
                        <a class="cta__link link-block" href="<?php echo $p->getUrl(); ?>"></a>
                        <div class="cta__header">
                            <h1 class="cta__heading"><?php echo $p->getTitle(); ?></h1>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                </div>
            <?php else: ?>
            <?php endif; ?>

            </div>

   <!--          <div class="col-md-3 offset-md-1 sidebar" style="margin-top: 50px;">
                <?php echo tev_partial('partials/sidebar'); ?>
            </div> -->
        </div>
    </div>
</section>

<?php get_footer(); ?>
