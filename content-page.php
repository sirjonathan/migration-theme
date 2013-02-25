<?php
/**
 * The template used for displaying page content in page.php
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
