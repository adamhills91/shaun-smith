<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shaun_Smith
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer-main">
		<div class="container">
			<div class="footer-logo">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-no-bg.png" alt="Shaun Smith Carpet and Vinyl Specialist Logo">
			</div>
			<div class="nav">
				<?php dynamic_sidebar('footer-widget-col-one'); ?>
			</div>
			<div class="contact-details">
				<?php dynamic_sidebar('footer-widget-col-two'); ?>
			</div>
			<div class="opening-times">
				<?php dynamic_sidebar('footer-widget-col-three'); ?>
			</div>
		</div>
	</div>
	<div class="sub-footer">
		<div class="container">
			<p>Copyright &copy; <?php echo date("Y"); ?> Shaun Smith Carpet & Vinyl Specialist. All rights reserved.</p>
			<p>Website created by Adam Hills</p>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer();

wp_footer(); ?>

</body>

</html>