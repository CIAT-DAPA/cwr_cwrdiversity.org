<?php
/*
   Plugin Name: IP Host blocker
   Plugin URI: http://dev.liajnad.se/blocker
   Description: Blocks Certain host from viewing content without logging in. Instead hosts listed in <A href="/wp-admin/options-general.php?page=tz-host-blocker/blocker.php">blacklist</A> will be redirected to the login page page or other page!
   Author: Thomas L
   Version: 1.1.3
   Author URI: http://dev.liajnad.se
   
   # This plugin is free software; you can redistribute it and/or
   # modify it under the terms of the GNU Lesser General Public
   # License as published by the Free Software Foundation; either
   # version 2.1 of the License, or (at your option) any later version.
   #
   # This plugin is distributed in the hope that it will be useful,
   # but WITHOUT ANY WARRANTY; without even the implied warranty of
   # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
   # See the GNU lesser General Public License for more details.
*/

#require_once ( dirname(__FILE__) . '/inc.swg-plugin-framework.php');
require_once ( 'inc.swg-plugin-framework.php');

class HostBlocker extends HostBlocker_SWGPluginFramework {

function blocker_main()
{
global $myHostBlocker;

if( !is_user_logged_in() && ($myHostBlocker->g_opt['blocker_activate'])== "on")
{
    $redir = true;
        $container = $_SERVER['REMOTE_ADDR'];
        $deniedips = explode(" ", $myHostBlocker->g_opt['blocker_ip']);


#	if (!is_array($blocker_options)) {
#				$blocker_options = unserialize($blocker_options);}
#	$deniedips = explode(" ", $blocker_options['block_list']);


        $wl = "wp-";
        if ($myHostBlocker->g_opt['blocker_override_xmlrpc'] == 1) $wl = $wl.",xmlrpc";
        if ($myHostBlocker->g_opt['blocker_override_rss'] == 1) $wl = $wl.",feed";
        if ($myHostBlocker->g_opt['blocker_override_images'] == 1) $wl = $wl.",gif";

        $whitelist=split(",",$wl);

        foreach ($whitelist as $whiteurl)
              {
                        if ( strpos($_SERVER[REQUEST_URI], $whiteurl) == TRUE )
                           {
                                        $redir=false;
                           }
                   }

                   if ($redir !==false )
                   {
                        foreach ($deniedips as $deniedip)
                                {
                                if (eregi($deniedip, $container))
                                        {
                                        $redir == true;
                                        $url=$myHostBlocker->g_opt['blocker_uri'];
                                        $msgenable=$myHostBlocker->g_opt['blocker_message_enabled'];
                                        $msg=$myHostBlocker->g_opt['blocker_popup'];
                                        $custom_page=$myHostBlocker->g_opt['blocker_message'];
#                                       $msg-enable=$blocker_options['custom-msg'];
### Redir or popup?

                if ($msgenable == 1)
                        {
                           if (strlen($msg)>0) {
?>
<BODY onLoad="javascript: alert('<?=$msg?>')">
<?php
}
                                echo "$custom_page";

}

else
{                                       header('Location: ' . $url); }
                                        die;
                                                } } }

}
}

 function ApplyHostBlocker() {


}

/**
       * Convert option prior to save ("COPTSave").
         * !!!! This function is used by the framework class !!!!
         */
        function COPTSave($optname) {
                switch ($optname) {
                        case 'mamo_excludedpaths':                            return $this->LinebreakToWhitespace($_POST[$optname]);                        default:                                return $_POST[$optname];
                } // switch
        }


