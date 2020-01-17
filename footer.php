<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nature
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div id ="footer-sidebar"class="row secondary">
			<div class="col-md-3" id="footer-sidebar1">

		
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				if(is_active_sidebar('footer-sidebar-1')){
					dynamic_sidebar('footer-sidebar-1');
				}
				
				?>
			
		</div>
		<div class ="col-md-3" id="footer-sidebar2">
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				if(is_active_sidebar('footer-sidebar-2')){
					dynamic_sidebar('footer-sidebar-2');
				}
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'nature' ), 'nature', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
				</div>
				<div class="col-md-3" id="footer-sidebar3">
					<?php
                if(is_active_sidebar('footer-sidebar-3')){
					dynamic_sidebar('footer-sidebar-3');
				  }
				  ?>
				</div>
				<div class="col-md-3" id="footer-sidebar4">
					<?php
                if(is_active_sidebar('footer-sidebar-4')){
					dynamic_sidebar('footer-sidebar-4');
				  }
				  ?>
				</div>

				<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nature' ) ); ?>">
            <?php
				printf( esc_html__( 'Proudly powered by %s', 'nature' ), 'Miz' );
				?>
			</a>
			<span class ="sep">|</span>
			<?php
			printf(esc_html_('Theme:1$s by %2$s.','nature'), 'nature','<a href="http://Underscores.me</a>');
			?>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
