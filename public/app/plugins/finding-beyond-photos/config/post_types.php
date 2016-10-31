<?php

return array(

    'fbphotos' => array(
        'label'               => 'fbphotos',
        'description'         => 'Photo Gallery',
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 120,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'rewrite'             => array('slug' => 'photos', 'with_front' => false),
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-format-gallery',
        'taxonomies'          => array(
            'category',
            'post_tag'
        ),
        'menu_icon'           => 'dashicons-format-gallery',
        'labels'              => array(
            'name'                => 'Photo Gallery',
            'singular_name'       => 'Photo Gallery',
            'menu_name'           => 'Photo Gallery',
            'parent_item_colon'   => 'Parent Gallery:',
            'all_items'           => 'All Photo Galleries',
            'view_item'           => 'View Photo Gallery',
            'add_new_item'        => 'Add New Photo Gallery',
            'add_new'             => 'Add New',
            'edit_item'           => 'Edit Photo Gallery',
            'update_item'         => 'Update Photo Gallery',
            'search_items'        => 'Search Photo Galleries',
            'not_found'           => 'Not found',
            'not_found_in_trash'  => 'Not found in Trash',
        ),
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
            'page-attributes',
            'excerpt',
            'comments'
        ),
    )
);
