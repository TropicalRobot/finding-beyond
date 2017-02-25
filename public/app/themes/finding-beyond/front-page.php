<?php get_header(); ?>

<?php echo tev_partial('partials/hero'); ?>

<?php echo tev_partial('partials/content-block'); ?>

<?php echo tev_partial('partials/cta', ['type' => 'primary']); ?>

<?php echo tev_partial('partials/latest-posts'); ?>

<?php echo tev_partial('partials/cta', ['type' => 'secondary']); ?>

<?php while (have_posts()): $p = tev_post_factory(); ?>
<?php if($p->field('curated_posts_enable')->val()): ?>
<section class="full-width-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-xs-center">
                <h2 class="section-header"><span><?php echo $p->field('curated_posts_heading')->val(); ?><span></h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($p->field('curated_posts_items')->val() as $p) : ?>
                    <?php echo tev_partial('partials/card', [
                        'post' => $p,
                        'text' => true,
                        'slide' => false,
                        'colClass' => 'col-xs-12 col-lg-4'
                    ]); ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php endif;?>
<?php endwhile; ?>


<?php echo tev_partial('partials/cta', ['type' => 'tertiary']); ?>

<section class="full-width-section">
    <?php echo tev_partial('partials/social-bar'); ?>
</section>

<?php get_footer(); ?>
