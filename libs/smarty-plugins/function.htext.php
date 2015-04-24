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
	
	function smarty_function_htext($params, &$smarty){
		global $log,$currentForm;
		ob_start();
		$log->info("current $currentForm");
		$o = $currentForm ;
		$v = false;
		echo "<input type='text' ";
		foreach( $params as $key=>$value){
			if( $key== 'name'){
				$log->info("o $key=$value");
				$v = $value;
			}else{
				$log->info("other $key=$value");
				$key = htmlspecialchars($key);
				$value = htmlspecialchars($value);
				echo "$key=\"$value\" ";
			}
		}
		if( $v){
			$name = '';
			$value = '';
			$name = $o."[$v]";
			if(get_magic_quotes_gpc()){
				$value = stripslashes($_REQUEST[$o][$v]);
			}else{
				$value = $_REQUEST[$o][$v];
			}
			
			$value = htmlspecialchars($value);
			$name = htmlspecialchars($name);
			echo "name=\"$name\" value=\"$value\" ";
		}
		echo '/>';
		return ob_get_clean();
	}
?>