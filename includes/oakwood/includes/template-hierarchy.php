<?php
add_filter( 'hybrid_content_template_hierarchy', 'oakwood_content_template_hierarchy' );

function oakwood_content_template_hierarchy( $templates ) {
	$templates = array_merge(array_diff($templates, array('content.php')));
	return $templates;
}

?>