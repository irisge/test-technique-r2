<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test-technique
 */

get_header();


?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/landing-page.css'; ?>">

<main id="primary" class="site-main">
	<div class="site-hero" style="background-image: url('<?php the_field('background_hero'); ?>');">
		<h2><?php the_field('titre_hero') ?></h2>
		<span></span>
		<h4><?php the_field('texte_hero') ?></h4>
		<!-- <img src="<?php the_field('background_hero'); ?>" /> -->
	</div>
	<div class="copy">
		<div class="content-copy">
			<h3><?php the_field('title_copy') ?></h3>
			<div class="text-content-copy">
				<h4><?php the_field('subtitle_copy') ?></h4>
				<p><?php the_field('text_copy') ?></p>
			</div>

			<button type="text" class="button-copy">
				<p>Fusce</p>
				<img src="<?php echo get_template_directory_uri() . '/assets/arrow.svg'; ?>" alt="arrow" />
			</button>
		</div>
		<img src=" <?php the_field('image_copy') ?>" />
	</div>


</main><!-- #main -->

<?php
get_sidebar();
get_footer();
