<?php

// Thumbnail/featured image support

add_theme_support('post-thumbnails');

// Remove [...] from blog excerpts.

add_filter('excerpt_more', function () {
    return '&hellip;';
});

// Register theme menus

add_action('after_setup_theme', function () {
    register_nav_menus(array(
        'primary' => 'Header',
        'categories' => 'Categories'
    ));
});
