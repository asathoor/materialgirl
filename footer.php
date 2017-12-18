<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package materialgirl
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'materialgirl' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'materialgirl' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'materialgirl' ), 'materialgirl', '<a href="http://underscores.me/">Underscores.me</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<div class="clear"></div>
</div><!-- .container -->


</div><!-- #page -->



<?php wp_footer(); ?>

	<!-- jquery -->
	<script id="materialgirl-jquery" src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js"></script>
	
	<!-- materialize js -->
	<script id="materialgirl-materialize-js" src="<?php echo get_template_directory_uri(); ?>/bower_components/materialize/dist/js/materialize.min.js"></script>




</body>
</html>
