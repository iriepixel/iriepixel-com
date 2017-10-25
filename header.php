<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IRIE_PIXEL
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="alternate" href="<?php echo esc_url( home_url( '/' ) ); ?>" hreflang="en" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- <link href="https://plus.google.com/107476889884763789197" rel="publisher" /> -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/x-icon" href="/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/x-icon" href="/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/favicon/manifest.json">
<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#000000">
<link rel="shortcut icon" href="/favicon/favicon.ico">
<meta name="msapplication-config" content="/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'iriepixel' ); ?></a>

	<div class="site-branding wow fadeIn">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img class="header-logo" alt="IRIE PIXEL logo" title="IRIE PIXEL logo" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/iriepixel/images/irie-pixel-logo.svg">
		</a>
	</div><!-- .site-branding -->

	<button class="c-hamburger c-hamburger--htx">
		<span class="centered">menu</span>
	</button>

	<?php
	if ( is_front_page() ) : ?>
		<div id="irie-particles" class="wow fadeIn"></div>

		<div class="irie-main-logo wow fadeIn">
			<h1 class="irie-main-logo-title"><?php the_title(); ?></h1>
		  <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/iriepixel/images/logo-iriepixel.svg" title="IRIE PIXEL Logo" alt="IRIE PIXEL Logo"/>
		</div>
	<?php
	endif; ?>

	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

			<div class="irie-main-logo">
			  <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/iriepixel/images/logo-iriepixel.svg" title="IRIE PIXEL Logo" alt="IRIE PIXEL Logo"/>
			</div>

		</nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
