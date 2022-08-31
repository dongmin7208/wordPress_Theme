<?php 
$howto_title		= get_field('howto_title', 33);
$howto_desc			= get_field('howto_desc', 33);
$title1				= get_field('title1', 33);
$content1			= get_field('content1', 33);
$desc1				= get_field('desc1', 33);
$title2				= get_field('title2', 33);
$content2			= get_field('content2', 33);
$desc2				= get_field('desc2', 33);
$title3				= get_field('title3', 33);
$content3			= get_field('content3', 33);
$desc3				= get_field('desc3', 33);
 ?>

<!-- HOW TO CONTACT SECTION
====================================================== -->
<section id="howtoContact" style="background: url(<?php bloginfo( 'stylesheet_directory' ); ?>/img/mic.jpg) no-repeat; background-size: cover; background-attachment: fixed;">
	<div class="section-content">
		<div class="container text-white text-center">
			
			<h2 class="mb-4"><?php echo $howto_title; ?></h2>
			<p class="lead mb-4"><?php echo $howto_desc; ?></p>

			<br>

			<!-- Visible only small device -->
			<a class="btn btn-danger btn-lg btn-block mb-3 d-md-none" href="tel:<?php echo $content1; ?>" role="button"><i class="fa fa-mobile"></i> <?php echo $title1; ?></a>
			<a class="btn btn-danger btn-lg btn-block mb-3 d-md-none" href="<?php echo $content2; ?>" role="button"><i class="fa fa-comments-o"></i> <?php echo $content2; ?></a>
			<a class="btn btn-danger btn-lg btn-block mb-3 d-md-none" href="mailto:<?php echo $content3; ?>" role="button"><i class="fa fa-envelope-o"></i> <?php echo $title3; ?></a>

			<!-- Visible over medium devices -->
			<div class="row contactContent d-none d-md-flex">
				<div class="col">
					<h4 class="pt-5"><i class="fa fa-mobile"></i> <?php echo $title1; ?></h4>
					<p class="lead"><?php echo $content1; ?></p>
					<p class="mb-5"><?php echo $desc1; ?></p>
				</div>
				<div class="col">
					<h4 class="pt-5"><i class="fa fa-comments-o"></i> <?php echo $title2; ?></h4>
					<p class="lead">@<?php echo $content2; ?></p>
					<p class="mb-5"><?php echo $desc2; ?></p>
				</div>
				<div class="col">
					<h4 class="pt-5"><i class="fa fa-envelope-o"></i> <?php echo $title3; ?></h4>
					<p class="lead"><?php echo $content3; ?></p>
					<p class="mb-5"><?php echo $desc3; ?></p>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- HOW TO CONTACT -->