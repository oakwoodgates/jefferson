
<?php
// The Query
$the_query = new WP_Query( 'post_type=manifest_testimonial' );

// The Loop
if ( $the_query->have_posts() ) : 
?>

	<ul class="row flex-3-row">

		<?php  while ( $the_query->have_posts() ) : 

		$the_query->the_post();
		?>

		<li class="col-md-4 flex-3">
			<div class="bullet-icon bullet-icon-1">
				<img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2_dark.png" alt="">
			</div>
			<div class="bullet-content">
				<?php
				echo '<h2>' . get_the_title() . '</h2>';
				the_excerpt(); 
				?>
			</div>
		</li> 

		<?php endwhile; ?>

	</ul>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

