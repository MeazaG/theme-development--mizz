<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mizz
 */

?>

	</div><!-- #content -->
   <footer class="site-footer">
		<nav class="site-nav">
			<?php 
				$args=array(
					'theme_location'=>'footer'
					);
			?>
				<?php wp_nav_menu( $args); ?>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mizz' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'mizz' ), 'Meaza' );
				?>
			</a>
			</nav>
		<p>Copy@ <?php the_date()?></p>
	</footer>
</div><!--container -->
	
		<?php wp_footer(); ?>
	
</div><!-- #page -->


</body>
</html>
