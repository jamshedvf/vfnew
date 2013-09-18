<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
 <h1><?php the_title(); ?></h1>
 
 		
  <div class="inner-content-area">

    <div class="inner-tab-content">
<div class="tab-content" id="tabs1">
<div class="services-web-content">
<div class="services-mobile-content-ror">
    <?php echo get_the_content(); ?>
</div>
</div>
</div>
<div class="tab-content" id="tabs2">
<div class="job-opnings">
<div id="accordion">
 <?php

// The Query
$query = new WP_Query( array('post_type'=>'jobs', 'order'=>'DESC', 'posts_per_page'=>'-1'));

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	

?>		      
  <h3><?php echo get_the_title();?>  </h3>
<div>
<?php echo get_the_content();?>  
</div>
        
  <?php
	
	}
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>                  
 
           
          </div>
</div>
</div>
<div class="tab-content" id="tabs3">
<div class="virtual-team-content">
<?php echo do_shortcode('[contact-form-7 id="252" title="How to Apply"]');?>

</div>
</div>

</div>
<div class="inner-tab-menu">
<ul class="tabs">
	<li><a class="defaulttab" href="#careers" rel="tabs1">Careers<div class="arrow"></div></a>
</li>
	<li><a href="#jobs" rel="tabs2">Job openings<div class="arrow"></div></a>
</li>
	<li><a href="#howtoapply" rel="tabs3">How to Apply<div class="arrow"></div></a>
</li>
</ul>
</div>
    
  </div>
