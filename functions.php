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
// Widget Init
function codingDIY_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar', 'codingDIY'),
        'id' => 'sidebar-1',
        'description' => __('Widgets in this area will be shown on all posts.', 'codingDIY'),
        'before_widget' => '<div id="%1$s" class="widget %2$s card card-raised card-body bg-light mb-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widgettitle card-title">',
        'after_title'   => '</h5>',
    ));

    register_sidebar(array(
        'name' => __('Footer-1', 'codingDIY'),
        'id' => 'footer-1',
        'description' => __('Add first footer widget here.', 'codingDIY'),
        'before_widget' => '<div class="col-lg-3 mb-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="text-white mb-4">',
        'after_title'   => '</h5>',
    ));

    register_sidebar(array(
        'name' => __('Footer-2', 'codingDIY'),
        'id' => 'footer-2',
        'description' => __('Add second footer widget here.', 'codingDIY'),
        'before_widget' => '<div class="col-lg-5 mb-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="text-white mb-4">',
        'after_title'   => '</h5>',
    ));

    register_sidebar(array(
        'name' => __('Footer-3', 'codingDIY'),
        'id' => 'footer-3',
        'description' => __('Add third footer widget here.', 'codingDIY'),
        'before_widget' => '<div class="col-lg-4 mb-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="text-white mb-4">',
        'after_title'   => '</h5>',
    ));

    register_sidebar(array(
        'name' => __('Socket', 'codingDIY'),
        'id' => 'socket',
        'description' => __('Add socket widget here.', 'codingDIY'),
        'before_widget' => '<div class="col-12 text-white">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="text-white mb-4">',
        'after_title'   => '</h5>',
    ));
}
add_action('widgets_init', 'codingDIY_widgets_init');
