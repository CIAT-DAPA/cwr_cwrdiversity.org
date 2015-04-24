<?php

define("INC", TEMPLATEPATH . "/functions");

require_once INC . "/wpzoom-functions.php";
require_once INC . "/wpzoom-video.php";
require_once INC . "/wpzoom-core.php";

// Register Footer widget area.
register_sidebar(
        array(
            'name' => __('FOOTER'),
            'id' => 'footer_bar',
            'description' => __('Build your footer area by placing widgets here.     '),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget' => '</div>'
        )
);

//Remove WordPress Version from the theme header and from the feed
function remove_wp_version() {
    return ''; //returns nothing, exactly the point.
}

add_filter('the_generator', 'remove_wp_version');

//We exclude the categorys -7 => slides and -8 => feature article to the feed list
function feedFilter($query) {
	if ($query->is_feed) {
		$query->set('cat', '-7,-8,-1');
	}
	return $query;
}
add_filter('pre_get_posts','feedFilter');

?>
