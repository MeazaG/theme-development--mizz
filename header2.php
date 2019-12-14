<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mizz
 */

?>
<!doctype html>
<html >
<?php language_attributes(); ?>
<head>

<meta charset = "UTF - 8">
<title> My HomePage</title>
<?php bloginfo('Name');?>
<?php wp_head(); ?>



	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
</head>

<body <?php body_class(); ?> >

	<header id ="header">
		<header>
			<h1><a href="<?php echo home_url()?>"><?php bloginfo('name');?></a></h1>
		<h3><?php bloginfo('description');?></h3>

		<nav class="nav_menu">
			<?php wp_nav_menu();?>
			
		</nav>

	</header>


		<div class = "container-fluid">
			<div class = "row align-item-center justify-content-between d-flex">
				<div id = "logo">
					<a href = "index.php"><img src = "img/logo.png"alt="" title="" /></a>
				</div>
	<h2> <?php bloginfo('description'); ?></h2>

<?php


/**<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mizz' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$mizz_description = get_bloginfo( 'description', 'display' );
			if ( $mizz_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $mizz_description; /* WPCS: xss ok.  ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mizz' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
	*/
