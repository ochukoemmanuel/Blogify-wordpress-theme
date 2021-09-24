<?php

function blogify_resgister_style(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('blogify-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('blogify-vendor-style', get_template_directory_uri() . "/vendor.css", array(), $version, 'all');
}


add_action("wp_enqueue_scripts", 'blogify_resgister_style');