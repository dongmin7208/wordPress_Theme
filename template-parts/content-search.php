<!-- SEARCH-MAIN
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

		<?php if( 'post' === get_post_type() ) { ?>
		<div class="post-meta mt-2">
			<small class="text-muted mb-5">
				<i class="fa fa-user"></i> <strong><?php the_author(); ?></strong> | <i class="fa fa-clock-o"></i> <?php the_date('Y-m-d'); ?> | <i class="fa fa-folder-open-o"></i> <strong> category: <?php the_category( ', ' ); ?></strong> | <i class="fa fa-tags"></i> <strong> <?php the_tags(); ?></strong>
			</small>
		</div>
		<?php } else { ?>
		<hr>
		<?php } ?>

	<?php endwhile;
	echo paginate_links();
	 ?>
	
</article>
<!-- MAIN -->