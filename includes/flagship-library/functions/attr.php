<?php
/**
 * HTML attribute functions and filters. The purposes of this is to provide a
 * way for theme/plugin devs to hook into the attributes for specific HTML
 * elements and create new or modify existing attributes. The biggest benefit of
 * using this is to provide richer microdata while being forward compatible with
 * the ever-changing Web.  Currently, the default microdata vocabulary supported
 * is Schema.org.
 *
 * @package     FlagshipLibrary
 * @subpackage  HybridCore
 * @copyright   Copyright (c) 2015, Flagship Software, LLC
 * @license     GPL-2.0+
 * @link        https://flagshipwp.com/
 * @since       1.0.0
 */

// Attributes for major structural elements.
add_filter( 'hybrid_attr_site-container',   'flagship_attr_site_container' );
add_filter( 'hybrid_attr_site-inner',       'flagship_attr_site_inner' );
add_filter( 'hybrid_attr_wrap',             'flagship_attr_wrap', 10, 2 );
add_filter( 'hybrid_attr_sidebar',          'flagship_attr_sidebar_class', 10, 2 );
add_filter( 'hybrid_attr_menu',             'flagship_attr_menu_class', 10, 2 );
// Post-specific attributes.
add_filter( 'hybrid_attr_entry-summary',    'flagship_attr_entry_summary_class' );
// Other attributes.
add_filter( 'hybrid_attr_nav',              'flagship_attr_nav', 10, 2 );

add_filter( 'hybrid_attr_container',             'flagship_attr_container', 10, 2 );

add_filter( 'hybrid_attr_content',              'flagship_attr_content', 10 );

function flagship_attr_content( $attr ) {
	$attr['id']		= 'content';
	$attr['class']	= 'content col-md-8';
	$attr['role']	= 'main';

	if ( ! is_singular( 'post' ) && ! is_home() && ! is_archive() ) {
		$attr['itemprop'] = 'mainContentOfPage';
	}
	return $attr;
}






/**
 * Bootstrap container wrap element attributes.
 *
 * @since  1.0.0
 * @access public
 * @param  array $attr
 * @return array
 */
function flagship_attr_container( $attr, $context ) {
	if ( empty( $context ) ) {
		return $attr;
	}
	
	$attr['class'] = "container {$context}-container";
	return $attr;
}



/**
 * Page site container element attributes.
 *
 * @since  1.0.0
 * @access public
 * @param  array $attr
 * @return array
 */
function flagship_attr_site_container( $attr ) {
	$attr['id']    = 'site-container';
	$attr['class'] = 'site-container';
	return $attr;
}

/**
 * Page site inner element attributes.
 *
 * @since  1.0.0
 * @access public
 * @param  array $attr
 * @return array
 */
function flagship_attr_site_inner( $attr ) {
	$attr['id']    = 'site-inner';
	$attr['class'] = 'site-inner';
	return $attr;
}

/**
 * Page wrap element attributes.
 *
 * @since  1.0.0
 * @access public
 * @param  array $attr
 * @return array
 */
function flagship_attr_wrap( $attr, $context ) {
	if ( empty( $context ) ) {
		return $attr;
	}
	
	$attr['class'] = "wrap {$context}-wrap";
	return $attr;
}

/**
 * Sidebar attributes.
 *
 * @since  1.0.0
 * @access public
 * @param  array $attr
 * @param  string $context
 * @return array
 */
function flagship_attr_sidebar_class( $attr, $context ) {
	if ( empty( $context ) ) {
		return $attr;
	}
	$attr['class'] .= " sidebar-{$context} col-md-4";
	return $attr;
}

/**
 * Add a menu context element to the class attribute to make styling easier.
 *
 * @since  1.0.0
 * @access public
 * @param  array $attr
 * @param  string $context
 * @return array
 */
function flagship_attr_menu_class( $attr, $context ) {
	if ( empty( $context ) ) {
		return $attr;
	}
	$attr['class'] .= " menu-{$context}";
	return $attr;
}

/**
 * Post summary/excerpt attributes.
 *
 * @since  1.0.0
 * @access public
 * @param  array $attr
 * @return array
 */
function flagship_attr_entry_summary_class( $attr ) {
	$attr['class'] = 'entry-content summary';
	return $attr;
}

/**
 * Attributes for nav elements which aren't necessarily site navigation menus.
 * One example use case for this would be pagination and page link blocks.
 *
 * @since  1.3.0
 * @access public
 * @param  array   $attr
 * @param  string  $context
 * @return array
 */
function flagship_attr_nav( $attr, $context ) {
	$class = 'nav';

	if ( ! empty( $context ) ) {
		$attr['id'] = "nav-{$context}";
		$class    .= " nav-{$context}";
	}

	$attr['class'] = $class;
	$attr['role']  = 'navigation';

	return $attr;
}
