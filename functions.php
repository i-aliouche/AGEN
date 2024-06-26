<?php

// Add Styles
function add_styles()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array(), null, 'all');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('font_awesome-css', get_template_directory_uri() . '/css/all.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), rand(11, 9999), "all");
}

// Add Scripts
function add_scripts()
{
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), false, true);
    wp_enqueue_script('font_awesome-js', get_template_directory_uri() . '/js/all.min.js', array(), false, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), null, true);
}

// Add Theme Support For Title
function add_title()
{
    add_theme_support('title-tag');
}

//Add Action
add_action('wp_enqueue_scripts', 'add_styles');
add_action('wp_enqueue_scripts', 'add_scripts');
add_action('after_setup_theme', 'add_title');
