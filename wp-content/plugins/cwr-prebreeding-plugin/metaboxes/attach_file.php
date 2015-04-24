<div class="cwr-attach-file-metabox">
    <label for="<?php echo $cwr_meta_box['field']['id'] ?>"><?php echo $cwr_meta_box['field']['name'] ?></label>
    <input type="text" name="<?php echo $cwr_meta_box['field']['id'] ?>" id="<?php echo $cwr_meta_box['field']['id'] ?>" value="<?php echo($meta ? $meta : '') ?>" size="30" style="width:80%" />
    <input type="button" id="<?php echo $cwr_meta_box['uploadButton']['id'] ?>" value="<?php echo $cwr_meta_box['uploadButton']['text'] ?>" style="width:10%" />
    <br />
    <span><?php echo $cwr_meta_box['field']['desc'] ?></span>
</div>