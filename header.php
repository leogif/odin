<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="wrapper" class="container"><div class="row">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package odin
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a id="skippy" class="sr-only sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>

	<header id="header" role="banner">
		<div class="container">
			<div class="page-header hidden-xs">

				<?php odin_the_custom_logo(); ?>

				<?php if ( is_home() ) : ?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				<?php else : ?>
					<div class="site-title h1">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</div>
					<div class="site-description h2">
						<?php bloginfo( 'description' ); ?>
					</div>
				<?php endif ?>

				<?php
					$header_image = get_header_image();
					if ( ! empty( $header_image ) ) :
				?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_url( $header_image ); ?>" height="<?php esc_attr_e( $header_image->height ); ?>" width="<?php esc_attr_e( $header_image->width ); ?>" alt="" />
					</a>
				<?php endif; ?>
			</div><!-- .site-header-->

			<div id="main-navigation" class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
					<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand visible-xs-block" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</div>
				<nav class="collapse navbar-collapse navbar-main-navigation" role="navigation">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav navbar-nav',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
					?>
					<form method="get" class="navbar-form navbar-right" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
						<label for="navbar-search" class="sr-only">
							<?php _e( 'Search:', 'odin' ); ?>
						</label>
						<div class="form-group">
							<input type="search" value="<?php echo get_search_query(); ?>" class="form-control" name="s" id="navbar-search" />
						</div>
						<button type="submit" class="btn btn-default"><?php _e( 'Search', 'odin' ); ?></button>
					</form>
				</nav><!-- .navbar-collapse -->
			</div><!-- #main-navigation-->

		</div><!-- .container-->
	</header><!-- #header -->

	<div id="wrapper" class="container">
		<div class="row">
