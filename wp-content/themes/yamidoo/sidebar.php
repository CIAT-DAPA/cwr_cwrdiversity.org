<?php
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
 
  	<div id="sidebar">
  	
		<?php if (strlen($wpzoom_ad_side_imgpath) > 1 && $wpzoom_ad_side_select == 'Yes'  && $wpzoom_ad_side_pos == 'Before') {?>
			<div id="ads" class="widget"><?php echo stripslashes($wpzoom_ad_side_imgpath); ?></div>
		<?php } ?>
		
		<?php 
 		if ($wpzoom_sidebar_thumb_show == 'Yes')
		{ 
 		// Here stars the part that shows a thumb and related post to individual articles/pages
	    
				if ( is_single() || is_page()) :
			
				   unset($img); 
					if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail() ) {
					$thumbURL = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
					$img = $thumbURL[0];  }
					else { 
						unset($img);
						if ($wpzoom_cf_use == 'Yes')  { $img = get_post_meta($post->ID, $wpzoom_cf_photo, true); }
					else {  
						if (!$img)  {  $img = catch_that_image($post->ID);  } }
					}
					if ($img) { $img = wpzoom_wpmu($img); ?>
					<img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $img ?>&amp;w=310&amp;h=225&amp;zc=1" alt="<?php the_title(); ?>" /><br/><br/><?php } ?>
	
 
			<?php endif ; } ?>
			
			<?php 
				if ( is_single() ) : ?>
				
			<div class="widget">
				<h3><?php _e('Related Posts', 'wpzoom');?></h3>
				<?php wp_related_posts(); ?>
			</div>
        
		<?php endif ; ?>
		<!-- end  -->
 		
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
		<?php endif; ?>
 
      
		<div id="sidebar_left">        
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar (half left)') ) : ?>
			<?php endif; ?>
		</div>
	  
	  
		<div id="sidebar_right">        
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar (half right)') ) : ?>
			<?php endif; ?>
		</div>
 
		
		<?php if (strlen($wpzoom_ad_side_imgpath) > 1 && $wpzoom_ad_side_select == 'Yes'  && $wpzoom_ad_side_pos == 'After') {?>
			<div id="ads" class="widget"><?php echo stripslashes($wpzoom_ad_side_imgpath); ?></div>
		<?php } ?>
		
   </div> <!-- end sidebar -->
