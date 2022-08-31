<?php /* 404 page */
get_header();  ?>

<!-- 404 PAGE
====================================================== -->
<section id="404-page">
	<div class="section-content">
		<div class="container">
			<div class="row justify-content-center">

				<!-- MAIN
				====================================================== -->
				<main class="col-11">
					
					<div class="text-center">
						
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/question.png" alt="" class="img-fluid" width="200px" height="200px">

						<h1 class="display-4 my-4"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'coding_diy' ); ?></h1>

						<div class="row justify-content-center mb-4">
							<p class="lead mb-5">
								<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'coding_diy' ); ?>
							</p>

							<div class="col-md-9">
								<?php get_search_form(); ?>
							</div>
						</div><!-- row -->

						<br><br>

						<div class="my-4">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-muted"><?php echo get_the_title( 56 ); ?></a> | <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="text-muted"><?php echo get_the_title( 35 ); ?></a> | <a href="<?php echo esc_url( home_url( '/intro/profile-page' ) ); ?>" class="text-muted"><?php echo get_the_title( 2 ); ?></a> 
						</div><!-- nav -->

					</div>

				</main>
				<!-- MAIN -->

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- section-content -->
</section>
<!-- 404 Page -->

<?php 
get_footer(); ?>