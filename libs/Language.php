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
	
	class Language{
		var $_messages;
		var $name;
		var $smallName;
		function Language(){
			$this->_messages = array();
		}
		function addMessage($name,$value){
			$this->_messages[$name] = &$value;
		}
		function &getMessage($name){
			return $this->_messages[$name];
		}
		function &message($name){
			return $this->_messages[$name];
		}
		function smarty_function_lang($params,&$smarty){
			$key = &$params['key'];
			if( $key && isset($this->_messages[$key])){
				return $this->_messages[$key];
			}
			return $key;
		}
	}
	//lang cookie global variable overwritten here in case of globals..
	$lang = new Language();
	
	
	
?>