<?php while (have_posts()): $p = tev_post_factory(); ?>
    <?php if($p->field('curated_posts_enable')->val()): ?>

    <div class="hero hero--full-height">
        <div class="hero__image" style="background-image:url(<?php echo $p->field('hero_image')->val(); ?>)"></div>
        <div class="container">
            <div class="hero__header">
                <h1 class="hero__title"><?php echo $p->field('hero_heading')->val(); ?></h1>
            </div>
        </div>
    </div>

    <?php endif;?>
<?php endwhile; ?>
