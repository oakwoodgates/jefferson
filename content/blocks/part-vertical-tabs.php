
<div class="vertical-tabs-container">
  
<?php
  wp_reset_postdata();


// The Query
$the_query = new WP_Query( 'post_type=manifest_testimonial' );

// The Loop


if ( $the_query->have_posts() ) {
  echo '<div class="vertical-tabs">';
  while ( $the_query->have_posts() ) {
   
    $the_query->the_post();
    echo '<a href="javascript:void(0)" class="js-vertical-tab vertical-tab" rel="tab' . $post->ID . '">' . get_the_title() . '</a>';
  }
  echo '</div>';

  echo '<div class="vertical-tab-content-container">';
 // rewind_posts();
//  wp_reset_postdata();
  while ( $the_query->have_posts() ) {
   
    $the_query->the_post();
    echo '<a href="" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading" rel="tab' . $post->ID . '">' . get_the_title() . '</a>';
    echo '<div id="tab' . $post->ID . '" class="js-vertical-tab-content vertical-tab-content">';
    the_content();
    echo '</div>';
  }
  echo '</div>';  
}

?> 
<?php 

/* Restore original Post Data */
// wp_reset_postdata();

?>

<?php  ?>

<?php /*

rewind_posts();

if ( $the_query->have_posts() ) {
  echo '<div class="vertical-tab-content-container">';
  while ( $the_query->have_posts() ) {
   
    $the_query->the_post();
    echo '<a href="" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading" rel="tab' . $post->ID . '">' . get_the_title() . '</a>';
    echo '<div id="tab' . $post->ID . '" class="js-vertical-tab-content vertical-tab-content">';
    the_content();
    echo '</div>';
  }
  echo '</div>';
}
*/
?>
 
<?php 

/* Restore original Post Data */
wp_reset_postdata();

?>

</div>
