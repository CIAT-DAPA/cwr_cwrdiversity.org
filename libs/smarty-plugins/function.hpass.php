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
	
	function smarty_function_hpass($params, &$smarty){
		global $log,$currentForm;
		ob_start();
		$o = $currentForm ;
		$v = false;
		echo "<input type='password' ";
		foreach( $params as $key=>$value){
			if( $key=='name'){
				$log->info("v $key=$value");
				$v = $value;
			}else{
				$log->info("other $key=$value");
				$key = htmlspecialchars($key);
				$value = htmlspecialchars($value);
				echo "$key=\"$value\" ";
			}
		}
		
		if( $v){
			$name = $o."[$v]";
		}
			
		$name = htmlspecialchars($name);
		echo "name=\"$name\"/>";
		return ob_get_clean();
	}
?>