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
	function checkInt($val){
		$ival = intval($val);
		if(  strlen("$ival") != strlen($val) ){
			return false;
		}else{
			return $ival;
		}
	}
	function checkDbl($val){
		$ival = floatval($val);
		if(  strlen("$ival") != strlen($val)  ){
			return false;
		}else{
			return $ival;
		}
	}
	function getNum($name){
		global $currentForm;
		if(!isset($_REQUEST[$currentForm][$name])){
			return false;
		}
		$val = trim($_REQUEST[$currentForm][$name]);
		return checkInt($val);
		
	}
	function getStr($name){
		global $currentForm;
		if(!isset($_REQUEST[$currentForm][$name])){
			return false;
		}
		$val = $_REQUEST[$currentForm][$name];
		if( get_magic_quotes_gpc()){
			$val = stripslashes($val);
		}
		return $val;
	}
	function getDbl($name){
		global $currentForm;
		if(!isset($_REQUEST[$currentForm][$name])){
			return false;
		}
		$val = trim($_REQUEST[$currentForm][$name]);
		return checkDbl($val);
	}
	function getDte($name){
		global $cfg;
		
	}
	function getDateTime($name){
		global $cfg;
		
	}
	function &getIntArr($name){
		global $currentForm;
		if(!isset($_REQUEST[$currentForm][$name])){
			return false;
		}
		$val = &$_REQUEST[$currentForm][$name];
		if( ! is_array($val)){
			return false;
		}
		$arr = array();
		foreach($val as $key=>$value){
			if( get_magic_quotes_gpc()){
				if( is_int($key)){
					$key = intval(stripslashes($key));
				}else{
					$key = stripslashes($key);
				}
			}
			$v = $checkInt($value);
			$arr[ $key ] = $v; 
		}
		return $arr;
	}
	function &getDblArr($name){
		global $currentForm;
		if(!isset($_REQUEST[$currentForm][$name])){
			return false;
		}
		$val = &$_REQUEST[$currentForm][$name];
		if( ! is_array($val)){
			return false;
		}
		$arr = array();
		foreach($val as $key=>$value){
			if( get_magic_quotes_gpc()){
				if( is_int($key)){
					$key = intval(stripslashes($key));
				}else{
					$key = stripslashes($key);
				}
			}
			$v = $checkDbl($value);
			$arr[ $key ] = $v; 
		}
		return $arr;
	}
	function &getStrArr($name){
		global $currentForm;
		if(!isset($_REQUEST[$currentForm][$name])){
			return false;
		}
		$val = &$_REQUEST[$currentForm][$name];
		if( ! is_array($val)){
			return false;
		}
		$arr = array();
		foreach($val as $key=>$value){
			if( get_magic_quotes_gpc()){
				$key = stripslashes($key);
				$value = stripslashes($value);
			}
			
			$arr[ $key ] = $value; 
		}
		return $arr;
	}
?>