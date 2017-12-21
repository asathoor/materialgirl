<?php
/**
 * Template part: a full width frontpage for Pagebuilder
 */
 ?>
<!-- article id="post-<?php the_ID(); ?>" <?php post_class(); ?> -->
	
	<div class="entry-content">

		<?php
			the_content();
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php materialgirl_entry_footer(); ?>
	</footer><!-- .entry-footer -->
<!-- /article><!-- #post-<?php the_ID(); ?> -->