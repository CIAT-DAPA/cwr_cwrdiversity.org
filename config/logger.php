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
	define( 'LOG4PHP_CONFIGURATION' , $cfg['config_dir'].'/log4php.properties' );
	
	$_ENV['LOGFILEPATH'] = $cfg['log_dir'].'/log.txt';
	
	
	require_once( 'libs/log4php/LoggerManager.php' ) ;
	
	$log = &LoggerManager::getRootLogger();
	
	
	if(! $log){
		echo 'no log';
		exit;
	}
	$log->info("Logging configured successfully.");
?>