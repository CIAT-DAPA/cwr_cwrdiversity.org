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
	class Errors{
		var $_errors;
		var $showForm = true;
		var $_hasErrors = false;
		function Errors(){
			$this->errors = array();
		}
		function addError($field,$err){
			$this->_hasErrors = true;
			$err = "<div class='error'>$err</div>";
			if( ! isset($this->_errors[$field]) ){
				$this->_errors[$field] = $err;
			}else{
				$this->_errors[$field] .= $err;
			}
		}
		function error($field,$err){
			$this->addError($field,$err);
		}
		function hasErrors(){
			return $this->_hasErrors;
		}
		function smarty_showForm($params, $content, &$smarty, &$repeat){
			if( !$this->showForm ){
				$repeat = false;
				return '';
			}
			return $content;
		}
		function smarty_noShowForm($params, $content, &$smarty, &$repeat){
			if( $content){
				if( $this->showForm){
					return '';
				}
				return $content;
			}
			return '';
		}
		/**
		 * Smarty block function..
		 * {haserror field='name'}
		 * content
		 * {/haserror}
		 * outputs content is there is an error in the field name;
		 * In case of no field parameter..outputs contents if there is any error.
		 *
		 * @param unknown_type $params
		 * @param unknown_type $content
		 * @param unknown_type $smarty
		 * @param unknown_type $repeat
		 * @return unknown
		 */
		function &smarty_hasError($params, $content, &$smarty, &$repeat){
			$field = $params['field'];
			if( !$field && !$this->hasErrors()){
				$repeat = false;
			}
			if( $field){
				if(! isset($this->_errors[$field])){
					$repeat = false;
				}
			}
			return $content;
		}
		function &smarty_noError($params, $content, &$smarty, &$repeat){
			$field = $params['field'];
			if( !$field && $this->hasErrors()){
				$repeat = false;
			}
			if( $field){
				if( isset($this->_errors[$field])){
					$repeat = false;
				}
			}
			return $content;
		}
		function smarty_error($params,&$smarty){
			$field = $params['field'];
			if( !$field){
				$field = '_form';
			}
			return $this->_errors[$field];
		}
	}
	
	
	$errors = new Errors();
	
	function addError($field,$err){
		global $errors;
		$errors->addError($field,$err);
	}
	function _error($field,$err){
		global $errors;
		$errors->addError($field,$err);
	}
	
	
	$smarty->assign_by_ref('errors',$errors);
	$smarty->register_block('showform',array(&$errors,'smarty_showForm'));
	$smarty->register_block('noform', array(&$errors,'smarty_noShowForm'));
	$smarty->register_block('haserror',array(&$errors,'smarty_hasError'));
	$smarty->register_block('noerror',array(&$errors,'smarty_noError'));
	$smarty->register_function('error',array(&$errors,'smarty_error'));
	
?>