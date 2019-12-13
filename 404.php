<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Mizz
 */

get_header(); ?>

<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>My Portfolio</title>
		<meta name ="viewport" content="width=device-width, initial-scale =1.0">

	</head>
	<body>
		<header>
		<a href="index.html" class="header-brand">mmtuts</a>
		<nav>
			<ul>
				<li><a href= "portfolio.html">Portfolio</a></li>
				<li><a href="about.html">About me</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<a href="cases.html" class="header-cases">Cases</a>
		</nav>
	</header>
	<main>
		<section class="cases-links">
			<h2 class="error-404">404 page Not Found!</h2>
			<p class="error-404-p">The page you were looking for does not exist! Click<
			<a href="index.html">here</a> to return to the Home page.<br>If you gotto this page by clicking alink, pleasenotify us so we can fix this error:)</p>
			</section>
			</main>
			<div class="wrapper">
				<footer>
			<ul class="footer-links-main">
				<li><a href="#">Home</a></li>
				<li><a href="#">Cases</a></li>
				<li><a href="#">Portfolio</a></li>

	
	</body>
	</html>>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'mizz' ); ?></h1>
				</header><!-- .page-header -->


//
				<div class="page-content">
					<p><?php esc_html_e( 'I am sorry.The page you are looking for is not available.', 'mypersonalinfo' );?></p>
					<div class="error-homepage">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php esc_html_e('Back To Home','Helpinfo'); ?>
					</a>

//
					

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'mizz' ); ?></h2>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$mizz_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'mizz' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$mizz_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
