<?php
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
	
<?php get_header(); ?>
<?php get_sidebar(); ?>
   <div class="post">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
	 
             	 
			<h1><?php the_title(); ?></h1>
    		<small>  <?php edit_post_link( __('Edit', 'wpzoom'), ' ', ''); ?></small>
			<?php the_content(); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	 

	 
 </div>
 
	<?php endwhile; else: ?>

	<p><?php _e('Sorry, no posts matched your criteria', 'wpzoom');?></p>

<?php endif; ?>
</div>
<?php get_footer(); ?> 