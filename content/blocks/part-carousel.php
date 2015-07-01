<?php
// The Query
$the_query = new WP_Query( 'post_type=manifest_testimonial' );

// The Loop
if ( $the_query->have_posts() ) : 
$i = 0;

?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">

	<?php  while ( $the_query->have_posts() ) : 

$a = '';
if($i==0){
  $a =' class="active"';
}
	$the_query->the_post();
	?>

    <?php echo '<li data-target="#carousel-example-generic" data-slide-to="' . $i . '"' . $a . '></li>'; ?>

  <?php $i++; ?>

	<?php endwhile; ?>
  
  </ol>
   <div class="carousel-inner" role="listbox">

  <?php  
    $i = 0;
    while ( $the_query->have_posts() ) : 

      $b = '';
      if($i==0){
        $b =' active';
      }
        $the_query->the_post();
  ?>

    <?php echo '<div class="item' . $b . '">'; ?>
    <?php if ( has_post_thumbnail() ) : 
      the_post_thumbnail('full');
      endif; ?>

      <div class="carousel-caption">
<?php the_excerpt(); ?>
      </div>
    </div>
  <?php $i++; ?>

  <?php endwhile; ?>
    </div>

  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<!--
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  // Indicators
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  // Wrapper for slides 
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="..." alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="..." alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  // Controls 
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
-->