<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package materialgirl
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<!--
	
		WordPress Theme: Materialgirl
		By: Per Thykjaer Jensen, dec. 2017.
		Based on: Materializecss.
		Theme Licence: GPLv2.
		
		Since the theme is made by Materializecss 
		the theme was named after a song by Madonna.
	
	-->

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<!--Let browser know website is optimized for mobile-->
	<!-- meta name="viewport" content="width=device-width, initial-scale=1.0"/ -->
	<meta name="viewport" content="width=device-width">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- load _S settings before the Materialize stuff -->
	<?php wp_head(); ?>
	
	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- link href="<?php echo get_template_directory_uri(); ?>/bower_components/materialize/dist/css/materialize.min.css" type="text/css" rel="stylesheet" -->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'materialgirl' ); ?></a>

	<header id="masthead" class="site-header purple darken-3">

			
		<div class="site-branding">
		
			<?php // the_header_image_tag(); ?><!-- custom header image -->	
			<?php

			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation black">
			
			<!-- materialcss menu headings -->
			<div class="nav-wrapper">

			<!-- /materialcss menu headings -->

			<button class="menu-toggle  deep-orange darken-1" aria-controls="primary-menu" aria-expanded="false">
				 <i class="material-icons">menu</i> 
			</button>
			<?php
				wp_nav_menu( 
					array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container_class' => 'left black',
					) 
				);
			?>
		</nav><!-- #site-navigation -->
		</div><!-- .nav-wrapper -->
	</header><!-- #masthead -->

	
	<div id="content" class="site-content">
	<div class="container white">
		<div class="row">
