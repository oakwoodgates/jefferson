<?php

add_action( 'tha_content_top', 'themename_get_breadcrumbs', 10 );

function themename_get_breadcrumbs() {
	hybrid_get_menu( 'breadcrumbs' );
}



?>