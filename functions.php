<?php

// theme support
function blogify_theme_support(){
    add_theme_support( 'title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'blogify_theme_support');

// Menu 
function blogify_menus(){
    $locations = array(
        'primary' => "Main menu",
        'footer' => "Footer menu items"
    );

    register_nav_menus($locations);
}

add_action('init', 'blogify_menus');

// Style and js
function blogify_resgister_style(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('blogify-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('blogify-vendor-style', get_template_directory_uri() . "/vendor.css", array(), $version, 'all');

    // js 
    wp_enqueue_script('plugin-js',get_template_directory_uri() . '/js/plugins.js', array(), NULL, '1.0', true);
    wp_enqueue_script('main-js',get_template_directory_uri() . '/js/main.js', array(), NULL, '1.0', true);
}


add_action("wp_enqueue_scripts", 'blogify_resgister_style');