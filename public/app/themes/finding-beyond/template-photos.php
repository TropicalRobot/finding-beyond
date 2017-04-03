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

<?php while (have_posts()): $p = tev_post_factory(); ?>
<?php $photoGalleries = $p->field('galleries_selector')->val(); ?>

<section class="full-width-section single-content">
    <div class="container">
        <div class="row">
            <div class="offset-xl-1 col-xl-10">
            <?php if(count($photoGalleries)) : ?>
                <div class="row archive-cta-row">
                <?php foreach ($photoGalleries as $key => $post): ?>
                    <?php if($key>0 && $key%2 == 0): ?>
                        </div>
                        <div class="row archive-cta-row">
                    <?php endif;?>
                    <div class="col-xs-12 col-lg-6 archive-cta-wrapper">
                        <div class="archive-cta cta cta--full-width" style="background-image:url(<?php echo $post->getFeaturedImageUrl('large');?>); margin-bottom: 20px;">
                            <div class="cta__bg-overlay"></div>
                            <div class="cta__header">
                                <h1 class="cta__heading"><?php echo $post->getTitle(); ?></h1>
                            </div>
                            <a class="cta__link link-block" href="<?php echo $post->getUrl(); ?>"></a>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
                </div>
            <?php else: ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>
