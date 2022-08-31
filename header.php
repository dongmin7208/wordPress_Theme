<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(''); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
		
		<!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

        <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

	<!-- Scroll to Top Button -->
	<a id="scrolltoTop">Top</a>

	<!-- Navbar 
	====================================================== -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
		<div class="container">
			
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/logo.png" alt="" class="rounded-circle img-fluid" width="40px" height="40px">
				<span class="ml-2"><?php bloginfo( 'name' ); ?></span>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<?php
				wp_nav_menu(array(
					'theme_location'  => 'primary',
					'container'       => 'div',
					'container_id'    => 'navbarNavDropdown',
					'container_class' => 'collapse navbar-collapse',
					'menu_id'         => false,
					'menu_class'      => 'navbar-nav ml-auto',
					'depth'           => 2,
					'fallback_cb'     => 'bs4navwalker::fallback',
					'walker'          => new bs4navwalker()
				));
			?>

		</div><!-- container -->
		
	</nav><!-- navbar -->

	<?php get_template_part('template-parts/acf', 'modalContact'); ?>














