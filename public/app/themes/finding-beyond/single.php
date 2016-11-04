<?php get_header(); ?>

<?php while (have_posts()): $p = tev_post_factory(); ?>

    <div class="hero hero--single">
        <div class="hero__image" style="background-image:url(<?php echo $p->getFeaturedImageUrl('hero');?>)"></div>
        <div class="hero__header container">
            <h1 class="hero__heading"><?php echo $p->getTitle(); ?></h1>
        </div>
    </div>

<?php endwhile; ?>


<section class="full-width-section single-content">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
            <?php foreach ($p->getCategories() as $cat): ?>
                <a href="<?php echo $cat->getUrl(); ?>"><?php echo $cat->getName(); ?></a>
            <?php endforeach; ?>
            <?php echo $p->getContent(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs">
                <?php echo tev_partial('partials/related-posts', [
                    'id' => $p->getId(),
                    'cats' => wp_get_post_categories($p->getId())
                ]); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
