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
	if(!$user->authenticated){
		header('Location: Login.php');
	}
?>