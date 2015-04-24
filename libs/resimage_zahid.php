<?php
	
/** 
* Author: Zahid Rasheed (zeeveloper@gmail.com)
* Company: Renaissance Software / Intellicomdevelopment.com (info@renai-soft.com)
* All rights reserved.
*/


	// Get the width and height of the original image
	$size = getimagesize($sourceImageFilePath);
	if($size === FALSE) return FALSE; // Error condition
	$origWidth = $size[0];
	$origHeight = $size[1];
	
	// Change dimensions to fit maximum width and height
	$resizedWidth = $origWidth;
	$resizedHeight = $origHeight;
	
	if($resizedWidth > $maxResizeWidth) 
	{
		$aspectRatio = $maxResizeWidth / $resizedWidth;
		$resizedWidth = round($aspectRatio * $resizedWidth);
		$resizedHeight = round($aspectRatio * $resizedHeight);
	}
	if($resizedHeight > $maxResizeHeight) 
	{
		$aspectRatio = $maxResizeHeight / $resizedHeight;
		$resizedWidth = round($aspectRatio * $resizedWidth);
		$resizedHeight = round($aspectRatio * $resizedHeight);
	}
	
	// Create the resized image 
	$imageOutput = imagecreatetruecolor($resizedWidth, $resizedHeight);
	
	if($ext==".jpg")
	{
	  
		$imageSource = imagecreatefromjpeg($sourceImageFilePath);
        
		$result = imagecopyresampled($imageOutput, $imageSource, 0, 0, 0, 0, $resizedWidth, $resizedHeight, $origWidth, $origHeight);
		$result = imagejpeg($imageOutput, $outputPath, 100);
       
	}
	elseif($ext==".png")
	{
		$imageSource = imagecreatefrompng($sourceImageFilePath);
		$result = imagecopyresampled($imageOutput, $imageSource, 0, 0, 0, 0, $resizedWidth, $resizedHeight, $origWidth, $origHeight);
		$result = imagepng($imageOutput, $outputPath, 0);
	}
	elseif($ext==".gif")
	{
		$imageSource = imagecreatefromgif($sourceImageFilePath);
		$result = imagecopyresampled($imageOutput, $imageSource, 0, 0, 0, 0, $resizedWidth, $resizedHeight, $origWidth, $origHeight);
		$result = imagegif($imageOutput, $outputPath, 100);
	}

?>