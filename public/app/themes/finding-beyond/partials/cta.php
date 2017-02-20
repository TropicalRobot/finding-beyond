<?php while (have_posts()):
    $p = tev_post_factory(); ?>
    <?php if ($p->field('cta_'.$type.'_enable')->val()): ?>

        <section class="full-width-section archive-cta cta cta--full-width" style="background-image:url(<?php echo $p->field('cta_'.$type.'_image')->val(); ?>)">
            <div class="cta__bg-overlay"></div>
            <div class="cta__header">
                <?php if ($p->field('cta_'.$type.'_heading')->val() != ''): ?>
                    <h1 class="cta__heading"><?php echo $p->field('cta_'.$type.'_heading')->val(); ?></h1>
                <?php endif; ?>
                <p><?php echo $p->field('cta_'.$type.'_text')->val(); ?></p>
            </div>
            <a class="cta__link link-block" href="<?php echo $p->field('cta_'.$type.'_link')->val(); ?>"></a>
        </section>

    <?php endif;?>
<?php endwhile; ?>
