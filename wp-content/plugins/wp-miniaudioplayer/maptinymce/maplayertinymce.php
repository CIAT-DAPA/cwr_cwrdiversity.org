<?php

$plugin_version = $_GET['plugin_version'];
$includes_url = $_GET['includes_url'];
$plugins_url = $_GET['plugins_url'];
$charset = $_GET['charset'];
$exclude_class = $_GET['exclude_class'];
$showVolumeLevel = $_GET['showVolumeLevel'];
$showTime = $_GET['showTime'];
$showRew = $_GET['showRew'];
$width = $_GET['width'];
$skin = $_GET['skin'];
$miniAudioPlayer_animate = $_GET['animate'];
$volume = $_GET['volume'];
$donate = $_GET['donate'];
$downloadable = $_GET['downloadable'];
$downloadable_security = $_GET['downloadable_security'];
$metadata = $_GET['metadata'];

if (!headers_sent()) {
    header('Content-Type: text/html; charset='.$charset);
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset; ?>" />
    <title>mb.miniAudioPlayer</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $plugins_url.'/wp-miniaudioplayer/maptinymce/bootstrap-1.4.0.min.css?v='.$plugin_version; ?>"/>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $plugins_url.'/wp-miniaudioplayer/js/jquery.metadata.js?v='.$plugin_version; ?>"></script>
    <script type="text/javascript" src="<?php echo $plugins_url.'/wp-miniaudioplayer/js/id3.min.js?v='.$plugin_version; ?>"></script>
    <script type="text/javascript" src="<?php echo $includes_url.'js/tinymce/tiny_mce_popup.js?v='.$plugin_version; ?>"></script>

    <style>
        fieldset span.label{
            display: inline-block;
            width: 100px;
        }

        fieldset label {
            margin: 0;
            padding: 3px!important;
            border-top: 1px solid #dcdcdc;
            border-bottom: 1px solid #f9f9f9;
            display: block;
        }

        .actions{
            text-align: right;
        }

        .span6{
            width: 100px!important;
        }
        h3{
            color:#404040!important;
        }
    </style>


</head>
<body>

<form class="form-stacked" action="#">
    <fieldset>
        <legend>mb.miniAudioPlayer parameters:</legend>

        <label>
            <span class="label">Don't render: </span>
            <input type="checkbox" name="exclude" value="true"/>
            <span class="help-inline">check to exclude this link (<?php echo $exclude_class ?>)</span>
        </label>

        <label>
            <span class="label">Audio url <span style="color:red">*</span> : </span>
            <input type="text" name="url" class="span5"/>
            <span class="help-inline">A valid .mp3 url</span>
        </label>

        <label>
            <span class="label">Audio title : </span>
            <input type="text" name="audiotitle" class="span5"/>
            <span class="help-inline">The audio title</span><br>
            <span class="label"> </span>
            <button id="metadata" onclick="getFromMetatags();$(this).hide(); return false" style="color: gray" >get the title from meta-data</button>
        </label>

        <label>
            <span class="label">Skin:</span>
            <select name="skin">
                <option value="black">black</option>
                <option value="blue">blue</option>
                <option value="orange">orange</option>
                <option value="red">red</option>
                <option value="gray">gray</option>
                <option value="green">green</option>
            </select>
            <span class="help-inline">Set the skin color for the player</span>
        </label>

        <label>
            <span class="label">Animate:</span>
            <input type="checkbox" name="animate" value="true"/>
            <span class="help-inline">Check to activate the opening / closing animation</span>
        </label>

        <label>
            <span class="label">Width: </span>
            <input type="text" name="width" class="span6"/>
            <span class="help-inline">Set the player width</span>
        </label>

        <label>
            <span class="label">Volume: </span>
            <input type="text" name="volume" class="span6"/>
            <span class="help-inline">(from 1 to 10) Set the player initial volume</span>
        </label>

        <label>
            <span class="label">Autoplay: </span>
            <input type="checkbox" name="autoplay" value="true"/>
            <span class="help-inline">check to start playing on page load</span>
        </label>

        <label>
            <span class="label">Loop: </span>
            <input type="checkbox" name="loop" value="false"/>
            <span class="help-inline">check to loop the sound</span>
        </label>

        <h3>Show/Hide</h3>

        <label>
            <span class="label">Volume control: </span>
            <input type="checkbox" name="showVolumeLevel" value="true"/>
            <span class="help-inline">check to show the volume control</span>
        </label>

        <label>
            <span class="label">Time control: </span>
            <input type="checkbox" name="showTime" value="true"/>
            <span class="help-inline">check to show the time control</span>
        </label>

        <label>
            <span class="label">Rewind control: </span>
            <input type="checkbox" name="showRew" value="true"/>
            <span class="help-inline">check to show the rewind control</span>
        </label>

        <label>
            <span class="label">Downloadable: </span>
            <input type="checkbox" name="downloadable" value="false" onclick="manageSecurity(this)"/>
            <span class="help-inline">check to show the download button</span><br>
        </label>

        <label>
            <span class="label" style="font-weight: normal; color: gray">Only registered: </span>
            <input type="checkbox" name="downloadablesecurity" value="false"/>
            <span class="help-inline">Check to limit downloads to registered users</span>
        </label>

        <script>
            function manageSecurity(el){

                var security = jQuery('[name=downloadablesecurity]');
                if(jQuery(el).is(":checked")){
                    security.removeAttr('disabled');
                }else{
                    security.attr('disabled','disabled');
                    security.removeAttr('checked');
                }
            }
        </script>

    </fieldset>

    <div class="actions">
        <input type="submit" value="Insert the code" class="btn primary"/>
        or
        <input class="btn" type="reset" value="Reset settings"/>
    </div>
</form>

<!--DONATE POPUP-->
<style>
    #donate{ position: fixed; top: 0; left: 0; width: 100%; height: 100%; padding: 30px; text-align: center; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; z-index: 10000; display: none}
    #donateContent{ position: relative; margin: 30px auto; background: rgba(77, 71, 61, 0.88); color:white; padding: 30px; text-align: center; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; width: 450px; border-radius: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.5) }
    #donate h2{ font-size: 30px; line-height: 33px; color: #ffffff; }
    #donate p{ margin: 30px; font-size: 16px; line-height: 22px; display: block; float: none; }
    #donate p#follow{ margin: 30px; font-size: 16px; line-height: 33px; }
    #donate p#timer{ padding: 5px; font-size: 20px; line-height: 33px; background: #231d0c; border-radius: 30px; color: #ffffff; width: 30px; margin: auto; }
</style>

<div id="donate">
    <div id="donateContent">
        <h2>mb.miniAudioPlayer</h2>
        <p >If you like it and you are using it then you should consider a donation <br> (€15,00 or more) :-)</p>
        <p><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=DSHAHSJJCQ53Y" target="_blank" onclick="donate();">
                <img border="0" alt="PayPal" src="https://www.paypalobjects.com/en_US/IT/i/btn/btn_donateCC_LG.gif">
            </a></p>
        <p id="timer">&nbsp;</p>
        <br>
        <br>
        <button onclick="donate()">I already donate</button>
    </div>
