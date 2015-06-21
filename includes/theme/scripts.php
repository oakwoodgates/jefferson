<?php
/**
 * Script and Style Loaders and Related Functions.
 *
 * @package     Compass
 * @subpackage  HybridCore
 * @copyright   Copyright (c) 2015, Flagship Software, LLC
 * @license     GPL-2.0+
 * @since       1.0.0
 */

add_action( 'admin_init', 'compass_add_editor_styles' );
/**
 * Replace the default theme stylesheet with a RTL version when a RTL
 * language is being used.
 *
 * @since  1.2.0
 * @access public
 * @return void
 */
function compass_add_editor_styles() {
	// Set up editor styles
	$editor_styles = array(
		'//fonts.googleapis.com/css?family=Raleway:400,600|Lato:400,400italic,700',
		'css/editor-style.css',
	);

	// Add the editor styles.
	add_editor_style( $editor_styles );
}

add_action( 'wp_enqueue_scripts', 'compass_rtl_add_data' );
/**
 * Replace the default theme stylesheet with a RTL version when a RTL
 * language is being used.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function compass_rtl_add_data() {
	wp_style_add_data( 'style', 'rtl', 'replace' );
	wp_style_add_data( 'style', 'suffix', hybrid_get_min_suffix() );
}

add_action( 'wp_enqueue_scripts', 'compass_enqueue_styles', 4 );
/**
 * Register our core parent theme styles.
 *
 * Normally we would enqueue all styles here, but because we've defined our base
 * styles in the theme setup function as Hybrid Core Styles, we only need to
 * register them. Hybrid Core will ensure they're loaded in the correct order.
 * Any non-global styles can still be enqueued manually in the usual way within
 * this function.
 *
 * @since  1.0.0
 * @access public
 * @see    http://themehybrid.com/docs/hybrid-core-styles
 * @return void
 */
function compass_enqueue_styles() {
	wp_register_style(
		'google-fonts',
		'//fonts.googleapis.com/css?family=Raleway:400,600|Lato:400,400italic,700',
		array(),
		null
	);
}

// https://codex.wordpress.org/Function_Reference/wp_enqueue_script#Default_Scripts_Included_and_Registered_by_WordPress
// function my_scripts_method() {
//    wp_enqueue_script( 'jquery-masonry' );
// }

// add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

// wp_enqueue_scripts action hook to link only on the front-end

add_action( 'wp_enqueue_scripts', 'compass_enqueue_scripts' );
/**
 * Enqueue theme scripts.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function compass_enqueue_scripts() {
	$js_dir = trailingslashit( get_template_directory_uri() ) . 'js/';
	$suffix = hybrid_get_min_suffix();

	wp_enqueue_script(
		'compass',
		$js_dir . "theme{$suffix}.js",
		array( 'jquery' ),
		null,
		true
	);
}



// Always use wp_enqueue_scripts action hook to both enqueue and register scripts
add_action( 'wp_enqueue_scripts', 'enqueue_and_register_my_scripts' );

function enqueue_and_register_my_scripts(){

    // Use `get_stylesheet_directory_uri() if your script is inside your theme or child theme.
    wp_register_script( 'my-script', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.js' );
    wp_register_style( 'my-plugin', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.css' );
    wp_register_style( 'my-theme', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap-theme.css' );

	wp_enqueue_script( 'my-script', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.js', 'jquery' );
	wp_enqueue_style( 'my-plugin' );
//	wp_enqueue_style( 'my-theme' );


}

// Register style sheet.
add_action( 'wp_enqueue_scripts', 'register_plugin_styles' );

/**
 * Register style sheet.
 */
function register_plugin_styles() {
	wp_register_style( 'my-plugin', plugins_url( 'my-plugin/css/plugin.css' ) );
	wp_enqueue_style( 'my-plugin' );
}