<?php while (have_posts()): $p = tev_post_factory(); ?>
    <?php if($p->field('hero_enable')->val()): ?>

    <div class="hero hero--full-height hero--home">
        <div class="hero__image" style="background-image:url(<?php echo $p->field('hero_image')->val(); ?>)"></div>
        <div class="hero__content">
        <?php if ($p->field('hero_heading')->val() != ''): ?>
            <h1 class="hero__title"><?php echo $p->field('hero_heading')->val(); ?></h1>
        <?php endif; ?>
        </div>
    </div>

    <?php endif;?>
<?php endwhile; ?>
