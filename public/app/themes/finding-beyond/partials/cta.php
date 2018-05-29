<?php while (have_posts()):
    $p = tev_post_factory(); ?>
    <?php if ($p->field('cta_'.$type.'_enable')->val()): ?>
    <?php $link = $p->field('cta_'.$type.'_link')->val(); ?>

        <section class="full-width-section cta cta--full-width <?php echo $link ? 'cta--full-width-linked' : ''; ?>">
            <div class="cta__bg-img"style="background-image:url(<?php echo $p->field('cta_'.$type.'_image')->val(); ?>)"></div>

            <div class="cta__header">
                <?php if ($p->field('cta_'.$type.'_heading')->val() != ''): ?>
                    <h1 class="cta__heading"><?php echo $p->field('cta_'.$type.'_heading')->val(); ?></h1>
                <?php endif; ?>
                <p><?php echo $p->field('cta_'.$type.'_text')->val(); ?></p>
            </div>

            <?php if ($link): ?>
                <a class="cta__link" href="<?php echo $link; ?>"></a>
            <?php endif; ?>
        </section>

    <?php endif;?>
<?php endwhile; ?>
