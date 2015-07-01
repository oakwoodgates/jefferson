<?php
// The Query
$the_query = new WP_Query( 'post_type=manifest_testimonial' );

// The Loop
if ( $the_query->have_posts() ) : 
?>
<div class="row">
<ul class="media-list">

	<?php  while ( $the_query->have_posts() ) : 

	$the_query->the_post();
	?>

  <li class="media">
    <div class="media-left">
      <?php if ( has_post_thumbnail() ) : the_post_thumbnail('compass-thumb'); 
      endif; ?>
    </div>
    <div class="media-body">      
		<?php
		echo '<h4>' . get_the_title() . '</h4>';
		the_excerpt(); 
		?>
    </div>
  </li>

	<?php endwhile; ?>

</ul>
</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<!--
<ul class="media-list">
  <li class="media">
    <div class="media-left">
      <a href="#">
        <img class="media-object" src="..." alt="...">
      </a>
    </div>
    <div class="media-body">
      <h4 class="media-heading">Media heading</h4>
      ...
    </div>
  </li>
</ul> 
-->