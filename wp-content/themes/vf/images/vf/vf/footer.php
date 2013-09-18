<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	
<div class="footer-wrapper">
  <footer>
    <div class="popular-posts">
      <div class="heading">POPULAR POST</div>
      <ul>
     <?php

// The Query
$query = new WP_Query( array('post_type'=>'post', 'cat'=>'ASC', 'posts_per_page'=>'3','featured'=>'yes'));

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	

?>		
        <li>
          <p><?php echo get_the_title();?></p>
          <span><?php echo get_the_date(); ?></span> </li>
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
    <?php

// The Query
$query = new WP_Query( 'post_type=theme_setting');

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	 $raquote = get_group('request_a_quote');
       foreach($raquote as $quote){
		    $title = $quote['request_a_quote_title'][1];
          
          $detailtext=$quote['request_a_quote_request_a_quote'][1];
		  $buttontext=$quote['request_a_quote_button_text'][1];
		  $buttonlink=$quote['request_a_quote_button_link'][1];
		?>
    <div class="request-a-quote">
      <div class="heading"><?php echo $title; ?></div>
      <p><?php echo $detailtext;?></p>
      <div class="btn-blue"><a href="<?php echo $buttonlink; ?>"><?php echo $buttontext;?></a></div>
    </div>
    <?php 
       }
    
		?>
           
    <div class="get-in-toch">
      <div class="heading">GET IN TOUCH</div>
      <ul>
      <?php 
	   $getintouch = get_group('get_in_touch');
       foreach($getintouch as $gettouch){
		  $address = $gettouch['get_in_touch_address'][1];
          $phone = $gettouch['get_in_touch_phone'][1];
		   
		  $email = $gettouch['get_in_touch_email'][1];
		  $emaillink = $gettouch['get_in_touch_email_link'][1];
	  
	  ?>
        <li class="address"><span>Address:</span> <?php echo $address;?></li>
        <li class="phone"><span>Phone:</span> <?php echo $phone;?></li>
        <li class="email"> <span>Email: </span><?php echo $email; ?> </li>
        <?php }?>
      </ul>
    </div>
<?php 
  
	}
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>    
  </footer>
</div>


<?php wp_footer(); ?>
</body>
</html>