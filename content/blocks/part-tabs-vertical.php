<?php
  // The Query
  $the_query = new WP_Query( 'post_type=manifest_testimonial' );
  // The Loop
  if ( $the_query->have_posts() ) : 
    $i = 0;
?>

<div class="row">
  <ul class="nav nav-stacked col-md-3" role="tablist">

	<?php  while ( $the_query->have_posts() ) : 

$a = '';
if($i==0){
  $a =' class="active"';
}
	$the_query->the_post();
	?>

    <?php echo '<li role="presentation"' . $a . '><a href="#' . $post->ID . '" aria-controls="' . $post->ID . '" role="tab" data-toggle="tab">';
    the_title();
    echo '</a></li>'; ?>

  <?php $i++; ?>

	<?php endwhile; ?>
  
  </ul>
  <div class="tab-content col-md-9">


  <?php  
    $i = 0;
    while ( $the_query->have_posts() ) : 

      $b = '';
      if($i==0){
        $b =' active';
      }
        $the_query->the_post();
  ?>

    <?php echo '<div role="tabpanel" class="tab-pane fade in' . $b . '" id="' . $post->ID . '">';
    the_content();
    echo '</div>'; ?>


    

  <?php 
  $i++;
  endwhile; ?>
   
  </div><!-- /tab-content -->
  </div><!-- /row -->
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<!--
<div>

  // Nav tabs 
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
  </ul>

  // Tab panes
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">...</div>
    <div role="tabpanel" class="tab-pane" id="profile">...</div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>

</div>
-->