<?php
   /*
   Plugin Name: AJAX Post Search
   Plugin URI: http://www.vinojcardoza.com/blog/wp-plugin-ajax-search/
   Description: This plugin will allow your website visitors to search the posts of your site without page refresh
   Version: 1.5
   Author: Vinoj Cardoza
   Author URI: http://www.vinojcardoza.com
   License: GPL2
   */
?>
<?php 
wp_enqueue_script('dynamic-search-ajax-handle', plugin_dir_url(__FILE__). 'cardoza_ajax_search.js', array('jquery'));
wp_localize_script('dynamic-search-ajax-handle', 'the_ajax_script', array('ajaxurl' => admin_url('admin-ajax.php')));

add_action("plugins_loaded", "cardoza_ajax_search_init");
add_action('wp_ajax_the_search_text','the_search_function');
add_action('wp_ajax_nopriv_the_search_text','the_search_function');

function widget_cardoza_ajax_search($args){
	extract($args);
	
	echo $before_widget;

	echo $before_title;
	_e('Search');
	echo $after_title;
	
	echo '
	<form id="search_form">
	<input type="text" name="srch_txt" id="srch_txt" oninput="javascipt:do_search_js(document.getElementById(\'srch_txt\').value)" />
	<input name="action" type="hidden" value="the_search_text" />
	</form>';

	echo '<div id="search_result">';
        _e('Type your search in the search box.');
        echo '</div>';

	echo $after_widget;
	add_shortcode("cd_search", "widget_cardoza_ajax_search");
}

function the_search_function(){
	if(isset($_POST['srch_txt'])){
		$search_string = mysql_escape_string(htmlspecialchars(stripslashes($_POST['srch_txt'])));
                $search_string = str_ireplace("script", "blocked", $search_string);
                $search_string = mysql_real_escape_string($search_string);
		if(!empty($search_string)){
			global $wpdb;
			$search_result_posts = $wpdb->get_col("select ID from $wpdb->posts where post_title like '%".$search_string."%' AND post_status = 'publish'");
			if(sizeof($search_result_posts)!=0){
				$args = array('post__in'=>$search_result_posts);
				$res = new WP_Query($args);
				echo '<ul>';
				while ( $res->have_posts() ) : $res->the_post();?>
					<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
				<?php 
				endwhile;
				echo '</ul>';
			}
			else _e("No posts found for your search");
		}
		else _e("Type your search in the search box.");
		
	wp_reset_query();
	die();
	}
}

function cardoza_ajax_search_init(){
    load_plugin_textdomain('cardozaajaxsearch', false, dirname( plugin_basename(__FILE__)).'/languages');
    register_sidebar_widget(__('AJAX Post Search'), 'widget_cardoza_ajax_search');
}
?>
