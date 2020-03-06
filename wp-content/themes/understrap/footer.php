<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="container-fluid" id="wrapper-footer">
	<div class="container wrapper">
		<div class="row">
				<div class="col">
					<h2>Contact <span class="thick">Us</span></h2>
					<strong>Aviatrix, Inc.</strong>
					<p>20952 SW Olds Place
					<br />Sherwood, OR 97140 USA</p>
					<p>Phone: <a href="tel:+1-503-925-7970">(503) 925-7970</a></p>
					<p>Fax: (503) 925-7980</p>
					<img src="/wp-content/themes/understrap/src/images/iso.svg" alt=""REGISTERED ISO 9001 &AS 9120B" />
					<img src="/wp-content/themes/understrap/src/images/meggit.svg" alt=""REGISTERED ISO 9001 &AS 9120B" />
				</div>
				<div class="col">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2802.967228614829!2d-122.8347114848752!3d45.36965634776882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54956d1e4b3f24c3%3A0xbce5a753b33c5198!2s20952%20SW%20Olds%20Pl%2C%20Sherwood%2C%20OR%2097140!5e0!3m2!1sen!2sus!4v1582841896177!5m2!1sen!2sus" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
		</div><!--row end -->
	</div><!--container end -->
	<div class="row copyright">
		<p><a href="/terms-conditions/">Terms & Conditions</a> | &copy; Copyright <?php echo date("Y"); ?> Aviatrix, Inc.</p>
	</div>
</footer><!-- wrapper end -->


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

