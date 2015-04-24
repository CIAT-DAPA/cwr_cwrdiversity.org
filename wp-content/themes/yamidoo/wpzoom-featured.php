<div id="feature">

	<?php 
		$catid5 = $wpzoom_featured_category_5;
		$cat5 = get_category($catid5,false);
		$catlink5 = get_category_link($catid5);
		$breaking_cat5 = "cat=$catid5";
	?>
        
        
 <!-- tab panes -->
<div id="panes">
	
	<?php $headline = new WP_Query('showposts=4&' . $breaking_cat5 ); while($headline->have_posts()) : $headline->the_post();  
		unset($videocode);
		$videocode = get_post_meta($post->ID, 'wpzoom_post_embed_code', true);?>
		
		<?php if($wpzoom_autoembed == "Yes") { $AE = new AutoEmbed(); } // loading the AutoEmbed PHP Class ?>

 	<div>

		<?php if (strlen($videocode) > 1 && $wpzoom_autoembed == "Yes") {
 		if ($videocode && $AE->parseUrl($videocode)) {
			$AE->setParam('wmode','transparent');
			$AE->setParam('autoplay','false');
			$AE->setHeight(280);
			$AE->setWidth(480);

			?><span class="cover"><?php echo $AE->getEmbedCode(); ?></span><?php 
			}
		
		}
 			elseif (strlen($videocode) > 1 && $wpzoom_autoembed == "No") { 
 			
 				$videocode = preg_replace("/(width\s*=\s*[\"\'])[0-9]+([\"\'])/i", "$1 480 $2", $videocode);
				$videocode = preg_replace("/(height\s*=\s*[\"\'])[0-9]+([\"\'])/i", "$1 280 $2", $videocode);
				$videocode = str_replace("<embed","<param name='wmode' value='transparent'></param><embed",$videocode);
				$videocode = str_replace("<embed","<embed wmode='transparent' ",$videocode);
									
				?><span class="cover"><?php echo "$videocode"; ?></span><?php 
			}
 
 			if (!$videocode) {
            ?>
				
 		<span class="overlay"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></span>
		
 		<?php unset($img); 
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
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $img ?>&amp;w=480&amp;h=280&amp;zc=1" alt="<?php the_title(); ?>" /></a><?php } else { echo"<img src=\""; bloginfo('template_directory'); echo"/images/blank.jpg\" />"; } 
			} // if a video does not exist ?>
			
 		<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		<ul class="meta-feature"><li><?php the_time("$dateformat $timeformat"); ?></li> <li>| <?php comments_popup_link( __('0 comments', 'wpzoom'), __('1 comment', 'wpzoom'), __('% comments', 'wpzoom')); ?></li>  <?php edit_post_link( __('Edit', 'wpzoom'), ' <li>| ', '</li>'); ?></ul> 	
		<?php the_excerpt(); ?>
		
		<span class="more"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php _e('read more', 'wpzoom');?></a></span>
 
	</div>
 <?php endwhile; ?>

</div>

<br clear="all" />


<!-- navigator -->
<div id="navi">
	<ul>
	
		<?php $teaser_small = new WP_Query('showposts=4&' . $breaking_cat5 ); while($teaser_small->have_posts()) : $teaser_small->the_post(); ?>
 	
 		<li>
			<?php unset($img); 
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
			<a href="#"><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $img ?>&amp;w=90&amp;h=60&amp;zc=1" alt="<?php the_title(); ?>" /></a><?php } else { echo"<a href=\"#\"><img src=\""; bloginfo('template_directory'); echo"/images/blank2.jpg\" /></a>"; } ?>	
		</li>
		
		<?php endwhile; wp_reset_query(); ?>
		
	</ul>
</div>
 
</div>