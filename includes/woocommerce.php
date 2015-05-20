<?php
/**
 * General theme helper functions.
 *
 * @package     
 * @subpackage  HybridCore
 * @copyright   
 * @license     GPL-2.0+
 * @link        
 * @since       0.1.2
 */

?>

<?php

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
add_action(    'woocommerce_before_main_content', 'my_theme_wrapper_start', 10 );
add_action(    'woocommerce_after_main_content', 'my_theme_wrapper_end', 10 );
/**
 * Remove woocommerce wrappers and add ours
 *
 * @since  0.1.2
 * @link   http://docs.woothemes.com/document/third-party-custom-theme-compatibility
 */
function my_theme_wrapper_start() {
  echo '<main id="content" class="content" role="main">';
}

function my_theme_wrapper_end() {
  echo '</main>';
}

add_action( 'woocommerce_archive_description', 'woocommerce_category_image', 2 );
/**
 * Display category image on category archive
 *
 * @since  0.1.2
 * @link   http://docs.woothemes.com/document/woocommerce-display-category-image-on-category-archive/
 */
function woocommerce_category_image() {
    if ( is_product_category() ){
	    global $wp_query;
	    $cat = $wp_query->get_queried_object();
	    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
	    $image = wp_get_attachment_url( $thumbnail_id );
	    if ( $image ) {
		    echo '<img src="' . $image . '" alt="" />';
		}
	}
}


/**
 * Allow HTML in WooCommerce term (category, tag) descriptions
 *
 * @since  0.1.2
 * @link   http://docs.woothemes.com/document/allow-html-in-term-category-tag-descriptions/
 */
foreach ( array( 'pre_term_description' ) as $filter ) {
    remove_filter( $filter, 'wp_filter_kses' );
}
 
foreach ( array( 'term_description' ) as $filter ) {
    remove_filter( $filter, 'wp_kses_data' );
}

/**
 * Allow shortcodes in product excerpts
 *
 * @since  0.1.2
 * @link   http://docs.woothemes.com/document/allow-shortcodes-in-product-excerpts/
 */
if (!function_exists('woocommerce_template_single_excerpt')) {
   function woocommerce_template_single_excerpt( $post ) {
   	   global $post;
       if ( $post->post_excerpt ) echo '<div itemprop="description">' . do_shortcode(wpautop(wptexturize($post->post_excerpt))) . '</div>';
   }
}


/**
 * Change number or products per row to 2
 *
 * @since  0.1.2
 * @link   http://docs.woothemes.com/document/change-number-of-products-per-row/
 */
add_filter( 'loop_shop_columns', 'loop_columns' );
if ( !function_exists( 'loop_columns' )) {
	function loop_columns() {
		return 2; // 2 products per row
	}
}

