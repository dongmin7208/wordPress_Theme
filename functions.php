<?php

function coding_diy_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'link', 'status', 'video', 'image'));
}

add_action('after_setup_theme', 'coding_diy_setup');

function coding_diy_scripts()
{
    // css
    wp_enqueue_style('bootstrap-styles', "//cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css");
    wp_enqueue_style('fontawesome-styles', "//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css");
    wp_enqueue_style('style-css', get_stylesheet_uri());

    wp_enqueue_script('jQuery-js', "//code.jquery.com/jquery-3.6.1.min.js", array(), '3.6.1', true);
    wp_enqueue_script('popper-js', "//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js", array(), '1.12.3', true);
    wp_enqueue_script('bootstrap-js', "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js", array(), '4.0.0-beta.2', true);
}

add_action('wp_enqueue_scripts', 'coding_diy_scripts');
