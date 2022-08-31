<?php 

function coding_diy_setup() {
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'front-slide', 1600, 1000, true );
	add_theme_support( 'post-formats', array('aside', 'link', 'status', 'video', 'image') );
	register_nav_menus( array(
		'primary'	=> __( 'Primary Menu' )
	) );
}

add_action( 'after_setup_theme', 'coding_diy_setup' );

