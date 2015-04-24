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
	require_once( 'libs/adodb/adodb.inc.php' );
	$db = &ADONewConnection($cfg['db']['driver']); 
	
	if( ! $db){
		$log->error('Could not connect to the database.');
		exit;
	}
	
	$db->connect( $cfg['db']['host'] , $cfg['db']['username'] , $cfg['db']['password'] , $cfg['db']['db'] );
	if( ! $db->IsConnected() ){
		$log->error('Could not connect to the database.');
		exit;
	}
	
	$log->info('DB initialized successfully.');
?>