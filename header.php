<?php
/**
 * The Header for our theme.
 */
?><!DOCTYPE html>
<html>
<head>

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<div>

	<header>
		
		<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ); ?>
		</nav>

	</header>