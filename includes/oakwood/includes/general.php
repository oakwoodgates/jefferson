<?php

// Add password form to protected post excerpt.
// https://codex.wordpress.org/Using_Password_Protection#Add_the_Password_Form_to_the_Excerpt
function my_excerpt_password_form( $excerpt ) {
    if ( post_password_required() )
        $excerpt = get_the_password_form();
    return $excerpt;
}
add_filter( 'the_excerpt', 'my_excerpt_password_form' );
?>