<?php
// The Query
$the_query = new WP_Query( 'post_type=manifest_testimonial' );

// The Loop
if ( $the_query->have_posts() ) : 
$i = 0;

?>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

	<?php  while ( $the_query->have_posts() ) : 
$i++;
$a = ' class="collapsed"';
$b = '';
$c = 'false';
if($i==1){
  $a ='';
  $b = ' in';
  $c = 'true';
}
	$the_query->the_post();
	?>

  <div class="panel panel-default">
    <?php echo '<div class="panel-heading" role="tab" id="heading' . $post->ID . '">'; ?>  
      <h4 class="panel-title">
        <?php echo '<a' . $a . ' role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse' . $post->ID . '" aria-expanded="' . $c . '" aria-controls="collapse' . $post->ID . '">'; ?>
      		<?php	
          the_title(); ?>
        </a>
      </h4>
    </div>
    <?php echo '<div id="collapse' . $post->ID . '" class="panel-collapse collapse' . $b . '" role="tabpanel" aria-labelledby="heading' . $post->ID . '" aria-expanded="' . $c . '">'; ?>    
      <div class="panel-body">
		    <?php the_content(); ?>
      </div>
    </div>
  </div>

	<?php endwhile; ?>

</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<!--
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div
-->