<?php get_header(); ?>

<?php echo tev_partial('partials/hero'); ?>

<?php echo tev_partial('partials/content-block'); ?>

<?php echo tev_partial('partials/latest-posts'); ?>

<?php while (have_posts()): $p = tev_post_factory(); ?>

<?php if($p->field('curated_posts_enable')->val()): ?>
<section class="full-width-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-xs-center">
                <h2 class="section-header"><?php echo $p->field('curated_posts_heading')->val(); ?></h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($p->field('curated_posts_items')->val() as $p) : ?>
            <div class="col-md-4">
                <a href="<?php echo $p->getUrl(); ?>" class="a-clean cta cta--card" style="background-image: url(<?php echo $p->getFeaturedImageUrl('large');?>)">
                    <div class="cta__text">
                        <div class="cta__meta">
                            <?php echo $p->getPublishedDate()->format('d M Y'); ?>
                        </div>
                        <div class="cta__trans">
                            <div class="cta__title"><?php echo $p->getTitle(); ?></div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php endif;?>
<?php endwhile; ?>

<section class="full-width-section">
    <div class="container">
        <div class="row" style="text-align: center;">
            <a href="http://findingbeyond.ryan.3ev.in/posts/" style="border-top: 4px solid rgba(0,0,0, 0.8);
    border-bottom: 4px solid rgba(0,0,0, 0.8);
    padding: 15px 40px; display: inline-block; margin: 20px auto;">
                VIEW ALL POSTS &nbsp; >
            </a>
        </div>
    </div>
</section>

<section class="full-width-section cta cta--full-width" style="background-image:url('http://findingbeyond.ryan.3ev.in/app/uploads/2016/05/177-1.jpg');">
    <a class="cta__link link-block" href="http://findingbeyond.ryan.3ev.in/photos"></a>
    <div class="cta__header">
        <h1 class="cta__heading">Photos</h1>
    </div>
</section>

<section class="full-width-section">
    <?php echo tev_partial('partials/social-bar'); ?>
</section>

<?php get_footer(); ?>
