<?php
/*
Template Name: Search Results
*/
?>

<?php get_header(); ?>

<div class="search-container">

    <section class="page-section">
        <div class="container">
            <div class="row flex-items-xs-middle flex-xs-middle">
                <div class="col-xs-12">
                    <h1 class="archive__heading">Search results for: <strong class="color--primary"><?php echo get_query_var( 's', '' ) ?></strong></h1>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <?php while (have_posts()): the_post();?>
                            <?php echo tev_partial('partials/card', [
                                'post' => tev_post_factory($post),
                                'text' => true,
                                'slide' => true,
                                'colClass' => 'col-xs-12 col-md-4'
                            ]); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 d-flex justify-content-center">
                    <?php echo tev_partial('partials/pagination'); ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
