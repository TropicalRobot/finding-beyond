<?php
/*
Template Name: Post List
*/
?>

<?php get_header(); ?>



<section style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="margin-top: 50px;">
                <?php while (have_posts()): the_post(); $p = tev_post_factory($post)?>

                    <?php $p = tev_post_factory($post); ?>

                    <div class="media">
                        <a class="media-left" href="<?php echo $p->getUrl(); ?>">
                            <img class="media-object" data-src="<?php echo $p->getFeaturedImageUrl('thumbnail'); ?>" src="<?php echo $p->getFeaturedImageUrl('thumbnail'); ?>" alt="<?php echo $p->getTitle(); ?>">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo $p->getTitle();?></h4>
                            <?php echo $p->getExcerpt();?>
                        </div>
                    </div>

                <?php endwhile; ?>

            <?php echo tev_partial('partials/pagination', ['total' => $query->max_num_pages]);?>

            </div>
            <div class="col-md-3 col-md-offset-1 sidebar" style="margin-top: 50px;">
               <?php echo tev_partial('partials/sidebar'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
