<?php get_header(); ?>

<?php echo tev_partial('partials/hero'); ?>

<?php while (have_posts()): $p = tev_post_factory(); ?>

<?php if ($p->field('content_enable')->val()): ?>
    <section class="full-width-section single-content">
        <div class="container">
            <div class="row">
                <div class="col-offset-md-2 col-md-8">
                    <?php if ($p->field('content_heading')->val() != ''): ?>
                        <h2 class="content-block__heading"><?php echo $p->field('content_heading'); ?></h2>
                    <?php endif; ?>
                    <div><?php echo $p->field('content_text'); ?></div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

<?php endwhile; ?>
<?php get_footer(); ?>
