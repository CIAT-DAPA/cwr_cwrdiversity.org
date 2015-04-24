<?php
	/** 
	* File: category.php
	* Author: Khurram Ijaz (khurram@renai-soft.com)
	* Company: Renaissance Software (info@renai-soft.com)
	* All rights reserved.
	* Tue Aug 01 12:34:02 PKT 2006 
	*
	*
	*
	*/
	
	/**
	 * The fetch mode should be ADODB_FETCH_ASSOC
	 *
	 * @param int $cat_id
	 */
	
	function get_parent_map($cat_id){
		global $db;
		$str = '';
		
		while($cat_id){
			$cat = $db->GetRow("select id,title,parent_id from categories where id=?", array($cat_id));
			if( $cat === false){
				break;
			}
			$cat_id = $cat['parent_id'];
			$id = $cat['id'];
			$title = $cat['title'];
			$str = " <font color='red'> >> </font> <a href='viewcategories.php?id=$id'>$title</a>" . $str;
		}
		
		
		$str =  '<a href="viewcategories.php">Home</a>' . $str;
		return $str;
		
	}
	/*
	// To Move up category order
	
	*/
	function move_up_category($id,$ordering,$parent_id){
		global $db;
		
		$upward_cat = $db->GetRow("select id,ordering from categories where ordering< ? and parent_id =? order by ordering desc limit 0,1", array($ordering,$parent_id));
		if($upward_cat == true){
		
			$new_order = $upward_cat['ordering'];
			$db->Execute("update categories set ordering=? where id=?", array($new_order,$id));
			$db->Execute("update categories set ordering=? where id=?", array($ordering,$upward_cat['id']));
		}
		
	}
	/*
	// To Move up product order
	
	*/
	function move_up_product($id,$ordering,$cat_id){
		global $db;
		
		$upward_prod = $db->GetRow("select id,ordering from products where ordering< ? and category_id =? order by ordering desc limit 0,1", array($ordering,$cat_id));
		if($upward_prod == true){
		
			$new_order = $upward_prod['ordering'];
			$db->Execute("update products set ordering=? where id=?", array($new_order,$id));
			$db->Execute("update products set ordering=? where id=?", array($ordering,$upward_prod['id']));
			
		}
		
	}
	
	/*
	// To Move up product_detail order
	
	*/
	function move_up_product_color($id,$ordering,$prod_id){
		global $db;
		$upward_prod_detail = $db->GetRow("select id,ordering from product_details where ordering< ? and product_id =? order by ordering desc limit 0,1", array($ordering,$prod_id));
		if($upward_prod_detail == true){
		
			$new_order = $upward_prod_detail['ordering'];
			$db->Execute("update product_details set ordering=? where id=?", array($new_order,$id));
			$db->Execute("update product_details set ordering=? where id=?", array($ordering,$upward_prod_detail['id']));
			
		}
		
	}
	/*
	// To Move up product_detail_size order
	
	*/
	function move_up_product_size($id,$ordering,$detail_id){
		global $db;
		
		$upward_prod_size = $db->GetRow("select id,ordering from product_details_sizes where ordering< ? and detail_id =? order by ordering desc limit 0,1", array($ordering,$detail_id));
		if($upward_prod_size == true){
		
			$new_order = $upward_prod_size['ordering'];
			$db->Execute("update product_details_sizes set ordering=? where id=?", array($new_order,$id));
			$db->Execute("update product_details_sizes set ordering=? where id=?", array($ordering,$upward_prod_size['id']));
			
		}
		
	}

/*
////Move Downs functions set here
	
/*
	// To Move Down Category
	
	
*/	
	
	
	
	
	function move_down_category($id,$ordering,$parent_id){
		global $db;
		
		$down_cat = array();
		$dowm_cat = $db->GetRow("select id,ordering from categories where ordering > ? and parent_id =? order by ordering asc limit 0,1", array($ordering,$parent_id));
		
		if($dowm_cat == true){
			
			$new_order = $dowm_cat['ordering'];
			$db->Execute("update categories set ordering=? where id=?", array($new_order,$id));
			$db->Execute("update categories set ordering=? where id=?", array($ordering,$dowm_cat['id']));
		}
		
	}
	
	/*
	// To Move down product order
	
	*/
	function move_down_product($id,$ordering,$cat_id){
		global $db;
		
		$down_prod = $db->GetRow("select id,ordering from products where ordering> ? and category_id =? order by ordering asc limit 0,1", array($ordering,$cat_id));
		if($down_prod == true){
		
			$new_order = $down_prod['ordering'];
			$db->Execute("update products set ordering=? where id=?", array($new_order,$id));
			$db->Execute("update products set ordering=? where id=?", array($ordering,$down_prod['id']));
			
		}
		
	}
	
	/*
	// To Move down product_detail order
	
	*/
	function move_down_product_color($id,$ordering,$prod_id){
		global $db;
		$down_prod_detail = $db->GetRow("select id,ordering from product_details where ordering> ? and product_id =? order by ordering asc limit 0,1", array($ordering,$prod_id));
		if($down_prod_detail == true){
		
			$new_order = $down_prod_detail['ordering'];
			$db->Execute("update product_details set ordering=? where id=?", array($new_order,$id));
			$db->Execute("update product_details set ordering=? where id=?", array($ordering,$down_prod_detail['id']));
			
		}
		
	}
	/*
	// To Move down product_detail_size order
	
	*/
	function move_down_product_size($id,$ordering,$detail_id){
		global $db;
		
		$down_prod_size = $db->GetRow("select id,ordering from product_details_sizes where ordering> ? and detail_id =? order by ordering asc limit 0,1", array($ordering,$detail_id));
		if($down_prod_size == true){
		
			$new_order = $down_prod_size['ordering'];
			$db->Execute("update product_details_sizes set ordering=? where id=?", array($new_order,$id));
			$db->Execute("update product_details_sizes set ordering=? where id=?", array($ordering,$down_prod_size['id']));
			
		}
		
	}
?>