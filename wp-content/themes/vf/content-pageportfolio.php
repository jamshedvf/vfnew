<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<div class="portfolio">
      <div class="portfolio-slider-area">
        <div class="portfolio-slider-top">
          <p> Co-Create Your Dream <b>Web</b> and <b>Mobile</b> Applications With <b>Virtual Force </b><br>
          </p>
          <span>Unique <span>Designs</span>, Quality <span>Code</span>, Quick Delivery, <span>24/7 </span>Communication</span> </div>
        
        
        <div class="portfolio-slider">
          <button class="pf-slider-next"> </button>
          <div class="pf-slide-images">
            <ul>
           
            <?php

// The Query
$query = new WP_Query( 'post_type=portfolio_slider');

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	 $sliders = get_group('slider');
	// var_dump($sliders);
	// echo "a";
       foreach($sliders as $slider){
		    $sliderlink= $slider['slider_link'][1];
          
     $sliderimage=$slider['slider_image'][1]['original'];
		?>
              <li> <a href="<?php echo $sliderlink;?>"><img src="<?php echo $sliderimage;?>" alt="slider-img-1"></a></li>
     <?php 
       }
    
		?>
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
          <button class="pf-slider-back"> </button>
        </div>
      </div>
      <div class="content-saparator-line"> <img src="<?php echo get_template_directory_uri(); ?>/images/saprator-circle.jpg" width="27" height="13"> </div>
      
      <div class="portfolio-images-container">
        <h1> Portfolio </h1>
        <nav id="filter"> </nav>
        <section id="container">
          <ul id="stage">
          
           <?php

// The Query
$query = new WP_Query( array('post_type'=>'portfolio', 'order'=>'DESC', 'posts_per_page'=>'-1'));

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	$term_list = wp_get_post_terms($post->ID, 'language', array("fields" => "names"));
	$totalsize=sizeof($term_list);
     //print_r($term_list);
	//var_dump($query);

?>		      
     <li data-tags="<?php 
	 for($tl=0;$tl<sizeof($term_list);$tl++)
	 {
	if(sizeof($term_list)>0 && $tl<$totalsize-1)
	{
		echo $term_list[$tl].',';
	}
	else{
		echo $term_list[$tl];
		}	 
		 }
	 ?>
     
     ">
              <div class="pf-img"> <img src="<?php echo $url; ?>" alt="img">
                <div class="detail-icon"> <a href="<?php echo the_permalink();?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/detail-icon.png" alt="detail"> </a></div>
              </div>
              <div class="pf-img-detail"> <span><?php echo get_the_title();?></span>
                <p>
				<?php 				
				$my_list = get('portfolio_info_programming');
				$totachkbox=sizeof($my_list);
				$tcb=0;
				//echo $totachkbox;
				foreach($my_list as $element){
					$tcb++;
					if($tcb==$totachkbox){
						echo $element;
						}
					else{	
					echo   $element. ', ';
					}
				}?> 
                 </p>
              </div>
            </li>          
  <?php
	
	}
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>                  
 
           
          </ul>
        </section>
      </div>
    </div>
 
	
