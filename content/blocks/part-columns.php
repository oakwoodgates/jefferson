<?php

// The Query
$the_query = new WP_Query( 'post_type=manifest_testimonial' );

// The Loop


if ( $the_query->have_posts() ) :
  echo '<div class="row">';
  while ( $the_query->have_posts() ) :
   echo '<div class="col-md-4">'; 
    $the_query->the_post();
    if ( has_post_thumbnail() ) : the_post_thumbnail(); 
    endif; 
    echo '<h3>' . get_the_title() . '</h3>';
    the_excerpt();
      echo '</div>';
  endwhile;
  echo '</div>';
endif;
wp_reset_postdata();

  ?>