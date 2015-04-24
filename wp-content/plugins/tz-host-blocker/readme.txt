=== Plugin Name ===
Contributors: thomaz
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3473187
Tags: redirection, hosts, admin, access,ip
Requires at least: 2.7.0
Tested up to: 3.2
Stable tag: 1.1.3

Lets you redirect request from certain hosts to a page of your choice. Logged
in users are still allowed.

== Description ==

Lets you redirect unlogged in  users depending om which IP they are coming from.
For example redirect all users from a certain proxy to the login page or a
customized page, which makes anonymous visits from that proxy impossible.


== Installation ==

1. Upload plugin to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Configure the plugin from the settings menu.

== Frequently Asked Questions ==

= I want to display a custom message before sending the user to the login page  =

Create a html page not managed by WP and redirect the user to the page, enter
the message on the page and create a link to the login page.

= Can I enter hostnames instead of IP adresses? =

No this is not supported yet, however it will be in future releases.

= What do you use this plugin for? =

I use it to control access to my blog from my corporate proxys as I dont want
all my collegues to look at my blog without my knowledge.


== Screenshots ==

1. Settings page

== Changelog ==

= 1.1.3 =
* Checked compatibility with up to 3.2

= 1.1.2 =
* Facelift of settings page

= 1.1.1 =
* Removed loading of streams/gettext.php

= 1.1.0 =
* Changed the way it loads pluggable.php
* Empty pop-up message will disable pop-up 

= 1.0.1 =
* Added pop-up message if using custom html page. 


