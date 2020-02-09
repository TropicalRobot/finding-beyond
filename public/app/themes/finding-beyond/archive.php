<?php
/*
Template Name: Post List
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
        <div class="mobile-menu__body">
            <div class="container">
            <?php wp_nav_menu([
                "theme_location" => "categories",
                "container" => "nav",
                "container_class" => "cat-nav",
                "menu_class"      => "cat-nav__menu list--unstyled",
                ]);?>
            </div>
        </div>
    </div>

    <?php $postObj = get_post_type_object(get_post_type()); ?>


    <section class="page-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12">
                    <h1 class="archive__heading"><?php echo get_queried_object()->name; ?></h1>
                </div>
                <div class="col-xs-12 text-center toggle-cat-menu-wrapper">
                    <button class="btn btn--secondary toggle-cat-menu">Browse Categories</button>
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
            <div class="row justify-content-center">
                <div class="col-xs-12 d-flex justify-content-center">
                    <?php echo tev_partial('partials/pagination'); ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
