<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'Large', ['class' => 'card-img-top img-fluid']); ?></a>
	<div class="card-body">
		<a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_title(); ?></h4></a>
		<p class="card-text"><?php the_excerpt(); ?></p>
	</div>

</article><!-- article -->