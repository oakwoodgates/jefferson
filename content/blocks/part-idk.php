<?php

// The Query
$the_query = new WP_Query( 'post_type=manifest_testimonial' );

// The Loop


if ( $the_query->have_posts() ) :
  echo '<div class="row">';
  while ( $the_query->have_posts() ) : 

 $the_query->the_post(); 
$img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-thumbnail');?>
<div class="col-md-4">
<div class="panel panel-default">
  <?php echo '<div class="panel-heading" style="background:url(' . $img[0] . ') no-repeat center center;">'; ?>
    <h3>
       <?php
     //   if ( has_post_thumbnail() ) : the_post_thumbnail(); 
     //   endif; 
      the_title(); ?>
    </h3>
  </div>
  <div class="panel-body">
    <?php the_excerpt(); ?>
  </div>
  <div class="panel-footer no-padding">
    <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
      <a href="#" class="btn btn-default" role="button">Left</a>
      <a href="#" class="btn btn-default" role="button">Middle</a>
      <a href="#" class="btn btn-default" role="button">Right</a>
    </div>
  </div>
</div>
</div>   
 <?php endwhile;
  echo '</div>';
endif;
wp_reset_postdata();

  ?>
    <div data-spy="affix" id="dot-nav">
      <ul>
        <li class="awesome-tooltip active" title="Home"><a href="#home"></a></li>
        <li class="awesome-tooltip" title="About"><a href="#about"></a></li>
        <li class="awesome-tooltip" title="Projects"><a href="#projects"></a></li>
        <li class="awesome-tooltip" title="Contact"><a href="#contact"></a></li>
      </ul>
  </div>
    
    <div id="main" class="container">
      <section id="home">
           <article>
               <div class="row">
                   <div class="col-md-12">
                    <h1>Home Section <small>Secondary text</small></h1>
                       <p>
                        This is a content.                                
                       </p>
                   </div>
               </div>
           </article>           
      </section>
        <section id="about">
           <article>
               <div class="row">
                   <div class="col-md-12">
                    <h1>About Section <small>Secondary text</small></h1>
                       <p>
                        This is a content.                                
                       </p>
                   </div>
               </div>
           </article>           
        </section>
        <section id="projects">
           <article>
               <div class="row">
                   <div class="col-md-12">
                    <h1>Projects Section <small>Secondary text</small></h1>
                       <p>
                        This is a content.                                
                       </p>
                   </div>
               </div>
           </article>           
        </section>
        <section id="contact">
           <article>
               <div class="row">
                   <div class="col-md-12">
                    <h1>Contact Section <small>Secondary text</small></h1>
                       <p>
                        This is a content.                                
                       </p>
                   </div>
               </div>
           </article>           
        </section>        
    </div>