<?php while (have_posts()): $p = tev_post_factory(); ?>
    <?php if($p->field('hero_enable')->val()): ?>

    <div class="hero hero--full-height">
        <div class="hero__image" style="background-image:url(<?php echo $p->field('hero_image')->val(); ?>)"></div>
        <div class="container">
        <?php if ($p->field('hero_heading')->val() != ''): ?>
            <div class="hero__header">
                <h1 class="hero__title"><?php echo $p->field('hero_heading')->val(); ?></h1>
            </div>
        <?php endif; ?>
        </div>
    </div>

    <?php endif;?>
<?php endwhile; ?>
