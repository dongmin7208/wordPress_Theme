<?php

// Theme Setups
function coding_diy_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'link', 'status', 'video', 'image'));
}

add_action('after_setup_theme', 'coding_diy_setup');

// Theme Scripts
function coding_diy_scripts()
{
    // css
    wp_enqueue_style('bootstrap-styles', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome-styles', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('style-css', get_stylesheet_uri());

    // js
    wp_enqueue_script('jQuery-js', '//code.jquery.com/jquery-3.2.1.slim.min.js', array(), '3.2.1', true);
    wp_enqueue_script('popper-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '1.10.9', true);
    wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '4.0.0', true);
}

add_action('wp_enqueue_scripts', 'coding_diy_scripts');
