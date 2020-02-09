<?php while (have_posts()): $p = tev_post_factory(); ?>
    <?php if ($p->field('content_enable')->val()): ?>

    <section class="full-width-section content-block">

        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-6 col-offset-xl-1 content-block__col">
                    <h2 class="content-block__heading"><?php echo $p->field('content_heading'); ?></h2>
                    <div><?php echo $p->field('content_text'); ?></div>
                </div>
                <div class="col-offset-xl-1 col-lg-4 col-xl-3 content-block__col">
                    <?php echo do_shortcode('[ninja_forms id=1]'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php endif;?>
<?php endwhile; ?>
