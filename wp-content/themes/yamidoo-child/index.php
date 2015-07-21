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

<!-- start temporal text -->
<!--<p style="color: red; font-weight: bold; text-align: center; font-size: 16px; margin-bottom: 20px">This page is currently under development and will be released shortly</p>-->
<!-- end temporal texto -->

<?php if ($paged < 2) { ?>

    <?php
    if ($wpzoom_slideshow_show == 'Yes') {
        /* Include wpzoom-featured.php file from yamidoo-child directory. */
        include(get_stylesheet_directory() . '/wpzoom-featured.php'); // calling Featured Slideshow
    }
//  Blocks are not used anymore.
//  if ($wpzoom_featured_category_show == 'Yes')
//  {
//     /* Include wpzoom-blocks.php file from yamidoo-child directory. */
//    include(get_stylesheet_directory() . '/wpzoom-blocks.php'); // calling categories boxes (4)
//  }
    ?>

<?php } // if pages=2  ?>

<?php wp_reset_query(); ?>

<?php get_sidebar(); ?>

<div id="articles">  <!-- shows latest articles -->
    <?php
    $z = count($wpzoom_exclude_cats_home);
    if ($z > 0) {
        $x = 0;
        $que = "";
        while ($x < $z) {
            $que .= "-" . $wpzoom_exclude_cats_home[$x];
            $x++;
            if ($x < $z) {
                $que .= ",";
            }
        }
    }
    // Featured Article
    $catid1 = $wpzoom_featured_category_1;
    $cat1 = get_category($catid1, false);
    $catlink1 = get_category_link($catid1);
    $breaking_cat1 = "cat=$catid1";

    query_posts('showposts=1&' . $breaking_cat1);
    //query_posts($query_string . "&cat=$que&showposts=4");

    if (have_posts()) :
        ?>

        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <h3>
                <p class='title'>
                    <?php /* _e('Featured Article', 'wpzoom'); */ the_title(); ?>
                </p>
            </h3>
            <?php echo "<div class='horizontal-article article'>"; ?>

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
                    <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $img ?>&amp;w=150&amp;h=85&amp;zc=1" alt="<?php the_title(); ?>" /></a><?php } ?>
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

        </div> <!-- end article -->

    <?php endwhile;
    wp_reset_query(); ?>		

<?php endif; ?>

<?php
// News Articles
$catid2 = $wpzoom_featured_category_2;
$cat2 = get_category($catid2, false);
$catlink2 = get_category_link($catid2);
$breaking_cat2 = "cat=$catid2";
query_posts('showposts=3&' . $breaking_cat2);
if (have_posts()) :
    ?>  
    <h3>
        <p class='title'><a href="<?php echo site_url(); ?>/category/news/"><?php _e('News', 'wpzoom'); ?></a></p>
        <a href="<?php
    if (strlen($wpzoom_misc_feedburner) < 10) {
        bloginfo('rss2_url');
    } else {
        echo"$wpzoom_misc_feedburner";
    }
    ?>" target="_BLANK" ><img src="<?php bloginfo('template_directory'); ?>/images/feed.png" alt="RSS" /></a>
    </h3>
    <?php
    while ($wp_query->have_posts()) : $wp_query->the_post();
        echo "<div class='vertical-article article'>";
        ?>
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

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
                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $img ?>&amp;w=150&amp;h=85&amp;zc=1" alt="<?php the_title(); ?>" /></a><?php } ?>
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

        </div> <!-- end NEWS article -->

    <?php endwhile;
    wp_reset_query(); ?>

    <!-- div class="navigation">
    <?php
    if (function_exists('wp_pagenavi')) {
        wp_pagenavi();
    } else {
        ?>
            <div class="floatleft"><?php next_posts_link(__('&laquo; Older Entries', 'wpzoom')); ?></div>
            <div class="floatright"><?php previous_posts_link(__('Newer Entries &raquo;', 'wpzoom')); ?></div>
    <?php } ?>
    </div --!>

<?php endif; ?>

</div><!-- end articles -->

<?php get_footer(); ?>
