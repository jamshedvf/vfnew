<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div class="content-wrapper homewrapper">
    <?php

// The Query
$query = new WP_Query( array('post_type'=>'our_services', 'order'=>'ASC'));

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

?>		
<div class="services-box"> <img src="<?php echo $url; ?>" alt="<?php echo get_the_title();?>" width="200" height="200" >
 <span><?php echo get_the_title();?></span>
    <P><?php echo get_the_content();?></P>
  </div>
		
<?php
	}
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>
<div class="content-saparator-line"> 
<img src="<?php echo get_template_directory_uri(); ?>/images/saprator-circle.jpg" width="27" height="13"> </div>
  <div class="about-block">
    <h2>About</h2>
    <div class="about-tab-menu">
      <ul class="tabs">
       <?php

// The Query
$query = new WP_Query( array('post_type'=>'about_tabs', 'order'=>'ASC'));

// The Loop
if ( $query->have_posts() ) {
	$i=1;
	while ( $query->have_posts() ) {
		$query->the_post();
	

?>		
        <li><a href="#.<?php echo get_the_title(); ?>" class="
        <?php 
		if($i==1){
		echo "defaulttab";
		}
		?>
       
        " rel="tabs<?php echo $i; ?>"><?php echo get_the_title(); ?></a></li>
        
        <?php
	$i++;	
	}
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>
      </ul>
    </div>
 <?php

// The Query
$query = new WP_Query( array('post_type'=>'about_tabs', 'order'=>'ASC'));

// The Loop
if ( $query->have_posts() ) {
	$i=1;
	while ( $query->have_posts() ) {
		$query->the_post();
	

?>		   
    
    <div class="tab-content" id="tabs<?php echo $i; ?>">
      <div class="about-tab-content">
        <h3> <?php echo get_the_title(); ?></h3>
        <p> <?php echo get_the_content(); ?> </p>
      </div>
    </div>
  <?php
	$i++;	
	}
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>   
  </div>
  <div class="testimonials-block">
    <div class="top">
      <h2>Testimonials</h2>
      <div class="slide-btns">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=257">Read More
        </a>
      </div>
    </div>
    <div class="testimonials-slide-area slide-images">
      <ul>
        <li>
    <?php

// The Query
$query = new WP_Query( array('post_type'=>'testimonials', 'order'=>'DESC'));

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	

?>		      
          <div class="textimonials-content-box">
            <div class="testimonials-text">
              <p><?php echo get_the_content(); ?></p>
              <div class="arrow"></div>
            </div>
            <div class="name"> <span>  <?php echo get_the_title(); ?> </span> <?php echo get_post_meta( get_the_ID(), 'desgination', true );?>, <?php echo get_post_meta( get_the_ID(), 'company', true ); ?> </div>
          </div>
    <?php
	
	}
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>         
 </li>
      </ul>
    </div>
  </div>
  <div class="content-saparator-line"> <img src="<?php echo get_template_directory_uri(); ?>/images/saprator-circle.jpg" width="27" height="13"> </div>
  <div class="our-clients">
    <h2>Our Clients</h2>
    <div class="client-slider-small-media">
      <button class="next-client"> </button>
      <button class="prev-client"> </button>
    </div>
    <div class="clear"></div>
    <div class="main-client-slider">
      <button class="next-client"> </button>
      <div class="slide-images-2">
        <ul>
  <?php

// The Query
$query = new WP_Query( array('post_type'=>'our_clients', 'order'=>'DESC', 'posts_per_page'=>'-1'));

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

?>		      
          <li><img src="<?php echo $url; ?>" alt="img"></li>
          
  <?php
	
	}
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>                  
         
        </ul>
      </div>
      <button class="prev-client"> </button>
    </div>
  </div>
</div>
<?php get_footer(); ?>