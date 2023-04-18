<?php

add_action('wp_enqueue_scripts', 'theme_scripts');
add_action('wp_enqueue_scripts', 'theme_styles');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('after_setup_theme', 'theme_custom_logo_setup');

add_action('init', 'register_post_types');
add_theme_support('post-thumbnails', ['services']);

function theme_styles()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css');
    wp_enqueue_style('404', get_template_directory_uri() . '/css/404.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/slick/slick.css');
    // wp_enqueue_style('slick-theme', get_template_directory_uri() . '/slick/slick-theme.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/fontawesome/css/all.min.css');
}

function theme_scripts()
{
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js');
    wp_enqueue_script('slick', get_template_directory_uri() . '/slick/slick.min.js');
    wp_enqueue_script('carousel', get_template_directory_uri() . '/js/carousel.js');
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
}

function theme_register_nav_menu($nav_menu)
{
    register_nav_menu('top', 'Top menu');
    register_nav_menu('footer', 'Footer menu');
}

function theme_custom_logo_setup()
{
    add_theme_support('custom-logo', [
        'height' => 98,
        'width' => 165,
    ]);
}

function register_post_types()
{
    register_post_type(
        'services',
        [
            'label' => null,
            'labels' => [
                'name' => 'Services',
                'singular_name' => 'Service',
                'add_new' => 'Add service',
                'add_new_item' => 'Add services',
                'edit_item' => 'Edit service',
                'new_item' => 'New service',
                'view_item' => 'View service',
                'search_items' => 'Search service',
                'not_found' => 'Not Found',
                'not_found_in_trash' => 'Not Found in trash',
                'parent_item_colon' => '',
                'menu_name' => 'Services',
            ],
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_in_menu' => true,
            'show_in_admin_bar' => true,
            'show_in_rest' => true,
            'rest_base' => null,
            'menu_position' => 4,
            'menu_icon' => null,
            //'capability_type'   => 'post',
            //'capabilities'      => 'post',
            //'map_meta_cap'      => null,
            'hierarchical' => false,
            'supports' => ['title', 'thumbnail'],
            // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies' => [],
            'has_archive' => false,
            'rewrite' => true,
            'query_var' => true,
        ]
    );
    register_post_type(
        'review',
        [
            'label' => null,
            'labels' => [
                'name' => 'Reviews',
                'singular_name' => 'Review',
                'add_new' => 'Add review',
                'add_new_item' => 'Add reviews',
                'edit_item' => 'Edit review',
                'new_item' => 'New review',
                'view_item' => 'View review',
                'search_items' => 'Search review',
                'not_found' => 'Not Found',
                'not_found_in_trash' => 'Not Found in trash',
                'parent_item_colon' => '',
                'menu_name' => 'Reviews',
            ],
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_in_menu' => true,
            'show_in_admin_bar' => true,
            'show_in_rest' => true,
            'rest_base' => null,
            'menu_position' => 4,
            'menu_icon' => null,
            //'capability_type'   => 'post',
            //'capabilities'      => 'post',
            //'map_meta_cap'      => null,
            'hierarchical' => false,
            'supports' => ['title', 'custom-fields'],
            // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies' => [],
            'has_archive' => false,
            'rewrite' => true,
            'query_var' => true,
        ]
    );
}