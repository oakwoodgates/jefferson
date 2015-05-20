<?php
/**
 * Fallback for plugins that expect a content.php file.
 * get_template_part( 'content', get_post_format() )
 * would revert here. 
 * We should get our content file directory.
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