</div>
<script type="text/javascript">

    $.mbCookie = {
        set:function (name, value, days, domain) {
            if (!days) days = 7;
            domain = domain ? "; domain=" + domain : "";
            var date = new Date(), expires;
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
            document.cookie = name + "=" + value + expires + "; path=/" + domain;
        },
        get:function (name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ')
                    c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0)
                    return unescape(c.substring(nameEQ.length, c.length));
            }
            return null;
        },
        remove:function (name) {
            $.mbCookie.set(name, "", -1);
        }
    };

    function donate() {
        jQuery.mbCookie.set("mapdonate", true);
        self.location.reload();
    }

    jQuery(function () {
        var hasDonate = <?php echo $donate ?> ;
        if (hasDonate || $.mbCookie.get("mapdonate") === "true" ) {
            jQuery("#donate").remove();
            jQuery("#inlineDonate").remove();
        } else {
            jQuery("#donate").show();
            var timer = 5;
            var closeDonate = setInterval(function () {
                timer--;
                jQuery("#timer").html(timer);
                if (timer == 0) {
                    clearInterval(closeDonate);
                    jQuery("#donate").fadeOut(600, jQuery(this).remove)
                }
            }, 1000)
        }
    });
</script>

<!--END DONATE POPUP-->

<script type="text/javascript">

    function getFromMetatags(title){
        if (typeof ID3 == "object") {
            ID3.loadTags(document.audioURL, function () {
                var info = {};
                info.title = ID3.getTag(document.audioURL, "title");
                info.artist = ID3.getTag(document.audioURL, "artist");
                info.album = ID3.getTag(document.audioURL, "album");
                info.track = ID3.getTag(document.audioURL, "track");
                if(info.title)
                    jQuery("[name='audiotitle']").val(info.title + " - " +info.artist);
                else
                    jQuery("[name='audiotitle']").val(title);
            })
        }
    }

    tinyMCEPopup.onInit.add(function(ed) {

        var selection = ed.selection.getNode();
        ed.selection.select(selection,true);
        var $selection = jQuery(selection);

        var url= "";
        var title = "";
        var isExcluded = false;
        var excluded = "";

        var map_element = $selection.find("a[href *= '.mp3']");
        if (map_element.length){
            selection = ed.selection.select(map_element.get(0),true);
            $selection = jQuery(selection);
        }else if($selection.prev().is("a[href *= '.mp3']")){
            selection = ed.selection.select($selection.prev().get(0),true);
            $selection = jQuery(selection);
        }
        url = document.audioURL = $selection.attr("href");
        title = $selection.html();
        isExcluded = $selection.hasClass("<?php echo $exclude_class ?>");

        var $desc = $selection.next(".map_params");
        console.debug($desc)
        var metadata = $selection.metadata();

        if(metadata.volume)
            metadata.volume =  parseFloat(metadata.volume)*10;

        if(jQuery.isEmptyObject(metadata)){
            var defaultmeta = {
                showVolumeLevel:<?php echo empty($showVolumeLevel) ? false : $showVolumeLevel ?>,
                showTime:<?php echo $showTime ?>,
                showRew:<?php echo $showRew ?>,
                width:"<?php echo $width ?>",
                skin:"<?php echo $skin ?>",
                animate:<?php echo $miniAudioPlayer_animate ?>,
                loop:false,
                downloadable:<?php echo $downloadable ? "true" : "false" ?>,
                downloadable_security:<?php echo $downloadable_security ? "true" : "false" ?>,
                volume:parseFloat(<?php echo $volume ?>)*10
            };
            jQuery.extend(metadata,defaultmeta);
        }

        jQuery.extend(metadata, {exclude:isExcluded});

        jQuery("[name='url']").val(url);

        var getFromMeta = <?php echo $metadata ?>;

        jQuery("[name='audiotitle']").val(title);

        for (var i in metadata){
            if(typeof metadata[i] == "boolean"){
                if(metadata[i] == true)
                    jQuery("[name="+i+"]").attr("checked",  "checked");
            }else{
                jQuery("[name="+i+"]").val(metadata[i]);
            }
        }

        var form = document.forms[0];
        var isEmpty = function(value) {
                return (/^\s*$/.test(value));
            },

            encodeStr = function(value) {
                return value.replace(/\s/g, "%20")
                    .replace(/"/g, "%22")
                    .replace(/'/g, "%27")
                    .replace(/=/g, "%3D")
                    .replace(/\[/g, "%5B")
                    .replace(/\]/g, "%5D")
                    .replace(/\//g, "%2F");
            },

            insertCode = function(e){

                var map_params = "{";
                if(jQuery("[name='skin']").val().length>0)
                    map_params+="skin:'"+jQuery("[name='skin']").val()+"', ";
                map_params+="animate:"+(jQuery("[name='animate']").is(":checked") ? "true" : "false")+", ";
                if(jQuery("[name='width']").val().length>0)
                    map_params+="width:'"+jQuery("[name='width']").val()+"', ";
                if(jQuery("[name='volume']").val().length>0)
                    map_params+="volume:"+ jQuery("[name='volume']").val()/10 +", ";
                map_params+="autoplay:"+(jQuery("[name='autoplay']").is(":checked") ? "true" : "false")+", ";
                map_params+="loop:"+(jQuery("[name='loop']").is(":checked") ? "true" : "false")+", ";
                map_params+="showVolumeLevel:"+(jQuery("[name='showVolumeLevel']").is(":checked") ? "true" : "false")+", ";
                map_params+="showTime:"+(jQuery("[name='showTime']").is(":checked") ? "true" : "false")+", ";
                map_params+="showRew:"+(jQuery("[name='showRew']").is(":checked") ? "true" : "false")+", ";
                map_params+="downloadable:"+(jQuery("[name='downloadable']").is(":checked") ? "true" : "false")+", ";
                map_params+="downloadablesecurity:"+(jQuery("[name='downloadablesecurity']").is(":checked") ? "true" : "false")+", ";
                map_params+="id3: false";
                map_params+="}";
                map_params = map_params.replace(", }", "}");

                var isExcluded = jQuery("[name='exclude']").is(":checked") ? "<?php echo $exclude_class ?> " : "";

                var map_a = "<a id='mbmaplayer_"+new Date().getTime()+"' class=";
                map_a += "\"mb_map " + isExcluded + map_params + "\" ";
                map_a += "href=\""+jQuery("[name='url']").val()+"\">";
                map_a+=jQuery("[name='audiotitle']").val();
                map_a+="</a>";
                ed.execCommand('mceInsertContent', 0, map_a);

                if($desc.length)
                    $desc.remove();

                /*
                 var map_desc="<span class='map_params' style='display:block; width: 100px;font-family: arial, sans-serif; padding: 5px; border-radius: 7px; background: #6f6f6f;color:#fff; text-decoration: none'> ▶ custom player</span>";
                 if(!isExcluded)
                 ed.execCommand('mceInsertContent', 0, map_desc);
                 */

                tinyMCEPopup.close();

                return false;
            };

        form.onsubmit = insertCode;
        tinyMCEPopup.resizeToInnerSize();
    });
</script>
</body>
</html>
