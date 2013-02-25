<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */

get_header(); ?>


	<article class="error404">
	
		<header>
			<h1><?php _e( 'Whoops, this doesn\'t look right.', 'migration' ); ?></h1>
		</header>

		<div>
			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'migration' ); ?></p>
			<?php get_search_form(); ?>
		</div>
		
	</article>


<?php get_footer(); ?>