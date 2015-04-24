<?php
$cfg = array();

$cfg[ 'theme_dir' ]		= APPLICATION_DIR.'/themes' ;
$cfg[ 'lib_dir' ] 		= APPLICATION_DIR.'/libs' ;
$cfg[ 'log_dir' ]		= APPLICATION_DIR.'/logs' ;
$cfg[ 'lang_dir' ]		= APPLICATION_DIR.'/lang' ;
$cfg[ 'config_dir']		= APPLICATION_DIR.'/config';

$__path = APPLICATION_DIR;
set_include_path(get_include_path() . PATH_SEPARATOR . $__path);

/**
	 * Website Settings...
	 */
$cfg['site_root'] = "/";
$cfg['site_title'] = '';
$cfg['site_domain'] = '';
$cfg['site_domain_secure'] = '';
$cfg['site_url'] = $cfg['site_domain'].substr($cfg['site_root'],1);
$cfg['site_url_secure'] = $cfg['site_domain_secure'].substr($cfg['site_root'],1);

/**
	 * Security
	 */
//include_once($cfg['config_dir'].'/security.php');
$cfg['security'] = array();
$cfg['security']['login_user'] = $cfg['site_root'].'login.php';
$cfg['security']['logout_user'] = $cfg['site_root'].'logout.php';
//$cfg['security']['not_auth_user']   = $cfg['site_root'].'login.php';
$cfg['security']['login_admin'] = $cfg['site_root'].'admin/login.php';
$cfg['security']['logout_admin'] = $cfg['site_root'].'admin/logout.php';
//$cfg['security']['not_auth_admin']   = $cfg['site_root'].'admin/login.php';
require_once('config/security.php');

/**
	 * Logging configuration...
	 */
$cfg['log'] 		= array();
$cfg['log']['file'] = array();
require_once( $cfg[ 'config_dir' ].'/logger.php');

/**
	 * Database setup..
	 */
$cfg['db']			= array();
$cfg['db']['username'] 	= 'cwruserdb';
$cfg['db']['password'] 	= 'x9U#46F@3jm!8';
$cfg['db']['host']		= 'mysql.cwrdiversity.org' ;
$cfg['db']['db']		= 'gapanalysis';
$cfg['db']['driver']	= 'mysql' ;
//include_once($cfg['config_dir'].'/db.php');
require_once('config/db.php');

/**
	 * Themes...
	 */
/**
	 * Site settings..
	 */
$cfg['images_dir'] = $cfg['site_root'].'res/files/';

$cfg[ 'themes' ] 		= array('default');

//include_once($cfg['config_dir'].'/themes.php');
require_once('config/themes.php');


/**
	 * Multi Lingual Support.
	 */
require_once('config/lang.php');

/**
	 * Date Format..
	 */


$log->info('Configured Successfully.');
?>
