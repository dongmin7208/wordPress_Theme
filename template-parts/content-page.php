<?php
$thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
while( have_posts() ) : the_post(); ?>

<!-- PAGE-MAIN
====================================================== -->
<article id="post-<?php the_ID(); ?>" <?php post_class('col-xl-8 col-md-12'); ?>>

	<div class="featured-image">
		<?php if( $thumbnail_url ) { // Featured image ?>
		<img src="<?php echo $thumbnail_url; ?>" alt="" class="img-fluid img-raised">
		<?php } else { // Fallback image ?>
		<img class="img-fluid img-raised" src="http://via.placeholder.com/900x600" alt="">
		<?php } ?>
	</div><!-- featured-image -->

	<br><br>
	
	<?php the_content(); ?>

</article>

<?php endwhile; ?>

<!-- MAIN -->