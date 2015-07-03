<?php
/**
 * Kirki Advanced Customizer
 * This is a sample configuration file to demonstrate all fields & capabilities.
 * @package Kirki
 */

// Early exit if Kirki is not installed
if ( ! class_exists( 'Kirki' ) ) {
    return;
}

/**
 * Create panels using the Kirki API
 */
Kirki::add_panel( 'main_panel', array(
    'priority'    => 10,
    'title'       => __( 'My Title', 'textdomain' ),
    'description' => __( 'My Description', 'textdomain' ),
) );


$config = 'kirki_demo';

/**
 * Create a config instance that will be used by fields added via the static methods.
 * For this example we'll be defining our options to be serialized in the db, under the 'kirki_demo' option.
 */
Kirki::add_config( $config, array(
    'options_type' => 'option',
    'option_name'  => 'kirki_demo'
) );



require_once('typography.php');
require_once('colors-brand.php');
require_once('colors-standard.php');
require_once('colors-neutral.php');
require_once('general.php');
