<?php
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php if ($wpzoom_seo_enable == 'Enable') { wpzoom_titles(); } else { ?> <?php bloginfo('name'); wp_title('-'); } ?></title>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if ($wpzoom_seo_enable == 'Enable') { 
if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
<?php meta_post_keywords(); ?>
<?php endwhile; endif; elseif(is_home()) : ?>
<meta name="description" content="<?php if (strlen($wpzoom_meta_desc) < 1) { bloginfo('description');} else {echo"$wpzoom_meta_desc";}?>" />
<?php meta_home_keywords(); ?>
<?php endif; ?>
<?php wpzoom_index(); ?>
<?php wpzoom_canonical(); } ?>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php wpzoom_rss(); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/dropdown.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/custom.css" type="text/css" media="screen" />
<?php if (strlen($wpzoom_misc_favicon) > 1 ) { ?><link rel="shortcut icon" href="<?php echo "$wpzoom_misc_favicon";?>" type="image/x-icon" /><?php } ?>
<?php if ($wpzoom_sidebar == 'Left') { ?><style type="text/css">#sidebar { float:left; margin-right:20px;} </style> <?php } ?>
<?php remove_action('wp_print_styles', 'pagenavi_stylesheets'); ?>	
<?php wp_enqueue_script('jquery');  ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php if (is_home() && $paged < 2) { wpzoom_js( "slider"); }?> 
 
<?php wp_head(); ?>
<?php wpzoom_js("tabs", "dropdown"); ?>

</head>


<body <?php body_class(); ?>>
	
<div id="page-wrap">
    
	<div id="header">
	
 		<!-- Logo -->
		<div id="logo">
			<a href="<?php echo get_option('home'); ?>/"><?php if ($wpzoom_misc_logo_path) { ?><img src="<?php echo "$wpzoom_misc_logo_path";?>" alt="<?php bloginfo('name'); ?>" /><?php } else { ?><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /><?php } ?></a>
		</div>
		
		<div id="righthead">
	
			<!-- 468x60 banner code -->
			<div class="banner banner-head">&nbsp;  
				<?php if (strlen($wpzoom_ad_head_imgpath) > 1 && $wpzoom_ad_head_select == 'Yes') {?>
					 <?php if (strlen($wpzoom_ad_head_imgpath) > 1) { echo stripslashes($wpzoom_ad_head_imgpath); }?> 
				<?php } ?>
			</div>
			
	 
			<!-- Search Form -->
			<div id="search">
			  <?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</div>
		
		</div> 
		
	</div> <!-- end header -->
		
 
	<div id="main-wrap">
	
		<div id="nav" class="dropdown">
			
			<?php wp_nav_menu( array('container' => '', 'container_class' => '', 'menu_class' => '', 'sort_column' => 'menu_order', 'theme_location' => 'secondary' ) ); ?>
  			<a href="<?php if (strlen($wpzoom_misc_feedburner) < 10) { bloginfo('rss2_url');} else {echo"$wpzoom_misc_feedburner";} ?>"><img src="<?php bloginfo('template_directory'); ?>/images/feed.png" alt="RSS" /></a>
  			<?php if (strlen($wpzoom_twitter) > 1 && $wpzoom_twitter_head == 'Yes') { ?><a href="http://twitter.com/<?php echo $wpzoom_twitter; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="Twitter" /></a><?php }?>
			
 		</div> <!-- end pages menu -->
      
    
		<div id="menu" class="dropdown">
		
			<?php wp_nav_menu( array('container' => '', 'container_class' => '', 'menu_class' => '', 'sort_column' => 'menu_order', 'theme_location' => 'primary' ) ); ?>	
		
		</div> <!-- end categ -->
       
      
	<div id="content-wrap">