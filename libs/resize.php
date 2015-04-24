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
 
//IMAGE RESIZE FUNCTION FOLLOW ABOVE DIRECTIONS

function makeimage($filename,$newfilename,$path,$newwidth,$newheight) {
	
	 //SEARCHES IMAGE NAME STRING TO SELECT EXTENSION (EVERYTHING AFTER . )
	 $image_type = strstr($filename, '.');
     
     $imgpath = "../".$path.$filename;
   	
     //SWITCHES THE IMAGE CREATE FUNCTION BASED ON FILE EXTENSION
	
		switch($image_type){
			case '.jpg':
				$source = imagecreatefromjpeg($imgpath);
				break;
			case '.jpeg':
				$source = imagecreatefromjpeg($imgpath);
				break;	
			case '.png':
				$source = imagecreatefrompng($filename);
				break;
			case '.gif':
				$source = imagecreatefromgif($imgpath);
				break;
			default:
				die("Error Invalid Image Type");
				break;
			}
	
	//CREATES THE NAME OF THE SAVED FILE
	$file = $newfilename;
	//CREATES THE PATH TO THE SAVED FILE
	$fullpath = $path . $file;
	//FINDS SIZE OF THE OLD FILE
	list($width, $height) = getimagesize($imgpath);

	//CREATES IMAGE WITH NEW SIZES
	$thumb = $thumb = imagecreatetruecolor($newwidth, $newheight);

	//RESIZES OLD IMAGE TO NEW SIZES

	imagecopyresampled($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
	
	
	//SAVES IMAGE AND SETS QUALITY || NUMERICAL VALUE = QUALITY ON SCALE OF 1-100
	imagejpeg($thumb, "../".$fullpath, 100);
	

	//CREATING FILENAME TO WRITE TO DATABSE
	$filepath = $fullpath;
	
	//RETURNS FULL FILEPATH OF IMAGE ENDS FUNCTION
	//return $filepath;
}
 
?>