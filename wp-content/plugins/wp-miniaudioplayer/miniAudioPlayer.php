<?php
/*
Plugin Name: mb.miniAudioPlayer
Plugin URI: http://wordpress.org/extend/plugins/wp-miniaudioplayer/
Description: Transform your mp3 audio file link into a nice, small light player. ! IMPORTANT - if you customized the skin for the previous version you need to regenerate it from <a href="http://pupunzi.com/mb.components/mb.miniAudioPlayer/demo/skinMaker.html" target="_blank">here</a>.
Author: Pupunzi (Matteo Bicocchi)
Version: 1.6.7
Author URI: http://pupunzi.com
*/

define("MINIAUDIOPLAYER_VERSION", "1.6.7");
register_activation_hook( __FILE__, 'miniAudioPlayer_install' );

function miniAudioPlayer_install() {
// add and update our default options upon activation
    update_option('miniAudioPlayer_version', MINIAUDIOPLAYER_VERSION);
    add_option('miniAudioPlayer_donate','false');
    add_option('miniAudioPlayer_getMetadata','false');
    add_option('miniAudioPlayer_width','250');
    add_option('miniAudioPlayer_skin','black');
    add_option('miniAudioPlayer_animate','true');
    add_option('miniAudioPlayer_volume','.5');
    add_option('miniAudioPlayer_autoplay','false');
    add_option('miniAudioPlayer_showVolumeLevel','true');
    add_option('miniAudioPlayer_showTime','true');
    add_option('miniAudioPlayer_showRew','true');
    add_option('miniAudioPlayer_excluded','map_excluded');
    add_option('miniAudioPlayer_download','false');
    add_option('miniAudioPlayer_download_security','false');
    add_option('miniAudioPlayer_customizer','true');
    add_option('miniAudioPlayer_custom_skin_css', "

/*++++++++++++++++++++++++++++++++++++++++++++++++++
MAP custom skin: mySkin
http://pupunzi.com/mb.components/mb.miniAudioPlayer/demo/skinMaker.html

background: rgba(235, 21, 21, 1)
icons: rgba(255, 254, 250, 1)
border: rgba(235, 101, 110, 1)
borderLeft: rgba(230, 3, 3, 1)
borderRight: rgba(184, 14, 14, 1)
mute: rgba(255, 61, 61, 1)
download: rgba(212, 32, 38, 0.48)
downloadHover: rgba(255, 3, 3, 1)
++++++++++++++++++++++++++++++++++++++++++++++++++*/

/* Older browser (IE8) not supporting rgba() */
.mbMiniPlayer.mySkin.shadow table{box-shadow:0 0 3px #1c0606;}
.mbMiniPlayer.mySkin table span{background-color:#eb1515;}
.mbMiniPlayer.mySkin table span.map_play{border-left:1px solid #e60303;}
.mbMiniPlayer.mySkin table span.map_volume{border-right:1px solid #b80e0e;}
.mbMiniPlayer.mySkin table span.map_volume.mute{color: #ff3d3d;}
.mbMiniPlayer.mySkin .map_download{color: #d42026;}
.mbMiniPlayer.mySkin .map_download:hover{color: #ff0303;}
.mbMiniPlayer.mySkin table span{color: #fffefa;}
.mbMiniPlayer.mySkin table {border: 1px solid #eb656e !important;}

/*++++++++++++++++++++++++++++++++++++++++++++++++*/

.mbMiniPlayer.mySkin table{background-color:transparent;}
.mbMiniPlayer.mySkin.shadow table{box-shadow:0 0 3px rgba(28, 6, 6, 0.01);}
.mbMiniPlayer.mySkin table span{background-color:rgba(235, 21, 21, 1);}
.mbMiniPlayer.mySkin table span.map_play{border-left:1px solid rgba(230, 3, 3, 1);}
.mbMiniPlayer.mySkin table span.map_volume{border-right:1px solid rgba(184, 14, 14, 1);}
.mbMiniPlayer.mySkin table span.map_volume.mute{color: rgba(255, 61, 61, 1);}
.mbMiniPlayer.mySkin .map_download{color: rgba(212, 32, 38, 0.48);}
.mbMiniPlayer.mySkin .map_download:hover{color: rgba(255, 3, 3, 1);}
.mbMiniPlayer.mySkin table span{color: rgba(255, 254, 250, 1);text-shadow: 1px -1px 1px rgba(189, 11, 11, 1)!important;}
.mbMiniPlayer.mySkin table span{color: rgba(255, 254, 250, 1);}
.mbMiniPlayer.mySkin table {border: 1px solid rgba(235, 101, 110, 1) !important;}
.mbMiniPlayer.mySkin table span.map_title{color: #000; text-shadow:none!important}
/*++++++++++++++++++++++++++++++++++++++++++++++++*/

");
    add_option('miniAudioPlayer_custom_skin_name','mySkin');
    add_option('miniAudioPlayer_add_gradient','');
    add_option('miniAudioPlayer_active_all','true');
    add_option('miniAudioPlayer_replaceDefault','false');

}

$miniAudioPlayer_donate = get_option('miniAudioPlayer_donate');
$miniAudioPlayer_version = get_option('miniAudioPlayer_version');
$miniAudioPlayer_width = get_option('miniAudioPlayer_width');
$miniAudioPlayer_getMetadata = get_option('miniAudioPlayer_getMetadata');
$miniAudioPlayer_skin = get_option('miniAudioPlayer_skin');
$miniAudioPlayer_animate = get_option('miniAudioPlayer_animate');
$miniAudioPlayer_volume = get_option('miniAudioPlayer_volume');
$miniAudioPlayer_autoplay = get_option('miniAudioPlayer_autoplay');
$miniAudioPlayer_showVolumeLevel = get_option('miniAudioPlayer_showVolumeLevel');
$miniAudioPlayer_showTime = get_option('miniAudioPlayer_showTime');
$miniAudioPlayer_showRew = get_option('miniAudioPlayer_showRew');
$miniAudioPlayer_excluded = get_option('miniAudioPlayer_excluded');
$miniAudioPlayer_download = get_option('miniAudioPlayer_download');
$miniAudioPlayer_download_security = get_option('miniAudioPlayer_download_security');
$miniAudioPlayer_customizer = get_option('miniAudioPlayer_customizer');
$miniAudioPlayer_custom_skin_css = get_option('miniAudioPlayer_custom_skin_css');
$miniAudioPlayer_custom_skin_name = get_option('miniAudioPlayer_custom_skin_name');
$miniAudioPlayer_add_gradient = get_option('miniAudioPlayer_add_gradient');
$miniAudioPlayer_active_all = get_option('miniAudioPlayer_active_all');
$miniAudioPlayer_replaceDefault = get_option('miniAudioPlayer_replaceDefault');

//set up defaults if these fields are empty
if ($miniAudioPlayer_version != MINIAUDIOPLAYER_VERSION) {$miniAudioPlayer_version = MINIAUDIOPLAYER_VERSION;}
if (empty($miniAudioPlayer_donate)) {$miniAudioPlayer_donate = "false";}
if (empty($miniAudioPlayer_getMetadata)) {$miniAudioPlayer_getMetadata = "false";}
if (empty($miniAudioPlayer_width)) {$miniAudioPlayer_width = "250";}
if (empty($miniAudioPlayer_skin)) {$miniAudioPlayer_skin = "black";}
if (empty($miniAudioPlayer_animate)) {$miniAudioPlayer_animate = "false";}
if (empty($miniAudioPlayer_volume)) {$miniAudioPlayer_volume = ".5";}
if (empty($miniAudioPlayer_autoplay)) {$miniAudioPlayer_autoplay = "false";}
if (empty($miniAudioPlayer_showVolumeLevel)) {$miniAudioPlayer_showVolumeLevel = "false";}
if (empty($miniAudioPlayer_showTime)) {$miniAudioPlayer_showTime = "false";}
if (empty($miniAudioPlayer_showRew)) {$miniAudioPlayer_showRew = "false";}
if (empty($miniAudioPlayer_excluded)) {$miniAudioPlayer_excluded = "map_excluded";}
if (empty($miniAudioPlayer_download)) {$miniAudioPlayer_download = "false";}
if (empty($miniAudioPlayer_download_security)) {$miniAudioPlayer_download_security = "false";}
if (empty($miniAudioPlayer_customizer)) {$miniAudioPlayer_customizer = "false";}
if (empty($miniAudioPlayer_add_gradient)) {$miniAudioPlayer_add_gradient = "true";}
if (empty($miniAudioPlayer_custom_skin_name)) {$miniAudioPlayer_custom_skin_name = "mySkin";}
if (empty($miniAudioPlayer_active_all)) {$miniAudioPlayer_active_all = "true";}
if (empty($miniAudioPlayer_replaceDefault)) {$miniAudioPlayer_replaceDefault = "false";}
if (empty($miniAudioPlayer_custom_skin_css)) {$miniAudioPlayer_custom_skin_css = "

/*++++++++++++++++++++++++++++++++++++++++++++++++++
MAP custom skin: mySkin
http://pupunzi.com/mb.components/mb.miniAudioPlayer/demo/skinMaker.html

background: rgba(235, 21, 21, 1)
icons: rgba(255, 254, 250, 1)
border: rgba(235, 101, 110, 1)
borderLeft: rgba(230, 3, 3, 1)
borderRight: rgba(184, 14, 14, 1)
mute: rgba(255, 61, 61, 1)
download: rgba(212, 32, 38, 0.48)
downloadHover: rgba(255, 3, 3, 1)
++++++++++++++++++++++++++++++++++++++++++++++++++*/

/* Older browser (IE8) not supporting rgba() */
.mbMiniPlayer.mySkin.shadow table{box-shadow:0 0 3px #1c0606;}
.mbMiniPlayer.mySkin table span{background-color:#eb1515;}
.mbMiniPlayer.mySkin table span.map_play{border-left:1px solid #e60303;}
.mbMiniPlayer.mySkin table span.map_volume{border-right:1px solid #b80e0e;}
.mbMiniPlayer.mySkin table span.map_volume.mute{color: #ff3d3d;}
.mbMiniPlayer.mySkin .map_download{color: #d42026;}
.mbMiniPlayer.mySkin .map_download:hover{color: #ff0303;}
.mbMiniPlayer.mySkin table span{color: #fffefa;}
.mbMiniPlayer.mySkin table {border: 1px solid #eb656e !important;}

/*++++++++++++++++++++++++++++++++++++++++++++++++*/

.mbMiniPlayer.mySkin table{background-color:transparent;}
.mbMiniPlayer.mySkin.shadow table{box-shadow:0 0 3px rgba(28, 6, 6, 0.01);}
.mbMiniPlayer.mySkin table span{background-color:rgba(235, 21, 21, 1);}
.mbMiniPlayer.mySkin table span.map_play{border-left:1px solid rgba(230, 3, 3, 1);}
.mbMiniPlayer.mySkin table span.map_volume{border-right:1px solid rgba(184, 14, 14, 1);}
.mbMiniPlayer.mySkin table span.map_volume.mute{color: rgba(255, 61, 61, 1);}
.mbMiniPlayer.mySkin .map_download{color: rgba(212, 32, 38, 0.48);}
.mbMiniPlayer.mySkin .map_download:hover{color: rgba(255, 3, 3, 1);}
.mbMiniPlayer.mySkin table span{color: rgba(255, 254, 250, 1);text-shadow: 1px -1px 1px rgba(189, 11, 11, 1)!important;}
.mbMiniPlayer.mySkin table span{color: rgba(255, 254, 250, 1);}
.mbMiniPlayer.mySkin table {border: 1px solid rgba(235, 101, 110, 1) !important;}
.mbMiniPlayer.mySkin table span.map_title{color: #000; text-shadow:none!important}
/*++++++++++++++++++++++++++++++++++++++++++++++++*/

";

}

update_option('miniAudioPlayer_version', $miniAudioPlayer_version);


function miniAudioPlayer_action_links($links, $file) {
    static $this_plugin;

    if (!$this_plugin) {
        $this_plugin = plugin_basename(__FILE__);
    }

    // check to make sure we are on the correct plugin
    if ($file == $this_plugin) {
        // the anchor tag and href to the URL we want. For a "Settings" link, this needs to be the url of your settings page
        $settings_link = '<a href="' . get_bloginfo('wpurl') . '/wp-admin/options-general.php?page=wp-miniaudioplayer/miniAudioPlayer-admin.php">Settings</a>';
        // add the link to the list
        array_unshift($links, $settings_link);
    }

    return $links;
}

add_filter('plugin_action_links', 'miniAudioPlayer_action_links', 10, 2);

// scripts to go in the header and/or footer
function miniAudioPlayer_init() {
    global $miniAudioPlayer_version;

    load_plugin_textdomain('mbMiniAudioPlayer', false, basename( dirname( __FILE__ ) ) . '/languages/' );

    if(isset($_COOKIE['mapdonate']) && $_COOKIE['mapdonate'] === "true"){
        echo '
            <script type="text/javascript">
                expires = "; expires= -10000";
                document.cookie = "mapdonate=false" + expires + "; path=/";
            </script>
        ';

        update_option('miniAudioPlayer_donate', "true" );
    }

    if ( !is_admin()) {
        wp_enqueue_script('jquery');
        wp_enqueue_script('mb.miniPlayer', plugins_url( '/js/jQuery.mb.miniAudioPlayer.min.js', __FILE__ ), false, $miniAudioPlayer_version, false);
        wp_enqueue_script('map_overwrite_default_me', plugins_url( '/js/map_overwrite_default_me.js', __FILE__ ), false, $miniAudioPlayer_version, false);
        wp_enqueue_style('miniAudioPlayer', plugins_url( '/css/miniplayer.css', __FILE__ ), false, $miniAudioPlayer_version, 'screen');
    }
}
add_action('init', 'miniAudioPlayer_init');

function miniAudioPlayer_player_head() {
    global $miniAudioPlayer_getMetadata, $miniAudioPlayer_width,$miniAudioPlayer_skin, $miniAudioPlayer_animate,$miniAudioPlayer_volume,$miniAudioPlayer_autoplay,$miniAudioPlayer_showVolumeLevel,$miniAudioPlayer_showTime,$miniAudioPlayer_showRew, $miniAudioPlayer_active_all, $miniAudioPlayer_replaceDefault;

    echo '
	<!-- start miniAudioPlayer initializer -->
	<script type="text/javascript">

	miniAudioPlayer_replaceDefault = '.$miniAudioPlayer_replaceDefault.';

	var miniAudioPlayer_defaults = {
				inLine:true,
                width:"'.$miniAudioPlayer_width.'",
				skin:"'.$miniAudioPlayer_skin.'",
				animate:'.$miniAudioPlayer_animate.',
				volume:'.$miniAudioPlayer_volume.',
				autoplay:'.$miniAudioPlayer_autoplay.',
				showVolumeLevel:'.$miniAudioPlayer_showVolumeLevel.',
				showTime:'.$miniAudioPlayer_showTime.',
				id3:'.$miniAudioPlayer_getMetadata.',
				showRew:'.$miniAudioPlayer_showRew.',
				addShadow: false,
				downloadable:'.canDownload().',
				downloadPage:"'.plugins_url( 'map_download.php', __FILE__ ).'",
				swfPath:"'.plugins_url( '/js/', __FILE__ ).'",
				onReady: function(player, $controlsBox){
				   if(player.opt.downloadable && player.opt.downloadablesecurity && !'.userCanRead().'){
				        jQuery(".map_download", $controlsBox).remove();
				   }
				}
		};

    function initializeMiniAudioPlayer(){
         jQuery("a'. ($miniAudioPlayer_active_all != 'true' ? '.mb_map':'').'[href*=\'.mp3\'] ,a'.($miniAudioPlayer_active_all != 'true' ? '.mb_map':'').'[href*=\'.m4a\']")'.getExcluded().'mb_miniPlayer(miniAudioPlayer_defaults);
    }

	jQuery(function(){

        if('.$miniAudioPlayer_replaceDefault.')
        replaceDefault();

          initializeMiniAudioPlayer();
          jQuery(document).ajaxSuccess(function(event, xhr, settings) {
           	initializeMiniAudioPlayer();
          });
	});
	</script>
	<!-- end miniAudioPlayer initializer -->

	';
};

function maplayer_custom_css () {
    global $miniAudioPlayer_custom_skin_css;

    echo '
<!-- start miniAudioPlayer custom CSS -->

<style id="map_custom_css">
       '.$miniAudioPlayer_custom_skin_css.'
</style>
	
<!-- end miniAudioPlayer custom CSS -->
	
';

};

add_action( 'wp_head', 'maplayer_custom_css' );
add_action('wp_footer', 'miniAudioPlayer_player_head',20);
add_action('admin_init', 'setup_maplayer_button');

function getExcluded(){
    global $miniAudioPlayer_excluded;
    if(!empty($miniAudioPlayer_excluded)){
        return '.not(".'.$miniAudioPlayer_excluded.'").not(".wp-playlist-caption").';
    }else{
        return '.';
    }
}

function canDownload(){
    global $miniAudioPlayer_download, $miniAudioPlayer_download_security;
    if( ($miniAudioPlayer_download == "true" && $miniAudioPlayer_download_security=="false")
        || ($miniAudioPlayer_download == "true" && ($miniAudioPlayer_download_security == "true" && current_user_can('read') == 1)) ){
        return 'true';
    }else{
        return 'false';
    }
}

function userCanRead(){
    if (current_user_can('read') == 1)
        return 'true';
    else
        return 'false';
}
// ends miniAudioPlayer_player_head function


// TinyMCE Button ***************************************************

function map_add_editor_styles() {
    global $miniAudioPlayer_active_all;

    if($miniAudioPlayer_active_all == "true")
        add_editor_style( plugins_url( 'css/TinyMCE_player.css', __FILE__ ) );
    else
        add_editor_style( plugins_url( 'css/TinyMCE_player_notAll.css', __FILE__ ) );
}
add_action( 'admin_init', 'map_add_editor_styles' );


// Set up our TinyMCE button
function setup_maplayer_button()
{
    global $miniAudioPlayer_customizer;

    if (get_user_option('rich_editing') == 'true' && current_user_can('edit_posts') && $miniAudioPlayer_customizer == 'true') {
        add_filter('mce_external_plugins', 'add_maplayer_button_script');
        add_filter('mce_buttons','register_maplayer_button');
    }
}

// Register our TinyMCE button
function register_maplayer_button($buttons) {
    array_push($buttons, '|', 'maplayerbutton');
    return $buttons;
}

// Register our TinyMCE Script
function add_maplayer_button_script($plugin_array) {
    $plugin_array['maplayer'] = plugins_url('maptinymce/tinymcemaplayer.js', __FILE__);
    return $plugin_array;
}

if ( is_admin() ) {
    require('miniAudioPlayer-admin.php');
}
