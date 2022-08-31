<?php /* Search Page */
get_header(); 
get_template_part('template-parts/acf', 'pageBanner'); ?>

<!-- SEARCH PAGE
====================================================== -->
<section id="archive-page">
	<div class="section-content">
		<div class="container">
			<div class="row">

				<?php 
				get_template_part('template-parts/content', 'search'); 
				get_template_part('template-parts/content', 'sidebar'); ?>

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- section-content -->
</section>
<!-- SEARCH PAGE -->

<?php get_footer(); ?>