<?php 

function codingDIY_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar', 'codingDIY' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts.', 'codingDIY' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s card card-raised card-body bg-light mb-4">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widgettitle card-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
        'name' => __( 'Page-Sidebar', 'codingDIY' ),
        'id' => 'sidebar-2',
        'description' => __( 'Widgets in this area will be shown on all posts.', 'codingDIY' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s card card-raised card-body bg-light mb-4">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widgettitle card-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
        'name' => __( 'Footer-1', 'codingDIY' ),
        'id' => 'footer-1',
        'description' => __( 'Add first footer widget here.', 'codingDIY' ),
        'before_widget' => '<div class="col-lg-3 mb-4">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="text-white mb-4">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
        'name' => __( 'Footer-2', 'codingDIY' ),
        'id' => 'footer-2',
        'description' => __( 'Add second footer widget here.', 'codingDIY' ),
        'before_widget' => '<div class="col-lg-5 mb-4">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="text-white mb-4">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
        'name' => __( 'Footer-3', 'codingDIY' ),
        'id' => 'footer-3',
        'description' => __( 'Add third footer widget here.', 'codingDIY' ),
        'before_widget' => '<div class="col-lg-4 mb-4">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="text-white mb-4">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
        'name' => __( 'Socket', 'codingDIY' ),
        'id' => 'socket',
        'description' => __( 'Add socket widget here.', 'codingDIY' ),
        'before_widget' => '<div class="col-12 text-white">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="text-white mb-4">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'codingDIY_widgets_init' );
