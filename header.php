<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */
$header = new header;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
			<header id="masthead" class="site-header" role="banner">
			<div class="<?php $header -> banner_class(); ?>" style="<?php $header -> banner_image(); ?>">		
				<nav id="site-navigation" class="main-navigation flex justify-between align-center page-container" role="navigation">
					<img src ="<?php $header -> logo_image(); ?>">
					<button class="menu-toggle" aria-controls="primary-menu" style="color: #fff; padding-left:10px;"aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
