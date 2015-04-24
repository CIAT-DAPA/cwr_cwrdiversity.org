<?php
	require_once('libs/User.class.php');
	require_once('libs/basket.class.php');
	session_start();
	function curPageURL() {
	 $pageURL = 'http';
	 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	 } else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 }
	 return $pageURL;
	}
	
	
	
	if(! $_SESSION['user']){
		$_SESSION['user'] = new User();
	}
	$user = &$_SESSION['user'];
	
	if( $security_required  && !$user->authenticated)
	{

		if($security_required==1)
		{
			header('Location: login.php?redirect='.curPageURL());
			exit();
		}
		elseif($security_required==2)
		{
			header('Location: login.php?redirect='.curPageURL());
			exit();

		}
		elseif($security_required==3)
		{
			header('Location: login.php?redirect='.curPageURL());
			exit();

		}
		
	}
	
	elseif($security_required && $user->authenticated && $user->role > $security_required)
	{
		if($security_required==1)
		{

			header("Location: login.php");
			exit();
		}
		elseif($security_required==2)
		{
            		header("Location: login.php");
			exit();
		}
		elseif($security_required==3)
		{
            		header("Location:login.php");
			exit();
		}
  
	
	}
	if(!$_SESSION['basket'])
		$_SESSION['basket'] = new Basket;
?>