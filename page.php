<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>


	<?php while ( have_posts() ) : the_post(); ?>
	
		<?php get_template_part( 'content', 'page' ); ?>
		
	<?php endwhile; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>