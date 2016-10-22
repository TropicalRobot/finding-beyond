<?php
/*
Template Name: Post List
*/
?>

<?php get_header(); ?>

<?php $query = new WP_Query([
    'posts_per_page' => 10,
    'paged' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1
]); ?>


<section style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="margin-top: 50px;">
            <h1>Posts</h1>
                <?php while ($query->have_posts()): $query->the_post(); $p = tev_post_factory($post)?>

                    <?php $p = tev_post_factory($post); ?>

                    <div class="media">
                        <a class="media-left" href="<?php echo $p->getUrl(); ?>">
                            <img class="media-object" data-src="<?php echo $p->getFeaturedImageUrl('thumbnail'); ?>" src="<?php echo $p->getFeaturedImageUrl('thumbnail'); ?>" alt="<?php echo $p->getTitle(); ?>">
                        </a>
                        <div class="media-body">
                            <div class="text-small primary-color">
                                <?php echo $p->getPublishedDate()->format('d M Y'); ?>
                            </div>
                            <h4 class="media-heading"><?php echo $p->getTitle();?></h4>
                            <div>
                                <?php foreach ($p->getCategories() as $cat): ?>
                                    <a href="<?php echo $cat->getUrl(); ?>"><?php echo $cat->getName(); ?> / </a>
                                <?php endforeach; ?>
                            </div>
                            <?php echo $p->getExcerpt();?>
                        </div>
                    </div>

                <?php endwhile; ?>

            <?php echo tev_partial('partials/pagination', ['total' => $query->max_num_pages]);?>

            </div>
            <div class="col-md-3 offset-md-1 sidebar" style="margin-top: 50px;">
               <?php echo tev_partial('partials/sidebar'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
