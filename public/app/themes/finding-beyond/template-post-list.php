<?php
/*
Template Name: Post List
*/
?>

<?php get_header(); ?>

<div class="cat-nav-wrapper">
    <div class="container">
    <?php wp_nav_menu([
        "theme_location" => "categories",
        "container" => "nav",
        "container_class" => "cat-nav",
        "menu_class"      => "cat-nav__menu list--unstyled",
        ]);?>
    </div>
</div>

<section class="page-section">
    <div class="container">
        <div class="row flex-items-xs-middle">
            <div class="col-xs-12">
            <?php while (have_posts()): $page = tev_post_factory(); ?>
                <h1 class="archive__heading"><?php echo $page->getTitle();?></h1>
            <?php endwhile; ?>
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
        <div class="row flex-items-xs-around">
            <?php echo tev_partial('partials/pagination', ['options' => ['total' => $query->max_num_pages]]);?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