        /**
         * Convert option before HTML output ("COPTHTML").
         * *NOT* used by the framework class
         */
        function COPTHTML($optname) {
                $optval = $this->g_opt[$optname];
                switch ($optname) {
                        case 'mamo_excludedpaths':
                                return $this->WhitespaceToLinebreak($optval);
                        case 'mamo_pagetitle':
                                return htmlspecialchars(stripslashes($optval));
                        case 'mamo_pagemsg':
                                return htmlspecialchars(stripslashes($optval));
                        default:
                                return $optval;
                } // switch
        }


function PluginOptionsPage() {
 $this->AddContentMain(__('Activate/Deactivate HostBlocker',$this->g_info['ShortName']), "
                        <table border='0'><tr>
                                <td width='130'>
                                        <p style='font-weight: bold; line-height: 2em;'>
                                                <input id='radioa1' type='radio' name='blocker_activate' value='on' " . ($this->COPTHTML('blocker_activate')=='on'?'checked="checked"':'') . " />
                                                <label for='radioa1'>".__('Activated',$this->g_info['ShortName'])."</label>
                                                <br />
                                                <input id='radioa2' type='radio' name='blocker_activate' value='off' " . ($this->COPTHTML('blocker_activate')!='on'?'checked="checked"':'') . " />
                                                <label for='radioa2'>".__('Deactivated',$this->g_info['ShortName'])."</label>
                                        </p>
                                </td>
                                <td>
                                        <div class='submit' style='text-align: left;'>
                                                <input type='submit' name='update-options-".$this->g_info['ShortName']. "' class='button-primary' value='" . __('Save Changes',$this->g_info['ShortName']) . "' />
                                        </div>
                                </td>
                        </tr></table>
                        ");
                $this->AddContentMain(__('Hosts/URI',$this->g_info['ShortName']), "
                        <table width='100%' cellspacing='2' cellpadding='5' class='editform'> 
                        <tr valign='center'> 
                                <th align=left width='250px' scope='row'><label for='blocker_ip'>".__('IP',$this->g_info['blocker_ip']).":</label></th> 
                                <td width='100%'><input style='font-weight:bold;' name='blocker_ip' type='text' id='blocker_ip' value='" . htmlspecialchars(stripslashes($this->g_opt['blocker_ip'])) . "' size='60' />Separate IP or part of subnet with space</td>
                        </tr>
                        <tr valign='center'> 
                                <th align=left width='250px' scope='row'><label for='blocker_uri'>".__('URI',$this->g_info['URI']).":</label></th> 
                                <td width='100%'><input style='font-weight:bold;' name='blocker_uri' type='text' id='blocker_uri' value='" . htmlspecialchars(stripslashes($this->g_opt['blocker_uri'])) . "' size='60' />Redirection URI  (/wp-login.php)</td>
</table>
                        ");

                $this->AddContentMain(__('Popup',$this->g_info['ShortName']), "
                        <table width='100%' cellspacing='2' cellpadding='5' class='editform'> 
  <td width='130'>
                        <p style='margin-top: 20px;'>
 <th align=left width='250px' scope='row'><label for='blocker_popup'>".__('Message',$this->g_info['Popup']).":</label></th> 
                                <td width='100%'><input  name='blocker_popup' type='text' id='blocker_popup' value='" . htmlspecialchars(stripslashes($this->g_opt['blocker_popup']))
 . "' size='60' />Empty message disables popup</td>
                        </p>
                                </td>
                        </table>
                        ");
               $this->AddContentMain(__('Custom Message? Will override redirection URI above!',$this->g_info['ShortName']), "
                        <table width='100%' cellspacing='2' cellpadding='5' class='editform'> 
                        <tr valign='center'> 
  <p style='margin-top: 20px;'>
                                <input name='blocker_message_enabled' type='checkbox' id='blocker_message_enabled' value='1' " . ($this->COPTHTML('blocker_message_enabled')=='1'?'checked="checked"':'') . " />                                 <label for='blocker_message_enabled'>".__('Enable Custom Message',$this->g_info['ShortName'])."</label>

  <tr valign='top'> 
                                <th align=left width='150px' scope='row'><label for='blocker_message'>".__('Message',$this->g_info['ShortName']).":</label></th> 
                                <td width='100%'><textarea style='font-size: 90%; width:95%;' name='blocker_message' id='blocker_message' rows='15' >" . $this->COPTHTML('blocker_message') . "</textarea>
                                <p class='info'>".__('html can be used.',$this->g_info['ShortName'])."</p>

                        </tr>
</table>
                        ");

  $this->AddContentMain(__('Override Options!',$this->g_info['ShortName']), "
                        <table width='100%' cellspacing='2' cellpadding='5' class='editform'> 
Selecting one or more buttons here let your blocked hosts access theese services.<br><br>
                        <tr valign='center'> 

                                <input name='blocker_override_rss' type='checkbox' id='blocker_override_rss' value='1' " . ($this->COPTHTML('blocker_override_rss')=='1'?'checked="checked"':'') . " />                                 <label for='blocker_override_rss'>".__('RSS',$this->g_info['ShortName'])."</label> </tr><br>

                                <tr><input name='blocker_override_xmlrpc' type='checkbox' id='blocker_override_xmlrpc' value='1' " . ($this->COPTHTML('blocker_override_xmlrpc')=='1'?'checked="checked"':'') . " />                                 <label for='blocker_override_xmlrpc'>".__('XMLRPC (Used for Wordpress for iPhone)',$this->g_info['ShortName'])."</label> </tr><br>

                                <input name='blocker_override_images' type='checkbox' id='blocker_override_images' value='1' " . ($this->COPTHTML('blocker_override_images')=='1'?'checked="checked"':'') . " />                                 <label for='blocker_override_images'>".__('Images (Used to display gif/jpg/png on custom page )',$this->g_info['ShortName'])."</label> </tr><br>
</table>                
                        ");     


                // Sidebar, we can also add individual items...
                $this->PrepareStandardSidebar();
                $this->GetGeneratedOptionsPage();

}

}
   
function blocker_main() {
global $myHostBlocker;
 $myHostBlocker->ApplyHostBlocker();

$myHostBlocker->blocker_main();
}

add_action ( 'send_headers', 'blocker_main' );



if( !isset($myHostBlocker)  ) {
        // Create a new instance of your plugin that utilizes the WordpressPluginFramework and initialize the instance.
        $myHostBlocker = new HostBlocker();

        $myHostBlocker->Initialize(
                // 1. We define the plugin information now and do not use get_plugin_data() due to performance.
                array(
                        # Plugin name
                                'Name' =>                       'HostBlocker',
                        # Author of the plugin
                                'Author' =>             'Thomas Lindholm',
                        # Authot URI
                                'AuthorURI' =>          'http://dev.liajnad.se/',
                        # Plugin URI
                                'PluginURI' =>          'http://dev.liajnad.se/blocker',
                        # Support URI: E.g. WP or plugin forum, wordpress.org tags, etc.
                                'SupportURI' =>         'http://wordpress.org/tags/tz-blocker',
                        # Name of the options for the options database table
                                'OptionName' =>         'HostBlocker',
                        # Old option names to delete from the options table; newest last please
                                'DeleteOldOpt' =>       array('HostBlocker1', 'HostBlocker2'),
                        # Plugin version
                                'Version' =>            '1.1.3',
                        # First plugin version of which we do not reset the plugin options to default;
                        # Normally we reset the plugin's options after an update; but if we for example
                        # update the plugin from version 2.3 to 2.4 und did only do minor changes and
                        # not any option modifications, we should enter '2.3' here. In this example
                        # options are being reset to default only if the old plugin version was < 2.3.
                                'UseOldOpt' =>          '2.3',
                        # Copyright year(s)
                                'CopyrightYear' =>      '2010-2010',
                        # Minimum WordPress version
                                'MinWP' =>                      '2.9',
                        # Do not change; full path and filename of the plugin
                                'PluginFile' =>         __FILE__,
                        # Used for language file, nonce field security, etc.
                                'ShortName' =>          'HostBlocker',
                        ),

                // 2. We define the plugin option names and the initial options
                array(
                        'blocker_activate' =>                      'off',
                        'blocker_ip' =>         '192.168.0.1',
                        'blocker_uri' =>                      '/wp-admin',
                        'blocker_popup' =>             'Logged In Users Only',
                        'blocker_message' =>                       '<center>Please follow <a href=/wp-login.php>this link</a> to login </center>',
                        'blocker_message_enabled' =>                           '',
                        'blocker_override_rss' => '',
                        'blocker_override_xmlrpc' => '',
                        'blocker_override_images' => '',
                ));

}
        $myHostBlocker->ApplyHostBlocker();



?>