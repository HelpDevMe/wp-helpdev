<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HelpDevMe
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'helpdevme' ); ?></a>

	<header id="masthead" class="site-header navbar navbar-expand-md navbar-light bg-white">
		<div class="site-branding navbar-brand">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
				<?php
			endif;
			$helpdevme_description = get_bloginfo( 'description', 'display' );
			if ( $helpdevme_description || is_customize_preview() ) :
				?>
				<p class="site-description d-none"><?php echo $helpdevme_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<button class="navbar-toggler menu-toggle" type="button" data-toggle="collapse" data-target="#site-navigation" aria-controls="site-navigation" aria-expanded="false" aria-label="<?php esc_html_e( 'Primary Menu', 'helpdevme' ); ?>">
			<span class="navbar-toggler-icon"></span>
		</button>

		<nav id="site-navigation" class="main-navigation collapse navbar-collapse">
			<?php
			wp_nav_menu( array(
				'container'      => false,
				'menu_class' 	 => 'navbar-nav ml-auto',
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
