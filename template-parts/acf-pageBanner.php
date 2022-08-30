<!-- PAGE BANNER 
====================================================== -->
<?php if( is_home() && !is_front_page()) : ?>
<section id="jumbotron" style="background: url(<?php echo get_field('banner_img', 35)['url']; ?>); background-repeat: no-repeat; background-size: cover; background-position: center center;">
<?php else : ?>
<section id="jumbotron" style="background: url(<?php echo get_field('banner_img')['url']; ?>); background-repeat: no-repeat; background-size: cover; background-position: center center;">
<?php endif; ?>
	<div class="container">
		<div class="row">
			<div class="col-10 offset-1 justify-content-center text-white text-center">
				<h1 class="display-4"><?php
				if( is_home() && !is_front_page() ) : echo get_the_title(35);
				else : echo get_the_title();
				endif; ?></h1>
				<hr style="display: block; border-top: 1px solid #fff;">
				<p class="lead"><?php
				if( is_home() && !is_front_page()) : echo get_field('banner_desc', 35);
				else : echo get_field('banner_desc');
				endif; ?></p>
			</div>
		</div>
	</div>
</section>
<!-- PAGE BANNER -->