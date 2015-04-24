<?php
	/** 
    *  
    * Author: Khurram Ijaz (khurram@renai-soft.com)
    * Company: Renaissance Software / Intellicomdevelopment.com (info@renai-soft.com)
    * All rights reserved.
    *
    *
    *  
    */
	
	$cfg['lang'] = array();
	$cfg['lang']['languages'] = array('en'=>'English');
	$cfg['currentLanguage']		=0;
	$cfg['defaultLanguage']		= 'en';
	
	
	
	function setLang($lang){
		setcookie('lang',$lang,time()+3000000,$cfg['site_root']);
	}
	
	foreach($cfg['lang']['languages'] as $key=>$value){
		$lang_file = $cfg['lang_dir']."/$key/index.php";
		if( !file_exists($lang_file)){
			unset($cfg['lang']['languages'][$key]);
		}
	}
	if( isset($_REQUEST['__change__Language'])){
		if( in_array($_REQUEST['__change__language'],$cfg['lang']['languages'])){
			setLang($_REQUEST['__change__Language']);
			$cfg['currentLanguage'] = $_REQUEST['__change__Language'];
		}
	}
	/*if( !$cfg['currentLanguage']){
		if( $_COOKIE['lang'] ){
			if( in_array( $_COOKIE['lang'] , $cfg['lang']['languages'] ) ){
				$cfg['currentLanguage'] = $_COOKIE['lang'];
			}
		}
	}
	if( !$cfg['currentLanguage']){
		$cfg['currentLanguage'] = $cfg['defaultLanguage'] ;
	}
	$lang_file = $cfg['lang_dir']."/{$cfg['currentLanguage']}/index.php";
	
	*/
	
	
	require_once('libs/Language.php');
	$cfg['lang']['language']  = &$language;
	include_once($lang_file);
	
?>