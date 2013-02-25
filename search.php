<?php
/**
 * The template for displaying Search Results pages.
 */

get_header(); ?>


	<?php if ( have_posts() ) : ?>

		<header>
			<h1><?php printf( __( 'Search Results for: %s', 'migration' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</header>

		<?php migration_content_nav( 'nav-above' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content' ); ?>
		<?php endwhile; ?>

		<?php migration_content_nav( 'nav-below' ); ?>

	<?php else : ?>

		<header>
			<h1><?php _e( 'Nothing Found', 'migration' ); ?></h1>
		</header>

		<div>
			<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'migration' ); ?></p>
			<?php get_search_form(); ?>
		</div>
			
	<?php endif; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>