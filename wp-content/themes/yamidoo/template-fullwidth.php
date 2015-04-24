<?php
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
	
<?php
/*
Template Name: Full Width
*/
?>

<?php get_header(); ?>
   <div class="post" id="fullwidth">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		   	 
			<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
    		<small>  <?php edit_post_link( __('Edit', 'wpzoom'), '  ', ''); ?></small>
			<?php the_content(); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
 
 
	<?php endwhile; else: ?>

	<p><?php _e('Sorry, no posts matched your criteria.', 'wpzoom');?></p>

<?php endif; ?>
</div>
 
<?php get_footer(); ?> 