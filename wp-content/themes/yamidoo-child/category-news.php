<?php
global $options;
foreach ($options as $value) {
  if (isset($value['id'])) {
    if (get_settings($value['id']) === FALSE) {
        $$value['id'] = $value['std'];
    } else {
        $$value['id'] = get_settings($value['id']);
    }
  }
}
$dateformat = get_option('date_format');
$timeformat = get_option('time_format');
?>
<?php get_header(); ?>

<?php get_sidebar(); ?>
<?php require_once("functions/prebreeding_functions.php"); ?>

<div id="articles">

    <?php if (have_posts())
        the_post(); ?>

    <h3>			
        <?php single_cat_title(); ?>
    </h3>

    <?php rewind_posts(); ?>
    <?php while (have_posts()) : the_post(); ?>

        <div class="article">

            <?php
            $file_url = get_post_meta(get_the_ID(), "cwr_attached_file");
            if (empty($file_url)) {
                ?>

                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <?php the_date(); ?>
                <?php if ($wpzoom_homepost_thumb == 'Show') { ?>
                    <?php
                    unset($img);
                    if (current_theme_supports('post-thumbnails') && has_post_thumbnail()) {
                        $thumbURL = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '');
                        $img = $thumbURL[0];
                    } else {
                        unset($img);
                        if ($wpzoom_cf_use == 'Yes') {
                            $img = get_post_meta($post->ID, $wpzoom_cf_photo, true);
                        } else {
                            if (!$img) {
                                $img = catch_that_image($post->ID);
                            }
                        }
                    }
                    if ($img) {
                        $img = wpzoom_wpmu($img);
                        ?>
                        <div class="thumb"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $img ?>&amp;w=190&amp;h=115&amp;zc=1" alt="<?php the_title(); ?>" /></a> </div><?php } ?>
                <?php } ?>

                <?php
                if ($wpzoom_homepost_type == 'Post Excerpts') {
                    the_excerpt();
                }
                ?>
                <?php
                if ($wpzoom_homepost_type == 'Full Content') {
                    the_content();
                }
                ?>

                <div class="post-meta">
                    <?php if ($wpzoom_homepost_cat == 'Show') { ?><span class="category"><?php the_category(', ') ?></span> <?php } ?>
                    <?php if ($wpzoom_homepost_date == 'Show') { ?><span class="date"><?php the_time("$dateformat $timeformat"); ?></span> <?php } ?>
                    <?php if ($wpzoom_homepost_comm == 'Show') { ?><span class="comments"><?php comments_popup_link(__('0 comments', 'wpzoom'), __('1 comment', 'wpzoom'), __('% comments', 'wpzoom')); ?></span><?php } ?>
                    <?php edit_post_link(__('Edit', 'wpzoom'), '| ', ' '); ?>
                </div>

                <div style="clear:both;"></div>

            <?php } else { ?>
                <h2><a href="<?php echo $file_url[0]; ?>" rel="bookmark" target="_BLANK" ><?php the_title(); ?></a></h2>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/file.png">
                <div class="thumb"><a href="<?php echo $file_url[0]; ?>"  target="_BLANK">
                        <?php the_display_image($file_url); ?>
                    </a></div>
                <?php the_content(); ?>
                <div class="post-meta">
                    <?php if ($wpzoom_homepost_cat == 'Show') { ?><span class="category"><?php the_category(', ') ?></span> <?php } ?>
                    <?php if ($wpzoom_homepost_date == 'Show') { ?><span class="date"><?php the_time("$dateformat $timeformat"); ?></span> <?php } ?>
                    <?php if ($wpzoom_homepost_comm == 'Show') { ?><span class="comments"><?php comments_popup_link(__('0 comments', 'wpzoom'), __('1 comment', 'wpzoom'), __('% comments', 'wpzoom')); ?></span><?php } ?>
                    <?php edit_post_link(__('Edit', 'wpzoom'), '| ', ' '); ?>
                </div>

                <div style="clear:both;"></div>
            <?php } ?>

        </div> <!-- end article -->

    <?php endwhile;
    wp_reset_query(); ?>	

    <div class="navigation">
        <?php
        if (function_exists('wp_pagenavi')) {
            wp_pagenavi();
        } else {
            ?>
            <div class="floatleft"><?php next_posts_link(__('&laquo; Older Entries', 'wpzoom')); ?></div>
            <div class="floatright"><?php previous_posts_link(__('Newer Entries &raquo;', 'wpzoom')); ?></div>
        <?php } ?>
    </div>

</div>

<?php get_footer(); ?>
