<?php
/**
 * OakwoodGate's Library of The Things
 * -Reusable WP functions
 *
 * Do all the things.
 *
 * @package     Oakwood
 * @subpackage  FlagshipLibrary
 * @copyright   Copyright (c) 2015
 * @license     GPL-2.0+
 * @link        
 * @since       1.0.0
 */

$lib_dir = get_template_directory() . '/includes/oakwood/includes/';

// Load all the things to make bbPress better.
if ( class_exists( 'bbPress' ) ) {
//	require_once $lib_dir . 'bbpress.php';
}

// Load all the things to make jetpack compatible.
// if ( class_exists( 'Jetpack' ) ) {
	require_once $lib_dir . 'jetpack.php';
// }

// Load all the woocommerce things.
if ( class_exists( 'woocommerce' ) ) {
	require_once $lib_dir . 'woocommerce.php';
}

// Load Theme Hook Alliance files.
require_once $lib_dir . 'tha-theme-hooks.php';

// Load the final filter for the template hierarchy.
require_once $lib_dir . 'template-hierarchy.php';

// Load the WP functions we like to use.
require_once $lib_dir . 'general.php';

// ACF things and stuff
// require_once $lib_dir . 'acf.php';

// require_once $lib_dir . 'kirki.php';
// require_once $lib_dir . 'cmb2.php';
