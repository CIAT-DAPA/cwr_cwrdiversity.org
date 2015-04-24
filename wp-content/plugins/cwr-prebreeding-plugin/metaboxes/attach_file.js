jQuery(document).ready(function() {

    jQuery('#cwr_upload_file_button').click(function() {
        formfield = jQuery('#cwr_attached_file').attr('id');
        tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
        return false;
    });

    window.send_to_editor = function(html) {
        imgurl = jQuery('img',html).attr('src');
        jQuery('#cwr_attached_file').val(imgurl);
        tb_remove();
    }
});

