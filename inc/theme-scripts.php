<?php 

function coding_diy_scripts() {
	// css
	wp_enqueue_style( 'bootstrap-styles', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
	wp_enqueue_style( 'fontawesome-styles', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'lightbox-styles', '//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.css' );
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );

	// js
	wp_enqueue_script( 'jQuery-js', '//code.jquery.com/jquery-3.2.1.slim.min.js', array(), '3.2.1', true );
	wp_enqueue_script( 'popper-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '1.10.9', true );
	wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '4.0.0', true );
	wp_enqueue_script( 'lightbox-js', '//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.js', array(), '2.10.0', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'coding_diy_scripts' );