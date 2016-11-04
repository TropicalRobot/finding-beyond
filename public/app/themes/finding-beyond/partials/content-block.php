<?php while (have_posts()): $p = tev_post_factory(); ?>

<?php if($p->field('content_enable')->val()): ?>

<section class="full-width-section">

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2 class="content-block__heading"><?php echo $p->field('content_heading'); ?></h2>
                <div><?php echo $p->field('content_text'); ?></div>
            </div>
            <div class="offset-md-1 col-md-4">
                <?php echo do_shortcode('[ninja_forms id=1]'); ?>
            </div>
        </div>
    </div>
</section>

<?php endif;?>
<?php endwhile; ?>
