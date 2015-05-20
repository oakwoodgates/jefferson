<?php
/**
 * Plugin Compatibility File
 *
 * @package     Compass
 * @subpackage  HybridCore
 * @copyright   Copyright (c) 2015, Flagship Software, LLC
 * @license     GPL-2.0+
 * @since       1.0.0
 */

add_action( 'after_setup_theme', 'compass_jetpack_setup', 12 );
/**
 * Make adjustments to the theme when Jetpack is installed and activated.
 *
 * @since  1.0.0
 * @link   http://ottopress.com/2012/jetpack-and-the-infinite-scroll/
 * @link   http://jetpack.me/support/infinite-scroll/
 * @return void
 */
function compass_jetpack_setup() {
	// Add support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => false,
	) );
}
