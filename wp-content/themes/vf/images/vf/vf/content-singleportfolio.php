<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
 <h1><?php echo get_the_title();?></h1>
  <div class="inner-content-area">
    <div class="portfolio-detail-page">
<div class="portfolio-detail-slider">


        <button class="pf-detail-slider-back"> </button>
        <div class="pf-detail-slider">
          <ul>
          <?php $sliders = get_group('portfolio_images');
//var_dump($sliders);
        foreach($sliders as $slider){
	     
        $sliderimage=$slider['portfolio_images_image'][1]['original'];
?>
          
            <li><img src="<?php echo $sliderimage;?>" alt="img"></li>
            <?php }?>
            
            
          </ul>
        </div>
        <button class="pf-detail-slider-next"> </button>
      </div>
      <div class="portfolio-detail-content">
        <h2>Project Details</h2>
        <p><?php echo get_the_content();?> </p>
        <ul>
          <li> <b>Date :</b> <?php $projectdate= get_post_meta( get_the_ID(), 'portfolio_info_date', true );
		  
		  $date = new DateTime($projectdate);
          echo $date->format('d M-y');
		  
		  ?></li>
          <li> <b> Categories :</b> 
          <?php $term_list = wp_get_post_terms($post->ID, 'portfolio_category', array("fields" => "names"));?>
          <?php 
	$totalsize=sizeof($term_list);	  
	 for($tl=0;$tl<sizeof($term_list);$tl++)
	 {
	if(sizeof($term_list)>0 && $tl<$totalsize-1)
	{
		echo $term_list[$tl].', ';
	}
	else{
		echo $term_list[$tl];
		}	 
		 }
	 ?>
          
           </li>
          <li><b> Client :</b> <?php echo get_post_meta( get_the_ID(), 'portfolio_info_client', true );?> </li>
          <li><b> Programing :</b> 
          <?php 				
				$my_list = get('portfolio_info_programming');
				$totachkbox=sizeof($my_list);
				$tcb=0;
				//echo $totachkbox;
				foreach($my_list as $element){
					$tcb++;
					if($tcb==$totachkbox){
						echo   $element;
						}
					else{	
					echo   $element. ', ';
					}
				}?> 
          
          
           </li>
          <li><b> URL :</b><a href="#"> www.testiphoneapp.com</a></li>
        </ul>
        <div class="back-to-pf-page"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=8"> BACK TO PORTFOLIO</a> </div>
      </div>
  </div>
  </div>

     
