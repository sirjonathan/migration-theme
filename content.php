<?php
/**
 * The default template for displaying content.
 */
?>

	<article <?php post_class(); ?>>
	
		<header>			
			<?php the_post_thumbnail(); ?>			
			<h1><?php the_title(); ?></h1>			
		</header>
		
		<div>
			<?php the_content(); ?>
		</div>

	</article>
