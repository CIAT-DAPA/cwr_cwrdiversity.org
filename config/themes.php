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
	
	include_once( $cfg['lib_dir'].'/smarty/Smarty.class.php');
	$smarty = new Smarty();
	
	$smarty->template_dir = $cfg['theme_dir'].'/current/tpl';
	$smarty->compile_dir	=	$cfg['theme_dir'].'/current/ctpl';
	$smarty->plugins_dir	= array( $cfg['lib_dir'].'/smarty-plugins' , $cfg['lib_dir'].'/smarty/plugins')
	
	
	
	
?>