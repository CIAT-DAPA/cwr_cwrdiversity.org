<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/search">  
	<input type="text"  onblur="if (this.value == '') {this.value = '<?php _e('search within website...', 'wpzoom') ?>';}" onfocus="if (this.value == '<?php _e('search within website...', 'wpzoom') ?>') {this.value = '';}" value="<?php _e('search within website...', 'wpzoom') ?>" name="tag" id="tag" />
	<input type="submit" id="searchsubmit" value="<?php _e('Search', 'wpzoom');?>" />
</form>