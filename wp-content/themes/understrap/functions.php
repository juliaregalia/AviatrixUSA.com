<?php
require_once 'shortcodes.php';

/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

set_post_thumbnail_size( $width, $height, $crop );

add_shortcode( 'content','content_callback' );

function content_callback( $atts, $content = NULL ){
    $atts = shortcode_atts(array(
        'pid' => '',
    ), $atts);      

    if( ! is_int( 1 * $atts['pid'] ) )
        return "<!-- Shortcode Error: pid must be an integer -->"; 

    if(  absint( $atts['pid'] ) === get_the_ID() )
        return "<!-- Shortcode Error: pid can't be the current id -->"; 

    $queried_post = get_post( absint( $atts['pid'] ) );

    if( ! is_object( $queried_post ) )
        return "<!-- Shortcode Error: Post not found! -->";

    $postcontent = do_shortcode( $queried_post->post_content );
    $title = $queried_post->post_title;

    $finaloutput = $title . $postcontent;

    return $finaloutput;
}