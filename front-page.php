<?php
/**
 * file: front-page.php
 * purpose: the front page
 *
 * @package materialgirl
 */

get_header(); ?>

	<div class="row">
		<!-- THE CONTENT -->
		<div class="col s12 m7 l6">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
		
				<?php while ( have_posts() ) : the_post(); ?>
							
					<?php 
					get_template_part( 'template-parts/content', 'frontpage' );
		
					the_post_navigation();
		
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						//comments_template();
					endif;
		
				endwhile; // End of the loop.
				?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .col (content) -->
		
		<!-- THE SIDEBAR -->
		<div class="col s12">
		
			<?php get_sidebar(); ?>
			
		</div><!-- /sidebar -->
	</div><!-- .row -->

<?php get_footer(); ?>