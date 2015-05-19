<?php

// bbpress stuff

?>
<?php

add_filter('bbp_before_list_forums_parse_args', 'custom_bbp_sub_forum_list' );
// https://codex.bbpress.org/layout-and-functionality-examples-you-can-use/
// create vertical list
function custom_bbp_sub_forum_list() {
	$args['separator'] = '<br>';
	$args['show_topic_count'] = false;
	$args['show_reply_count'] = false;
	$args['count_sep'] = '';

	return $args;
}



add_action( 'bbp_template_before_single_forum' , 'add_bbp_display_forum_description' );
// https://codex.bbpress.org/layout-and-functionality-examples-you-can-use/
/** filter to add description after forums titles on forum index */
function add_bbp_display_forum_description() {
    echo '<div class="bbp-forum-content">' ;
    bbp_forum_content() ;
    echo '</div>';
}



// Add labels to certain topics
function rk_sticky_topics() {
 
 	// Show Sticky label
	if ( bbp_is_topic_sticky() && !bbp_is_topic_closed() )
    	echo '<span class="sticky">[Sticky]</span>';

    // Show Closed label
	if ( bbp_is_topic_closed() && !bbp_is_topic_sticky() )
		echo '<span class="closed">[Closed]</span>';

	// Show Announcement label
	if ( bbp_is_topic_sticky() && bbp_is_topic_closed() )
		echo '<span class="announcement">[Announcement]</span>';

}
add_action( 'bbp_theme_before_topic_title', 'rk_sticky_topics' );

?>