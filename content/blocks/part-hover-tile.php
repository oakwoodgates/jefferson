<?php
// The Query
$the_query = new WP_Query( 'post_type=manifest_testimonial' );

// The Loop
if ( $the_query->have_posts() ) : 
?>

<div class="row">

	<?php  while ( $the_query->have_posts() ) : 

	$the_query->the_post();
	?>

		<div class="hover-tile-outer col-md-6 col-no-pad">
			<div class="hover-tile-container">
				<div class="hover-tile hover-tile-visible"></div>
				<div class="hover-tile hover-tile-hidden">
					<?php
					echo '<h4>' . get_the_title() . '</h4>';
					the_excerpt(); 
					?>
				</div>
			</div>
		</div>

	<?php endwhile; ?>

</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
