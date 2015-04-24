<?php
	class Pager
	{
		var $page_no	=	0;		//current Page No
		var $page_count	=	2;		//items in the page
		var $count		=	0;		//total item count
		var $q_str		=	"";		//query string to pass
		var $item_limit	=	0;		//Limit for looping
		var $start_index=	0;		//Starting point

		function Pager($page,$p_count,$count,$q_str)
		{
			$this->page_no		=	$page;
			$this->page_count	=	$p_count;
			$this->count		=	$count;
			$this->q_str		=	$q_str;
			$this->init();
		}
		
		function out()
		{
			//global $PHP_SELF;
			$url3 = $_SERVER['SCRIPT_NAME'];
			
			$pp ="<div class='pagination'>";
			
			if($this->count<1||$this->page_no<1)
				return;
			$quer_str=$url3."?$this->q_str";
			
			IF($quer_str)
				$quer_str.="&";
	
			$no_of_pages=intval($this->count/$this->page_count);
	
			if($this->count%$this->page_count) $no_of_pages++;
			
			if($this->page_no>$no_of_pages) $this->page_no= $no_of_pages;
		
			$prev_page=$this->page_no-1;//false if first page
			
			$next_page=$this->page_no+1;
		
			if($next_page>$no_of_pages)

				$next_page=0;	//false if last page
		
			if($prev_page)
			{
				$pp .= "<a href='$quer_str"."page=$prev_page'>Previous</a>";
			}
			$chk=$no_of_pages-2;
			
			if($no_of_pages>5)
			{
				if($this->page_no<$chk)
				{
					
					
					if($this->page_no>3)
					{
						$start=$this->page_no-2;
						$end=$this->page_no+2;
						$pp .= "<a>....</a> ";
					}
						
					else
					{
						$start=1;
						$end=5;
					}
					
					for($i=$start;$i<=$end;$i++)
					{
						
						if($this->page_no==$i)
							$pp .= "<a><span class='current'>$i</span></a> ";
						else
							$pp .= "<a href='$quer_str"."page=$i'>$i</a> ";
					}
					
					if($this->page_no!=($no_of_pages-3))
						$pp .= "<a>....</a> ";
					
					$pp .= "<a href='$quer_str"."page=$no_of_pages'>$no_of_pages</a> ";
				}
				else
				{
					
					if($this->page_no==($no_of_pages-2))
					{
						$start=$this->page_no-2;
					}
					elseif($this->page_no==($no_of_pages-1))
					{
						$start=$this->page_no-3;
					}
					elseif($this->page_no==$no_of_pages)
					{
						$start=$this->page_no-4;
					}
					
					
					$pp .= "<a>....</a> ";
					for($i=$start;$i<=$no_of_pages;$i++)
					{
						
						if($this->page_no==$i)
							$pp .= "<a><span class='current'>$i</span></a> ";
						else
							$pp .= "<a href='$quer_str"."page=$i'>$i</a> ";
					}
				}
				
				
				
				
			}
			else
			{
				for($i=1;$i<=$no_of_pages;$i++)
				{
					if($this->page_no==$i)
						$pp .= "<a><span class='current'>$i</span></a> ";
					else
						$pp .= "<a href='$quer_str"."page=$i'>$i</a> ";
				}
			}
			
					
			if($next_page)
				$pp .= " <A href='$quer_str"."page=$next_page'>Next</a> ";
				
			return $pp;
		}

		function init()
		{
			if($this->count<1||$this->page_count<1)
			{
				$this->limit=0;
				$this->page_count=0;
				return false;		
			}
			if($this->page_no<0)
				$this->page_no=1;
			$this->start_index = ($this->page_no-1)*$this->page_count;
			if($this->count<=($this->start_index-1))
			{
				$this->page_no = 1;
				$this->start_index=0;
			}
			$this->item_limit=$this->count>=($this->start_index+$this->page_count)?$this->page_count:$this->count%$this->page_count;
			
							
		}
		
	}
?>