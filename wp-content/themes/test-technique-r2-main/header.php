<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test-technique
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'test-technique'); ?></a>

		<header id="masthead" class="site-header">
			<nav>
				<a href="/#">
					<img class="logo" src="<?php echo get_template_directory_uri() . '/assets/logo.svg'; ?>" alt="logo blanc sur un fond vert et rond" />
				</a>
				<div class="nav-link">
					<a href="/"> Ut bibendum </a>
					<button type="button" class="drop-down-button">
						<a href="/"> Suspendisse at
							<img src="<?php echo get_template_directory_uri() . '/assets/arrow-bottom.svg'; ?>" />
						</a>
					</button>
					<a href="/"> Quisque <img /> </a>
					<a href="/"> lacus eu sodales </a>
				</div>
				<button type="button" class="nav-button">Fusce</button>
			</nav>
		</header><!-- #masthead -->
	</div>