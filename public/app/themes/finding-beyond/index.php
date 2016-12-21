<?php get_header(); ?>

<?php echo tev_partial('partials/hero'); ?>

<?php while (have_posts()): $p = tev_post_factory(); ?>

    <section class="full-width-section single-content">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8" style="margin-top: 50px;">
                    <?php echo $p->getContent(); ?>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>
<?php get_footer(); ?>
