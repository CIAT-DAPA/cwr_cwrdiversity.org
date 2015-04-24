	<div class="clear"></div>
	<div class="hr"></div>
      
	<div id="columns">
        
        <?php 
			$catid1 = $wpzoom_featured_category_1;
            $catid2 = $wpzoom_featured_category_2;
            $catid3 = $wpzoom_featured_category_3;
            $catid4 = $wpzoom_featured_category_4;
            
            $cat1 = get_category($catid1,false);
            $cat2 = get_category($catid2,false);
            $cat3 = get_category($catid3,false);
            $cat4 = get_category($catid4,false);
            
            $catlink1 = get_category_link($catid1);
            $catlink2 = get_category_link($catid2);
            $catlink3 = get_category_link($catid3);
            $catlink4 = get_category_link($catid4);
            
            $breaking_cat1 = "cat=$catid1";
            $breaking_cat2 = "cat=$catid2";
            $breaking_cat3 = "cat=$catid3";
            $breaking_cat4 = "cat=$catid4";
         ?>
        
        <div class="column">
			<?php 			
			query_posts('showposts=1&' . $breaking_cat1 );
				 while (have_posts()) : the_post(); ?>
			
			  <h4><?php echo"<a href=\"$catlink1\">$cat1->name</a>";?></h4>
			 
				<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
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
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $img ?>&amp;w=190&amp;h=115&amp;zc=1" alt="<?php the_title(); ?>" /></a><?php } ?>
 			  
			  <?php the_excerpt(); ?>
				
			  <div class="column_count"><a href="<?php the_permalink() ?>/#comments" title="Jump to the comments"><?php comments_number('0','1','%'); ?></a></div>
			  <div class="column_date"><?php the_time('M j, Y G:i'); ?></div>
			  <?php endwhile; ?>   
			  
		</div>  
		
		
        
        <div class="column">
			<?php 			
			query_posts('showposts=1&' . $breaking_cat2 );
				 while (have_posts()) : the_post(); ?>
			 
			  <h4><?php echo"<a href=\"$catlink2\">$cat2->name</a>";?></h4>
			  
			  <h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
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
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $img ?>&amp;w=190&amp;h=115&amp;zc=1" alt="<?php the_title(); ?>" /></a><?php } ?>
 
			  <?php the_excerpt(); ?>
				
			  <div class="column_count"><a href="<?php the_permalink() ?>/#comments" title="Jump to the comments"><?php comments_number('0','1','%'); ?></a></div>
			  <div class="column_date"><?php the_time('M j, Y G:i'); ?></div>
			  <?php endwhile; ?>   
		</div> 
  
  
        <div class="column">
			<?php 			
			query_posts('showposts=1&' . $breaking_cat3 );
				 while (have_posts()) : the_post(); ?>
			 
			  <h4><?php echo"<a href=\"$catlink3\">$cat3->name</a>";?></h4>
			  
			  <h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
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
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $img ?>&amp;w=190&amp;h=115&amp;zc=1" alt="<?php the_title(); ?>" /></a><?php } ?>
 
			  <?php the_excerpt(); ?>
				
			  <div class="column_count"><a href="<?php the_permalink() ?>/#comments" title="Jump to the comments"><?php comments_number('0','1','%'); ?></a></div>
			  <div class="column_date"><?php the_time('M j, Y G:i'); ?></div>
			  <?php endwhile; ?>   
		</div> 


        <div class="column_last">
 			<?php 			
			query_posts('showposts=1&' . $breaking_cat4 );
				 while (have_posts()) : the_post(); ?>
			
			  <h4><?php echo"<a href=\"$catlink4\">$cat4->name</a>";?></h4>
			 
			  <h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
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
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $img ?>&amp;w=190&amp;h=115&amp;zc=1" alt="<?php the_title(); ?>" /></a><?php } ?>
 
			  <?php the_excerpt(); ?>
				
			  <div class="column_count"><a href="<?php the_permalink() ?>/#comments" title="Jump to the comments"><?php comments_number('0','1','%'); ?></a></div>
			  <div class="column_date"><?php the_time('M j, Y G:i'); ?></div>
			 <?php endwhile; ?> 
		</div>  
        
       
     </div> <!-- end columns -->
      
     <?php wp_reset_query(); ?>	