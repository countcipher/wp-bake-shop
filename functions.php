<?php

function ab_enqueue(){
    wp_register_style('ab_main_style', get_template_directory_uri().'/assets/css/main-style.css');
    wp_register_style('ab_animate', get_template_directory_uri().'/assets/css/animate.css');
    wp_register_style('ab_bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css');
    
    wp_enqueue_style('ab_main_style');
    wp_enqueue_style('ab_animate');
    wp_enqueue_style('ab_bootstrap');
    
}

add_action('wp_enqueue_scripts', 'ab_enqueue');

function ab_theme_support(){
    add_theme_support('post-thumbnails');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}

add_action('after_setup_theme', 'ab_theme_support');
