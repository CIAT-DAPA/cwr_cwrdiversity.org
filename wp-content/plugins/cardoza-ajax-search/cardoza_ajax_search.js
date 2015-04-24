function do_search_js(search_string){
	jQuery.post(the_ajax_script.ajaxurl,jQuery('#search_form').serialize(),
		function(response_from_the_search_function){
			jQuery("#search_result").html(response_from_the_search_function);	
		}
	);
}

