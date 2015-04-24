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
	class Basket{
		
		var $shipName;
		var $shipAdd1;
		var $shipAdd2;
		var $shipCity;
		var $shipCtry;
		var $delScheme;
		var $shipMess;
		var $lastitemtitle;
		var $lastitemtitlefree;
		var $bascolors;
		var $bassizes;
		
		function Basket()
		{
			$this->items=array();
			$this->bascolors=array();
			$this->itemsfree=array();
			$this->itemsreturn =array();
			$this->itemsreplace =array();

		}
		
		function reserve_colors($prodid,$prods,$cnt_prod){
			for($i=0; $i<$cnt_prod; $i++){
				$this->bascolors[$prodid][0][0]= $prodid;
				$this->bascolors[$prodid][$i][1]= $prods[$i][0];
				$this->bascolors[$prodid][$i][2]=  $prods[$i][1];
			}
		}
		
		function get_colors(){
			return 	$this->bascolors;
		}	
		  				
		function add_item($prodId,$prodTitle, $cnt, $wholesalei10, $usPrice,$wholesalei5, $simg, $size,$color_id, $prodno,$wactive)
		{
			
			for($i=0;$i<count($this->items);$i++)
			{     
				if($this->items[$i][0]==$prodId && $this->items[$i][6] == $size)
				{  
					$this->items[$i][2]+=$cnt;
					$this->lastitemtitle = $this->items[$i][1];
					return;
				}
			}
			
			$item 		=   array();
			$item[0]	=	$prodId;
			$item[1] 	= 	$prodTitle;
			$item[2]	=	$cnt; //Count;
			$item[3]	=	$wholesalei10;
			$item[4]	=	$usPrice;
			$item[5]	=	$simg;
			$item[6]	=	$size;
			$item[7]	=	$color_id;
			$item[8]	=	$wholesalei5;
			$item[9]	=	$prodno;
			$item[10]	=	$wactive;
					
			$this->lastitemtitle = $prodTitle;
			array_push($this->items,$item);
			
		}
		
		/////////////////////Free bag items/////////////////////////////////
		function add_item_free($prodId2,$prodTitle2, $cnt2, $wholesalei102, $usPrice2,$wholesalei52, $simg2, $color2,$color_id2, $prodno2, $freebag2)
		{
			
			for($i=0;$i<count($this->itemsfree);$i++)
			{     
				if($this->itemsfree[$i][0]==$prodId2 && $this->itemsfree[$i][6]==$color2)
				{  
					$this->itemsfree[$i][2]+=$cnt2;
					$this->lastitemtitlefree = $this->itemsfree[$i][1];
					return;
				}
			}
			
			$itemfree 		=   array();
			$itemfree[0]	=	$prodId2;
			$itemfree[1] 	= 	$prodTitle2;
			$itemfree[2]	=	$cnt2; //Count;
			$itemfree[3]	=	$wholesalei102;
			$itemfree[4]	=	$usPrice2;
			$itemfree[5]	=	$simg2;
			$itemfree[6]	=	$color2;
			$itemfree[7]	=	$color_id2;
			$itemfree[8]	=	$wholesalei52;
			$itemfree[9]	=	$prodno2;
			$itemfree[10]	=	$freebag2;
					
			$this->lastitemtitlefree = $prodTitle2;
			array_push($this->itemsfree,$itemfree);
			
		}
		
		/////////////////////////////////////////////////////////////////////
		
		    			
		function getCount($prod)
		{
			for($i=0;$i<count($this->items);$i++)
			{
				if($this->items[$i][0]==$prod)
				{
					return $this->items[$i][3];
					
				}
			}
			return 0;
		}
		
		function get_item_count(){
			$ret=0;
			for($i=0;$i<count($this->items);$i++)
			{
 
				$ret += $this->items[$i][2];
				 
			}
			return $ret;
		}
		
		function get_item_count_free(){
			$ret=0;
			for($i=0;$i<count($this->itemsfree);$i++)
			{
				$ret += $this->itemsfree[$i][2];
			}
			return $ret;
		}
				
		function get_item_price($prodId)
		{
			for($i=0;$i<count($this->items);$i++)
				if($this->items[$i][0]==$prodId)
				{
				 
					return $this->items[$i][4];
				}					
			return 0;					
		}
		/////////////// return item /////////////////////////////
		////////////////////return bag items/////////////////////////////////
		function add_item_return($prodId3,$prodTitle3, $cnt3, $wholesalei103, $usPrice3,$wholesalei53, $simg3, $color3,$color_id3, $prodno3, $freebag3)
		{
			
			for($i=0;$i<count($this->itemsreturn);$i++)
			{     
				if($this->itemsreturn[$i][0]==$prodId3)
				{  
					$this->itemsreturn[$i][2]+=$cnt3;
					 $this->lastitemtitlereturn = $this->itemsreturn[$i][1];
					return;
				}
			}
			
			$itemreturn		=   array();
			$itemreturn[0]	=	$prodId3;
			$itemreturn[1] 	= 	$prodTitle3;
			$itemreturn[2]	=	$cnt3; //Count;
			$itemreturn[3]	=	$wholesalei103;
			$itemreturn[4]	=	$usPrice3;
			$itemreturn[5]	=	$simg3;
			$itemreturn[6]	=	$color3;
			$itemreturn[7]	=	$color_id3;
			$itemreturn[8]	=	$wholesalei53;
			$itemreturn[9]	=	$prodno3;
			$itemreturn[10]	=	$freebag3;
					
			$this->lastitemtitlereturn = $prodTitle3;
			array_push($this->itemsreturn,$itemreturn);
			 
			 
		}
		
		
		function return_item($prodId)
		{
			for($i=0;$i<count($this->items);$i++)
				if($this->items[$i][0]==$prodId)
				{
					
				$this->add_item_return($prodId,$this->items[$i][1], $this->items[$i][2], $this->items[$i][3], $this->items[$i][4],$this->items[$i][8], $this->items[$i][5], $this->items[$i][6],$this->items[$i][7], $this->items[$i][9], $this->items[$i][10]);
			 	array_splice($this->items,$i,1);
					return 1;
					//exit();
				}					
			return 0;					
		}
			
		function return_qty($prodId, $qty )
		{
			for($i=0;$i<count($this->items);$i++)
				if($this->items[$i][0]==$prodId)
				{
					
				$this->add_item_return($prodId,$this->items[$i][1], $qty, $this->items[$i][3], $this->items[$i][4],$this->items[$i][8], $this->items[$i][5], $this->items[$i][6],$this->items[$i][7], $this->items[$i][9], $this->items[$i][10]);
			 	//array_splice($this->items,$i,1);
					return 1;
					//exit();
				}					
			return 0;					
		}
		
		function restore_item($prodId)
		{
		for($i=0;$i<count($this->itemsreturn);$i++)
				if($this->itemsreturn[$i][0]==$prodId)
				{
					
				$this->add_item($prodId,$this->itemsreturn[$i][1], $this->itemsreturn[$i][2], $this->itemsreturn[$i][3], $this->itemsreturn[$i][4],$this->itemsreturn[$i][8], $this->itemsreturn[$i][5], $this->itemsreturn[$i][6],$this->itemsreturn[$i][7], $this->itemsreturn[$i][9], $this->itemsreturn[$i][10],'y');
			 	array_splice($this->itemsreturn,$i,1);
					return 1;
					 
				}						
			return 0;					
		}
		function calculate_gTotal_return()
		{
			$gtotal = 0;
				
			for($i=0; $i<count($this->itemsreturn); $i++)
			{
				$gtotal += $this->itemsreturn[$i][2] * $this->itemsreturn[$i][4];
			}
			return $gtotal;
		}
		/////////////// return item /////////////////////////////	
		
		function remove_item($prodId)
		{
			for($i=0;$i<count($this->items);$i++)
				if($this->items[$i][0]==$prodId)
				{
				
					array_splice($this->items,$i,1);
					return 1;
				}					
			return 0;					
		}
		//////////////////Remove Free bags/////////////////////////
		function remove_item_free($prodId)
		{
			for($i=0;$i<count($this->itemsfree);$i++)
				if($this->itemsfree[$i][0]==$prodId)
				{
					array_splice($this->itemsfree,$i,1);
					return 1;
				}					
			return 0;					
		}
		
		function remove_item_free_all()
		{
			
			for($i=0;$i<count($this->itemsfree);$i++)
				{
					array_splice($this->itemsfree,$i,8);
				}	
			    return 1;
									
		}
		//////////////////////////////////////////////////////////////
		function remove_items_all()
		{
			$_SESSION['basket'] = new Basket;				
		}
		
		function set_item_count($prodId,$cnt, $size)
		{
			/*if($cnt<1)
			{
				$this->remove_item($prodId);
				return;
			}		*/	
			for($i=0;$i<count($this->items);$i++)
			if($this->items[$i][0]==$prodId && $this->items[$i][6]==$size)
			{
				$this->items[$i][2]=$cnt;
				
				return 1;
			}											
		}
		
		
		function calculate_total($prodId, $quan)
		{
			$gTotal = 0;	
			
			for($i=0;$i<count($prodId);$i++)
			{
				if($this->items[$i][0]==$prodId[$i])
					$gTotal += $this->items[$i][2] * $this->items[$i][3];
			}			
			return $gTotal;
		}
		
		//for USD total	
		function calculate_gTotal()
		{
			$gtotal = 0;
				
			for($i=0; $i<count($this->items); $i++)
			{
				$gtotal += $this->items[$i][2] * $this->items[$i][4];
			}
			return $gtotal;
		}
		//for W5i total	
		function calculate_gTotalW5i()
		{
			$gtotal = 0;
				
			for($i=0; $i<count($this->items); $i++)
			{
				$gtotal += $this->items[$i][2] * $this->items[$i][8];
			}
			return $gtotal;
		}
		//for W10i total	
		function calculate_gTotalW10i()
		{
			$gtotal = 0;
				
			for($i=0; $i<count($this->items); $i++)
			{
				$gtotal += $this->items[$i][2] * $this->items[$i][3];
			}
			return $gtotal;
		}
		
		//for Euro total
		function calculate_eurTotal()
		{
			$utotal = 0;
				
			for($i=0; $i<count($this->items); $i++)
			{
				$utotal += $this->items[$i][2] * $this->items[$i][3];
			}
			return $utotal;
		}
		
		
		
//////////////////////////////////replace bag items/////////////////////////////////////////////////////////////////


function add_item_replace($prodId4,$prodTitle4, $cnt4, $wholesalei104, $usPrice4,$wholesalei54, $simg4, $color4,$color_id4, $prodno4, $freebag4)
		{
			
			for($i=0;$i<count($this->itemsreplace);$i++)
			{     
				if($this->itemsreplace[$i][0]==$prodId4)
				{  
					$this->itemsreplace[$i][2]+=$cnt4;
					 $this->lastitemtitlereplace = $this->itemsreplace[$i][1];
					return;
				}
			}
			 
			$itemreplace		=   array();
			$itemreplace[0]	=	$prodId4;
			$itemreplace[1] 	= 	$prodTitle4;
			$itemreplace[2]	=	$cnt4; //Count;
			$itemreplace[3]	=	$wholesalei104;
			$itemreplace[4]	=	$usPrice4;
			$itemreplace[5]	=	$simg4;
			$itemreplace[6]	=	$color4;
			$itemreplace[7]	=	$color_id4;
			$itemreplace[8]	=	$wholesalei54;
			$itemreplace[9]	=	$prodno4;
			$itemreplace[10]	=	$freebag4;
					
			$this->lastitemtitlereturn = $prodTitle4;
			 
			array_push($this->itemsreplace,$itemreplace);
		 
			 
		}
		
		
		function replace_item($prodId)
		{
			for($i=0;$i<count($this->items);$i++)
				if($this->items[$i][0]==$prodId)
				{
					
				$this->add_item_return($prodId,$this->items[$i][1], $this->items[$i][2], $this->items[$i][3], $this->items[$i][4],$this->items[$i][8], $this->items[$i][5], $this->items[$i][6],$this->items[$i][7], $this->items[$i][9], $this->items[$i][10]);
			 	array_splice($this->items,$i,1);
					return 1;
					//exit();
				}					
			return 0;					
		}
	function calculate_total_replace($prodId, $quan)
		{
			$gTotal = 0;	
			
			for($i=0;$i<count($prodId);$i++)
			{
				if($this->itemsreplace[$i][0]==$prodId[$i])
					$gTotal += $this->itemsreplace[$i][2] * $this->itemsreplace[$i][3];
			}			
			return $gTotal;
		}
		
		//for USD total	
		function calculate_gTotal_replace()
		{
			$gtotal = 0;
				
			for($i=0; $i<count($this->itemsreplace); $i++)
			{
				$gtotal += $this->itemsreplace[$i][2] * $this->itemsreplace[$i][4];
			}
			return $gtotal;
		}
		function remove_item_replace($prodId)
		{
			for($i=0;$i<count($this->itemsreplace);$i++)
				if($this->itemsreplace[$i][0]==$prodId)
				{
				
					array_splice($this->itemsreplace,$i,1);
					return 1;
				}					
			return 0;					
		}
////////////////////////////////////////////// replace  item    ////////////////////////// /////////////////////////////////////
		
		
	}
	
	/**session_start();	

	if(!$_SESSION['basket'])
		$_SESSION['basket'] = new Basket;*/
		
?>