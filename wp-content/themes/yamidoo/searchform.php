<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
 
	<input type="text"  onblur="if (this.value == '') {this.value = '<?php _e('search...', 'wpzoom') ?>';}" onfocus="if (this.value == '<?php _e('search...', 'wpzoom') ?>') {this.value = '';}" value="<?php _e('search...', 'wpzoom') ?>" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="<?php _e('Search', 'wpzoom');?>" />
</form>
