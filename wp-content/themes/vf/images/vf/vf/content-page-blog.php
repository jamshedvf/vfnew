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
   <div class="inner-left-side-content">
        <?php query_posts('post_type=post&cat=3&post_status=publish&posts_per_page=6&paged='. get_query_var('paged')); ?>

	<?php if( have_posts() ): ?>
     <div class="navigation">
			       <p class="older"><?php next_posts_link(__('&larr; Older posts','example')) ?></p>
                   <p class="newer"><?php previous_posts_link(__('Newer posts &rarr;','example')) ?></p> 
                   
		</div><!-- /.navigation -->
         <ul>
        <?php while( have_posts() ): the_post(); ?>

	   <li class="blogpost">
        <div id="post" <?php post_class(); ?>>
         <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         <div class="postby"><span>Posted on </span><?php echo get_the_date();?><span> By </span><?php the_author();?></div>

        	<div class="postpicture"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(200,220) ); ?></a></div>
<div class="posttext">
                          
		<?php the_excerpt(__('Continue reading »','example')); ?></div>

            </div><!-- /#post-<?php get_the_ID(); ?> -->
        </li>

        <?php endwhile; ?>
      </ul>
		

	<?php else: ?>

		<div id="post-404" class="noposts">

		    <p><?php _e('None found.','example'); ?></p>

	    </div><!-- /#post-404 -->

	<?php endif; wp_reset_query(); ?>
    


   </div> 
   <div class="inner-right-side-content-blog">
   <?php dynamic_sidebar( 'sidebar-1' ); ?>
   </div>
  </div>
	
