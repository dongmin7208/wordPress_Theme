<?php /* Archive Pages */
get_header(); 
get_template_part('template-parts/acf', 'pageBanner'); ?>

<!-- ARCHIVE PAGE
====================================================== -->
<section id="archive-page">
	<div class="section-content">
		<div class="container">
			<div class="row">

				<?php 
				get_template_part('template-parts/content', 'archive'); 
				get_template_part('template-parts/content', 'sidebar'); ?>

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- section-content -->
</section>
<!-- ARCHIVE PAGE -->

<?php get_footer(); ?>