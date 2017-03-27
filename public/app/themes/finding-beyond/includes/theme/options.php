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
        'categories' => 'Categories',
        'footer_links' => 'Footer Links'
    ));
});


// Register Widget Area
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'id' => 'Sidebar',
    'name' => 'Sidebar',
    'before_widget' => '<div class = "widget-sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

