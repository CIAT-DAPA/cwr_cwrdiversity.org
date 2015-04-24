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
	function getDimensions($w,$h,$rqw,$rqh){
	
		$ratio_im = $w/$h;
		$ratio_rq = $rqw/$rqh;
		if( $ratio_im <$ratio_rq){
			
			return array( round($rqw * $ratio_im),$rqh);
		}
		else if( $ratio_rq < $ratio_im){
			
			return array($rqw, round($rqh*$ratio_rq));
		}
		else{
			
			return array($rqw,$rqh);
		}
	}
?>