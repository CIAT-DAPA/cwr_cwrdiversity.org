<?php
/*
  Template Name: Search Page
 */
?>

<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach ($query_args as $key => $string) {
    $query_split = explode("=", $string);
    $search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$array["tag"] = $search_query["tag"];
$array["author_name"] = $search_query["tag"];
$array["category_name"] = $search_query["tag"];

$search = new WP_Query($array);
$flag = false;
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php //get_search_form(); ?> <!--  Erase -->

<div id="articles">

    <h3> Results 
    <?php if ($search->have_posts()) { ?>
        <?php echo " for ".$search_query["query"]; ?>
    <?php } ?>
    </h3>
    <?php while ($search->have_posts()) : $search->the_post(); ?>
        <?php $flag = true; ?>
        <div class="article">
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <?php the_date(); ?>
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

            <?php the_excerpt(); ?>

            <div class="post-meta">
                <?php if ($wpzoom_homepost_cat == 'Show') { ?><span class="category"><?php the_category(', ') ?></span> <?php } ?>
                <?php if ($wpzoom_homepost_date == 'Show') { ?><span class="date"><?php the_time("$dateformat $timeformat"); ?></span> <?php } ?>
                <?php if ($wpzoom_homepost_comm == 'Show') { ?><span class="comments"><?php comments_popup_link(__('0 comments', 'wpzoom'), __('1 comment', 'wpzoom'), __('% comments', 'wpzoom')); ?></span><?php } ?>
                <?php edit_post_link(__('Edit', 'wpzoom'), '| ', ' '); ?>
            </div>
            <div style="clear:both;"></div>  
        </div>

    <?php endwhile;
    wp_reset_postdata(); ?>
    <?php
    if (!$flag) {
        echo "<b>No results</b>";
    }
    ?>
</div>

<?php get_footer(); ?>
