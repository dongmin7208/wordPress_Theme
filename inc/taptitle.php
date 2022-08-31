<?php 

function codingDIY_title_for_home( $title )
{
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = __( 'Home', 'textdomain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}

add_filter( 'wp_title', 'codingDIY_title_for_home' );
