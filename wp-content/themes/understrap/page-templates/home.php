<?php
/**
 * Template Name: Home Page Template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

	<div class="container-fluid" id="content" tabindex="-1">

		<div class="row">
            <div class="container col-md content-area" id="primary-home">

			<!-- <main class="site-main" id="main"> -->

            <p class="headline">World Class<br>Aerospace Parts<br>Supplier</p>

            <div class="home-intro-feature">
                <p>At Aviatrix, we pride ourselves on outstanding customer service and reliability. Our knowledgeable staff will go above and beyond to fulfill your critical requirements with the highest quality parts.</p>
                <p>With more than 20 years of experience, we have been nationally recognized for supplying critical parts in a timely manner.</p>
                <a href="/aviatrix-advantage"><button type="button" class="btn btn-primary">get the aviatrix advantage</button></a>
            </div>

            <div class="row parts-services">
                <h2 class="orange">PARTS & SERVICES <span class="thick drop">FROM TRUSTED MANUFACTURERS</span></h2>

                <p>Aviatrix offers parts and services for many manufacturers including Bell, Boeing, Eurocopter, Goodrich, Honeywell, Lockheed Martin, Parker Hannifin and Sikorsky. We are proud to offer <span class="thick">same-day shipping</thick> on a variety of products, including:</p>

                <ul class="col">
                    <li>Avionics</li>
                    <li>Cables and Wires</li>
                    <li>Cowlings</li>
                    <li>Electrical Components</li>
                    <li>Exhaust Ejectors</li>
                    <li>Doors and Windows</li>
                    <li>Fasteners</li>
                </ul>
                <ul class="col">
                    <li>Firewalls</li>
                    <li>Floats</li>
                    <li>Fuel Cells</li>
                    <li>Ground Handling Wheels</li>
                    <li>Gyros and Amplifiers</li>
                    <li>Hoses</li>
                    <li>Hydraulic Components</li>
                </ul>
                <ul class="col">
                    <li>Obsolete Parts</li>
                    <li>Oil Coolers</li>
                    <li>Oversized Fasteners</li>
                    <li>Panels</li>
                    <li>Skid Tubes</li>
                    <li>Tow Bars</li>
                    <li class="thick">And much more</li>
                </ul>
            </div>

			<!-- </main> -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->



<?php get_footer(); ?>
