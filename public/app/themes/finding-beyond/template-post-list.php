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

    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                <?php while (have_posts()): $page = tev_post_factory(); ?>
                    <h1 class="archive__heading"><?php echo $page->getTitle();?></h1>
                <?php endwhile; ?>
                </div>
                <div class="col-xs-12 text-center toggle-cat-menu-wrapper">
                    <button class="btn btn--secondary toggle-cat-menu">Browse Categories</button>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                    <?php $query = new WP_Query([
                        'posts_per_page' => 9,
                        'paged' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1
                    ]);
                    $posts = $query->get_posts();
                    ?>
                        <?php foreach($posts as $post):?>
                            <?php echo tev_partial('partials/card', [
                                'post' => tev_post_factory($post),
                                'text' => true,
                                'slide' => true,
                                'colClass' => 'col-xs-12 col-md-4'
                            ]); ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 d-flex justify-content-center">
                    <?php echo tev_partial('partials/pagination', ['options' => ['total' => $query->max_num_pages]]);?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
