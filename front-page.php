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
 * @package Shaun_Smith
 */

get_header();

?>

<main id="primary" class="site-main">

	<?php
	include 'components/hero.php';

	include 'components/services.php';
	include 'components/about_us.php';
	include 'components/google_reviews.php';
	?>

</main><!-- #main -->

<?php

get_footer();
