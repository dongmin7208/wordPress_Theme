<!-- ARCHIVE-MAIN
====================================================== -->
<article id="post-<?php the_ID(); ?>" <?php post_class('col-xl-8 col-md-12'); ?>>

	<?php
	$thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
	while( have_posts() ) : the_post(); ?>

		<h1 class="my-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

	    <div class="row">

	    	<?php 
	    	$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
	    	
	    	if( $thumbnail_url ) {
	    	 ?>

			<div class="col-4 mb-4">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(300, 200), ['class' => 'img-fluid'] ); ?></a>
			</div>
			<div class="col-8 mb-4">
	            
	            <?php the_excerpt(); ?>

			</div>
			<?php } else { ?>
			<div class="col-12 mb-4">
	            
	            <?php the_excerpt(); ?>

			</div>
			<?php } ?>
		</div><!-- row -->

		<hr>

	<?php endwhile; ?>
	
</article>
<!-- MAIN -->