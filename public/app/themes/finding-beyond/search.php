<?php
/*
Template Name: Search Results
*/
?>

<?php get_header(); ?>

<div class="archive-container">
    <div class="mobile-menu cat-nav-wrapper">
        <div class="mobile-menu__header">
            <div class="mobile-menu-trigger mobile-menu-x toggle-cat-menu">
                <div class="relative">
                    <div class="icon"></div>
                </div>
            </div>
        </div>
    </div>

    <section class="page-section">
        <div class="container">
            <div class="row flex-items-xs-middle flex-xs-middle">
                <div class="col-xs-12">
                    <h1 class="archive__heading">Search results for: <strong><?php echo get_query_var( 's', '' ) ?></strong></h1>
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
            <div class="row flex-items-xs-around">
                <?php echo tev_partial('partials/pagination');?>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
