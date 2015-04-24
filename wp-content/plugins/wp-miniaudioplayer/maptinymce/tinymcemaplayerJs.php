<?php
	if (!headers_sent()) {
	    header("Content-Type: text/javascript; charset=UTF-8");
	}
?>
(function() {
    tinymce.create('tinymce.plugins.maplayer', {

        init : function(ed, url) {

        	var popUpURL = url + '/maplayertinymce.php?' + '<?php echo urldecode($_GET['params']); ?>';

			ed.addCommand('maplayerpopup', function() {
				ed.windowManager.open({
					url : popUpURL,
					width : 600,
					height : 620,
					inline : 1
				});
			});

			ed.addButton('maplayerbutton', {
				title : 'Modify a miniAudioPlayer',
				image : url + '/maplayerbutton.png',
				cmd : 'maplayerpopup'
			});

            ed.onNodeChange.add(function(ed) {
                var selection = ed.selection.getNode();
                var btn = ed.controlManager.get("maplayerbutton");
                var disable = true;
                jQuery("#"+btn.id).css({opacity:"1"});
                if (jQuery(selection).is("a[href *= '.mp3']") || jQuery(selection).find("a[href *= '.mp3']").lenght>0 || jQuery(selection).prev().is("a[href *= '.mp3']")) {
                    disable = false;
                    jQuery("#"+btn.id).css({border:"1px solid gray", opacity:1});
                }
                ed.controlManager.setDisabled("maplayerbutton", disable);

            });
	    },

		createControl : function() {
            return null;
        },

		getInfo : function() {
            return {};
        }
    });
    tinymce.PluginManager.add('maplayer', tinymce.plugins.maplayer);
}());
