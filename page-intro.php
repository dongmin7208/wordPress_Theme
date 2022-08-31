<?php 
/* Template Name: Intro Page */
get_header(); 
get_template_part('template-parts/acf', 'pageBanner'); ?>

<!-- INTROPAGE
====================================================== -->
<section id="intro-page">
	<div class="section-content">
		<div class="container">
			<div class="row">

				<!-- MAIN
				====================================================== -->
				<article class="col-xl-8 col-md-12">
					
					<?php 
					get_template_part('template-parts/acf', 'profile');
					get_template_part('template-parts/acf', 'moreinfo'); ?>
					
					<!-- Additional Content -->
					<?php while( have_posts() ) : the_post();
						the_content();
					endwhile; ?>
					<!-- Additional Content -->

				</article>
				<!-- MAIN -->

				<!-- SIDE
				====================================================== -->
				<?php get_template_part('template-parts/content', 'sidebar'); ?>
				<!-- SIDE -->

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- section-content -->
</section>
<!-- POST -->

<?php 
get_template_part('template-parts/acf', 'howtoContact'); 
get_footer(); ?>