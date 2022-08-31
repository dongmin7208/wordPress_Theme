<?php 

function codingDIY_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'codingDIY_excerpt_length', 999 );