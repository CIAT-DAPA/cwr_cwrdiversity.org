<?php

// create the admin menu
// hook in the action for the admin options page
add_action('admin_menu', 'add_miniAudioPlayer_option_page');

function add_miniAudioPlayer_option_page()
{
    // hook in the options page function
    add_options_page('miniAudioPlayer', 'mb.miniAudioPlayer', 'manage_options', __FILE__, 'miniAudioPlayer_options_page');
}

function miniAudioPlayer_options_page()
{ // Output the options page
    global $miniAudioPlayer_donate, $miniAudioPlayer_getMetadata, $miniAudioPlayer_version, $miniAudioPlayer_width, $miniAudioPlayer_skin, $miniAudioPlayer_animate, $miniAudioPlayer_volume, $miniAudioPlayer_showVolumeLevel, $miniAudioPlayer_showTime, $miniAudioPlayer_showRew, $miniAudioPlayer_excluded, $miniAudioPlayer_download, $miniAudioPlayer_download_security, $miniAudioPlayer_customizer ?>

    <!--DONATE POPUP-->
    <style>
        #donate {
            position: fixed;
            top: 20%;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 30px;
            text-align: center;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            z-index: 10000;
            display: none
        }

        #donateContent {
            position: relative;
            margin: 30px auto;
            background: rgba(77, 71, 61, 0.88);
            color: white;
            padding: 30px;
            text-align: center;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            width: 450px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5)
        }

        #donate h2 {
            font-size: 30px;
            line-height: 33px;
        }

        #donate p {
            margin: 30px;
            font-size: 16px;
            line-height: 22px;
            display: block;
            float: none;
        }

        #donate p#follow {
            margin: 30px;
            font-size: 16px;
            line-height: 33px;
        }

        #donate p#timer {
            padding: 5px;
            font-size: 20px;
            line-height: 33px;
            background: #231d0c;
            border-radius: 30px;
            color: #ffffff;
            width: 30px;
            margin: auto;
        }

        #donateTxt {
            display: none;
        }

        hr {
            border: none;
            height: 1px;
            background: #dfd490
        }
    </style>
    <div id="donate">
        <div id="donateContent">
            <h2>mb.miniAudioPlayer</h2>

            <p>If you like it and you are using it then you should consider a donation <br> (€15,00 or more) :-)</p>

            <p><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=DSHAHSJJCQ53Y"
                  target="_blank" onclick="donate()">
                    <img border="0" alt="PayPal" src="https://www.paypalobjects.com/en_US/IT/i/btn/btn_donateCC_LG.gif">
                </a></p>

            <p id="timer">&nbsp;</p>
            <br>
            <br>
            <button onclick="donate()">I already donate</button>
        </div>
    </div>
    <script type="text/javascript">

        function donate() {
            jQuery("input[name=miniAudioPlayer_donate]").val("true");
            jQuery("#optionsForm").submit();
        }

        jQuery(function () {

            /*todo: to be removed ---------------------------------------------------------------*/
            jQuery.mbCookie = {
                set: function (name, value, days, domain) {
                    if (!days) days = 7;
                    domain = domain ? "; domain=" + domain : "";
                    var date = new Date(), expires;
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toGMTString();
                    document.cookie = name + "=" + value + expires + "; path=/" + domain;
                },
                get: function (name) {
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
                remove: function (name) {
                    jQuery.mbCookie.set(name, "", -1);
                }
            };

            if (typeof(Storage) !== "undefined" && localStorage.map_donate != "null") {
                jQuery.mbCookie.set("mapdonate", true);
                localStorage.map_donate = null;
                self.location.reload();
            }
            /*end --- todo: to be removed ------------------------------------------------------------------------*/

            if (<?php echo $miniAudioPlayer_donate;?>) {
                jQuery("#donate").remove();
                jQuery("#inlineDonate").remove();
                jQuery("#donateTxt").show()
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

    <style>
        #wpwrap {
            background: #ebf2f4 url("<?php echo plugins_url( 'images/bgnd.jpg', __FILE__ );?>");
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        .form-table th {
            font-weight: bold !important;
            border-bottom: 1px solid gray;
        }

        .form-table td {
            border-bottom: 1px solid gray;
        }

        .submit {
            text-align: right;
        }
    </style>

    <div class="wrap" style="width:800px">

    <a href="http://pupunzi.com"><img style="margin-top:30px;"
                                      src="<?php echo plugins_url('images/logo.png', __FILE__);?>"
                                      alt="Made by Pupunzi"/></a>

    <h2>mb.miniAudioPlayer Settings</h2>

    <p>You're using mb.miniAudioPlayer v. <?php echo $miniAudioPlayer_version;?> by <a href="http://pupunzi.com">Pupunzi</a>.
    </p>

    <div id="share" style="position: absolute; left:650px; top:20px">

        <a href="https://twitter.com/share" class="twitter-share-button"
           data-url="http://wordpress.org/extend/plugins/wp-miniaudioplayer/"
           data-text="I'm using the mb.miniAudioPlayer WP plugin" data-via="pupunzi"
           data-hashtags="HTML5,wordpress,plugin">Tweet</a>
        <script>!function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, "script", "twitter-wjs");</script>

        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-like" data-href="http://wordpress.org/extend/plugins/wp-miniaudioplayer" data-send="false"
             data-layout="button_count" data-width="450" data-show-faces="true" data-font="arial"></div>
    </div>

    <div class="updated fade">
        <p style="line-height: 1.4em;">Thanks for downloading mb.miniAudioPlayer!</p>

        <p id="inlineDonate" style="position: relative; display:block" class="alignrightt">
            If you like it and you are using it<br>then you should consider a donation (€15,00 or more) :-)<br><br>
            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=DSHAHSJJCQ53Y"
               target="_blank" onclick="donate()"><img border="0" alt="PayPal"
                                                       src="https://www.paypalobjects.com/en_US/IT/i/btn/btn_donateCC_LG.gif"></a>
            <br><br><i>If you donate, the start popup will nevermore display.</i><br><br>
        </p>
        <hr>
        <p>Don't forget to follow me on twitter: <a href="https://twitter.com/pupunzi">@pupunzi</a></p>

        <p>Visit my site: <a href="http://pupunzi.com">http://pupunzi.com</a></p>

        <p>Visit my blog: <a href="http://pupunzi.open-lab.com">http://pupunzi.open-lab.com</a></p>

        <p id="donateTxt">Paypal: <a
                href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=DSHAHSJJCQ53Y"
                target="_blank">donate</a></p>
    </div>

    <div class="highlight fade" style="padding: 10px; margin: 0">
        <!-- Begin MailChimp Signup Form -->
        <form action="http://pupunzi.us6.list-manage2.com/subscribe/post?u=4346dc9633&amp;id=91a005172f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <label for="mce-EMAIL" style="font-weight: bold">Subscribe to my mailing list<br>to stay in touch.</label>
            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="your email address" required>
            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
        </form>
        <!--End mc_embed_signup-->
    </div>


    <form id="optionsForm" method="post" action="options.php">
    <?php wp_nonce_field('update-options'); ?>

    <h2>Default settings:</h2>

    <p>Here you define the default settings for all the audio links in your Wordpress site.</p>

    <p>You can overwrite the single player settings by selecting the audio link in the post editor and clicking
        on the mb.miniAudioPlayer button on the top of the TinyMCE editor toolbar.</p>
    <hr>
    <input type="hidden" name="miniAudioPlayer_donate" value="<?php echo $miniAudioPlayer_donate;?> "/>
    <table class="form-table">

    <tr valign="top">
        <th scope="row">Title from meta-data:</th>
        <td>
            <input type="checkbox" name="miniAudioPlayer_getMetadata"
                   value="true" <?php if ($miniAudioPlayer_getMetadata == "true") {
                echo' checked="checked"';
            }?>/>

            <p>Check to retrieve the title from meta-data</p>
        </td>
    </tr>

    <tr valign="top">
        <th scope="row">Choose the skin color:</th>
        <td>
            <select name="miniAudioPlayer_skin">
                <option value="black" <?php if ($miniAudioPlayer_skin == "black") {
                    echo' selected';
                }?> >black
                </option>
                <option value="blue" <?php if ($miniAudioPlayer_skin == "blue") {
                    echo' selected';
                }?>>blue
                </option>
                <option value="orange" <?php if ($miniAudioPlayer_skin == "orange") {
                    echo' selected';
                }?>>orange
                </option>
                <option value="red" <?php if ($miniAudioPlayer_skin == "red") {
                    echo' selected';
                }?>>red
                </option>
                <option value="gray" <?php if ($miniAudioPlayer_skin == "gray") {
                    echo' selected';
                }?>>gray
                </option>
                <option value="green" <?php if ($miniAudioPlayer_skin == "green") {
                    echo' selected';
                }?>>green
                </option>
            </select>

            <p>Set the palyer skin</p>
        </td>
    </tr>

    <tr valign="top">
        <th scope="row">Player animation:</th>
        <td>
            <input type="checkbox" name="miniAudioPlayer_animate"
                   value="true" <?php if ($miniAudioPlayer_animate == "true") {
                echo' checked="checked"';
            }?>/>

            <p>Check to activate the opening / closing animation</p>
        </td>
    </tr>

    <tr valign="top">
        <th scope="row">Set the width:</th>
        <td>
            <input type="text" name="miniAudioPlayer_width" style="width:80px"
                   value="<?php if (!empty($miniAudioPlayer_width)) {
                       echo $miniAudioPlayer_width;
                   }?>"/>

            <p>Set the player width in pixel</p>
        </td>
    </tr>

    <tr valign="top">
        <th scope="row">Set the volume:</th>
        <td>
            <select name="miniAudioPlayer_volume">
                <option value=".2" <?php if ($miniAudioPlayer_volume == ".2") {
                    echo' selected';
                }?> >2
                </option>
                <option value=".4" <?php if ($miniAudioPlayer_volume == ".4") {
                    echo' selected';
                }?>>4
                </option>
                <option value=".6" <?php if ($miniAudioPlayer_volume == ".6") {
                    echo' selected';
                }?>>6
                </option>
                <option value=".8" <?php if ($miniAudioPlayer_volume == ".8") {
                    echo' selected';
                }?>>8
                </option>
                <option value="1" <?php if ($miniAudioPlayer_volume == "1") {
                    echo' selected';
                }?>>10
                </option>
            </select>

            <p>Set the default volume for the player</p>
        </td>
    </tr>

    <tr valign="top">
        <th scope="row">show volume level:</th>
        <td>
            <input type="checkbox" name="miniAudioPlayer_showVolumeLevel"
                   value="true" <?php if ($miniAudioPlayer_showVolumeLevel == "true") {
                echo' checked="checked"';
            }?>/>

            <p>Check to show the volume levels</p>
        </td>
    </tr>

    <tr valign="top">
        <th scope="row">show time info:</th>
        <td>
            <input type="checkbox" name="miniAudioPlayer_showTime"
                   value="true" <?php if ($miniAudioPlayer_showTime == "true") {
                echo' checked="checked"';
            }?>/>

            <p>Check to show the time info</p>
        </td>
    </tr>

    <tr valign="top">
        <th scope="row">show the Rewind button:</th>
        <td>
            <input type="checkbox" name="miniAudioPlayer_showRew"
                   value="true" <?php if ($miniAudioPlayer_showRew == "true") {
                echo' checked="checked"';
            }?>/>

            <p>Check to show the Rewind button</p>
        </td>
    </tr>

    <tr valign="top">
        <th scope="row">Exclude audio links with class:</th>
        <td>
            <input type="text" name="miniAudioPlayer_excluded" style="width:140px"
                   value="<?php if (!empty($miniAudioPlayer_excluded)) {
                       echo $miniAudioPlayer_excluded;
                   } else {
                       echo 'map_excluded';
                   }?>"/>

            <p>Define the class name for the audio liks you don't want to render as player; By default is
                "map_excluded"</p>

            <p><i>You can either manually add this class to the audio links you want to exclude or select
                    the link and check the "Don't render" checkbox of the popup window in the editor
                    page.</i></p>
            <img style="margin-top:10px;" src="<?php echo plugins_url('images/excludeimg.png', __FILE__);?>"
                 alt="exclude image"/>
        </td>
    </tr>

    <tr valign="top">
        <th scope="row">Allow downloads:</th>
        <td>
            <script>
                function manageSecurity(el){

                    var security = jQuery('[name=miniAudioPlayer_download_security]');
                    if(jQuery(el).is(":checked")){
                        security.removeAttr('disabled');
                    }else{
                        security.attr('disabled','disabled');
                        security.removeAttr('checked');
                    }
                }
            </script>
            <input type="checkbox" name="miniAudioPlayer_download" onclick="manageSecurity(this)"
                   value="true" <?php if ($miniAudioPlayer_download == "true") {
                echo' checked="checked"';
            }?>/>

            <p>check to add a download button closed to the player</p>

            <input type="checkbox" name="miniAudioPlayer_download_security" id="miniAudioPlayer_download_security"
                   value="true" <?php if ($miniAudioPlayer_download_security == "true") {
                echo' checked="checked" ';
            }
                if ($miniAudioPlayer_download != "true") {
                    echo' disabled="disabled"';
                }?>/><label for="miniAudioPlayer_download_security" style="color:gray"> Only for registered users</label>
            <p>check to allow downloads only for registered user</p>
        </td>
    </tr>


    <tr valign="top">
        <th scope="row">Activate the player customizer in the post editor:</th>
        <td>
            <input type="checkbox" name="miniAudioPlayer_customizer" value="true" <?php if ($miniAudioPlayer_customizer == "true") {echo' checked="checked"';}?>/>
            <p>check to activate the customization window in the posts and pages TinyMce editor"</p>
        </td>
    </tr>


    </table>

    <p>If you are using others HTML5 audio player plug-ins (like Haiku) there could be conflicts with
        mb.miniAudioPlayer. You should deactivete the others befor using this.</p>
    <input type="hidden" name="page_options"
           value="miniAudioPlayer_donate, miniAudioPlayer_getMetadata, miniAudioPlayer_width, miniAudioPlayer_skin, miniAudioPlayer_animate, miniAudioPlayer_volume, miniAudioPlayer_showVolumeLevel, miniAudioPlayer_showTime, miniAudioPlayer_showRew, miniAudioPlayer_excluded, miniAudioPlayer_download, miniAudioPlayer_download_security, miniAudioPlayer_customizer"/>
    <input type="hidden" name="action" value="update"/>

    <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>"/>
    </p>
    </form>
    </div>
<?php } ?>
