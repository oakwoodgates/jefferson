<?php
/**
 * Fallback for plugins that expect a content.php file.
 *
 * get_template_part( 'content', get_post_format() )
 * or something similar would revert here.
 *
 * We should use our content template directory, so let's give the plugin a
 * chance to look in our content directory and find the correct template.
 *
 * If nothing is available, it will default to
 * content/singular/content.php or content/archive/content.php depending.
 *
 * @package     
 * @subpackage  HybridCore
 * @copyright   
 * @license     GPL-2.0+
 * @since       0.1.2
 */
?>
<?php
hybrid_get_content_template();

/*	assert( "locate_template( array('content/singular/content.php', ''), true, false )" ); */

?>