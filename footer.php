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
</div><!-- .row -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer grey darken-3 valign-wrapper center">
		<div class="site-info">
			&copy; Per Thykjaer Jensen		
		
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'materialgirl' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'materialgirl' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s based on %2$s.', 'materialgirl' ), 
					'<a href="https://github.com/asathoor/materialgirl">Materialgirl</a>', 
					'<a href="http://underscores.me/">Underscores.me</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- .container -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- SCRIPTS -->

	<!-- jquery -->
	<script id="materialgirl-jquery" src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js"></script>
	
	<!-- materialize js -->
	<script id="materialgirl-materialize-js" src="<?php echo get_template_directory_uri(); ?>/bower_components/materialize/dist/js/materialize.min.js"></script>
	

	<!-- Materializecss tweaks -->
	<script>
		$( document ).ready(function() {
    		console.log( "Jq ready!" );
    		
    		/* navigation */
		    // Initialize collapse button
  			$(".button-collapse").sideNav();
			// Initialize collapsible (uncomment the line below if you use the dropdown variation)
			$('.collapsible').collapsible();
		});	
	
	</script>


</body>
</html>
