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
<div class="contact-us-content">
<h2>Contact Us</h2>
<?php echo do_shortcode('[contact-form-7 id="162" title="Contact form 1"]');?>


</div>
</div>
<div class="tab-content" id="tabs2">
<?php echo get_the_content(); ?>
<?php echo do_shortcode('[contact-form-7 id="182" title="Request a Quote"]');?>
</div>
</div>
<div class="inner-tab-menu">
<ul class="tabs">
	<li><a class="defaulttab" href="#.WEB" rel="tabs1">CONTACT US<div class="arrow"></div></a>
</li>
	<li><a href="#.MOBILE" rel="tabs2">REQUEST FOR QUOTE<div class="arrow"></div></a>
</li>
</ul>
</div>
</div>