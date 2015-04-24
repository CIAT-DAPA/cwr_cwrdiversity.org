=== mb.miniAudioPlayer - an HTML5 audio player for your mp3 files ===

Contributors: pupunzi
Tags: audio player, mp3, HTML5 audio, audio, music, podcast, jquery, pupunzi, mb.components
Requires at least: 3.3
Tested up to: 3.7
Stable tag: 1.4.0
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=DSHAHSJJCQ53Y

Transform your mp3 audio files into a nice, small light HTML5 player

== Description ==

**This plug-in let you transform any mp3 file uploaded inside a post into an essential small HTML5 audio player with:**

* volume control
* seeking control
* title bar
* rewind button
* mute button
* play button

[youtube http://www.youtube.com/watch?v=B8Dr4aUNGgo]

Links:

* demo: http://pupunzi.com/mb.components/mb.miniAudioPlayer/demo/demo.html
* video: http://youtu.be/B8Dr4aUNGgo
* pupunzi blog: http://pupunzi.open-lab.com
* pupunzi site: http://pupunzi.com

If you are using others HTML5 audio plugins (like Haiku) there could be conflicts with mb.miniAudioPlayer. You should deactivete the others befor using it.

Other WP plugins:

* **wp-YTPlayer.** A Chromeless video player to play your Youtube videos as background of any WP page or post.
http://wordpress.org/extend/plugins/wpmbytplayer/

== Installation ==

Extract the zip file and upload the contents to the wp-content/plugins/ directory of your WordPress® installation, and then activate the plugin from the plugins page.

== Screenshots ==

1. The settings panel.
2. The player closed with a black skin.
3. The player opened with a green skin.
4. The edit properties button available in the post editor toolbar.
5. The properties window in the post editor.

== How it works: ==

1. Activate the mb.miniAudioPlayer plugin via the WP plugin panel;
2. Edit a post or a page, click on the Upload/Insert media link and choose an mp3 file;
3. place it into the post wherever you want to show the player.
4. save the post and browse it; the player will show instead of the link at the file.

to change the player default settings go to the mb.miniAudioPlayer settings panel (you can find it under the "settings" section of the WP backend).

**Options:**

* @ width = (int) the width in pixel of the player once opened.
* @ skin = the color of the player interface (black, blue, orange, red, gray and green).
* @ volume = (int) the initial volume of the player.
* @ showVolumeLevel = a boolean to show or hide the volume control.
* @ showTime = a boolean to show or hide the time counter.
* @ showRew = a boolean to show or hide the rewind control.
* @ autoPlay = (available only for the TinyMCE editor plugin) a boolean to set in play the player once the page is loaded.
* @ downloadable = a boolean to show the download button next to the player.
* @ excluded = a string containing the CSS class for audio links that should not be converted into player.

== Changelog ==

= 1.4.0 =
* Download now get file size
* fixed a font problem on the player

= 1.3.9 =
* Feature: No more injection of extra code into the tinyMCE while customizing the player.
* Optimization of the download method both in JS and PHP.

= 1.3.8 =
* Bug fix: The "Don't render" option was not working anymore.
* Feature: Removed the gray textarea for the custom player from the post editor.

= 1.3.7 =
* Bug fix: on multiple Ajax call the player was initialized each time. Solved.

= 1.3.6 =
* The player initializer is call on every Ajax success callback to show players loaded via Ajax.


= 1.3.5 =
* Updated TinyMCE js header.

= 1.3.4 =
* Updated CSS for IE10 compatibility.

= 1.3.3 =
* Bug fix: Updated for IE10 compatibility.

= 1.3.2 =
* Bug fix: Fixed an issue with the volume bar that was displaying too many bars.

= 1.3.1 =
* Bug fix: Fixed a bug introduced on v. 1.3.0.

= 1.3.0 =
* Update: Updated to jPlayer 2.3.0.
* Updated the CSS file.
* Introduced the player customization tool (not yet available).
* Feature: refined the ID3 metatag analyzer.

= 1.2.9 =
* Bug fix: fixed an event bug.
* Feature: refined the download to work both with cURL and readfile() methods depending on the web server settings.

= 1.2.8 =
* Feature: Made a more solid map_download.php to prevent inconsistent downloads.

= 1.2.7 =
* Feature: Added FAQ section on the plugin page.
					 Better display of volumes bar.
					 if the ID3 meta is empty than the original title is used.

= 1.2.6 =
* Bug fix: If the player was instanced inside a table, the table disappear once the player was stopped.

= 1.2.5 =
* Removed the base64 encoding from the TinyMCE parameters; this should fix the false positive malicious advice from server that someone had.

= 1.2.2 =
* Bug fix:
	Fixed a bug that prevents the player works on IE.
	Added the "loop" option in the player customization.
	Setting the width to 0 the player will show in compact mode.

= 1.2.1 =
* Bug fix:
	Fixed a bug that prevents the player works if the "downloadable" option was setted to false.

= 1.2 =
* Features added:
	Added a new "Get title from metadata" option that will retrieve the title of the audio file from the id3 meta data; it works only if the file is on the same domain and it falls back to the default content if failed.

= 1.1.1 =
* Bug fix:
	Fixed a bug in the settings page that prevent the "animate" property to be set.

* Features added:
	Added the possibility to remove the customization button in the post editor TinyMCE (in some installations this generate a permission bug preventing the post editor to work).

= 1.1 =
* Features added:
	1. Added a new parameter to allow download only for registered users (available both on the general settings window and on the post editor player customization window).
	2. Added a new parameter to set the player always opened (available both on the general settings window and on the post editor player customization window).

= 1.0.1 =
* Bug fix: solved the inconsistent playing on iOs devices with multiple audio files.

= 1.0 =
* Fixed a bug that disabled seeking by clicking on the time bar..

= 0.9.9 =
* Updated for jQuery 1.9 compatibility.

= 0.9.8 =
* Fixed a potential bug for servers that doesn't allow Camel-case for folders in path.

= 0.9.7 =
* general bugfix (donate window in TinyMCE)

= 0.9.6 =
* bug fix: Solved a problem on changing the title of the audio player via the TinyMCE editor window.

= 0.9.5 =
* Improve: Now you can set the with of the player as percentage; it is not a liquid behaviour as the width will be transformed into pixel unit but it allow a responsive behavior cross devices.

= 0.9.4 =
* Fix: The name of the downloadable file is now the one of the original file.

= 0.9.3 =
* bug fix: Prevent conflicts with other components using jPlayer.

= 0.9.2 =
* bug fix: IE8 didn't read the controls Font face.

= 0.9 =
* bug fix: solved a major bug that was preventing the correct behaviour within the TinyMCE editor window.

= 0.8 =
* bug fix: the donate pop up was showing even after the donation.
* bug fix: the Tiny popup setting didn't work in certain cases.

= 0.7 =
* added tweet and FB share on plugin settings.

= 0.6 =
* Better TinyMce Editor (the toolbar button get active only if the cursor is on a .mp3 link.
* Better download icon.

= 0.5 =
* Added download action that directly download the audiofile.

= 0.4 =
* Added "downloadable" property to let download the audio file via a little arrow next to the player.
* Added "exclude" property to exclude a link from the rendering of the player.
Both are available as general options or as specific option via the popup window in the post editor TinyMCE.
* refined the appearance of the player.

= 0.3 =
* Major bug-fix for the TinyMCE editor plugin --- important update!!

= 0.2 =
* Added a customize tool in the post/page editor. You can customize the properties for each player by selecting it in the post editor and clicking on the miniAudioPlayer button to edit properties.

= 0.1.2 =
* Fixed a bug for preferences checks (always true).

= 0.1.1 =
* Fixed a wrong path for the settings file in the plugin list.

= 0.1 =
* First release

== Frequently Asked Questions ==

= I installed the plugin and the players are correctly displayed but the customization button doesn't show in the post editor =

 You have to check the "Activate the player customizer in the post editor" to make it available in the post editor.

= I inserted my mp3 file using the add media button but even when I select or click on the inserted link the customization button is disabled =

Be sure that once you inserted the file you set the "Attachment Display Settings -> Link" to "media file" in the media file window.

= I installed the plugin and now I can't display the post editor in "visual" mode anymore =

This is probably due to insufficient user permissions on your server that cause an error loading the TinyMCE mb.miniAudioPlayer component. You should try download the component locally on your computer, unzip it and upload the folder via FTP in the remote plugins folder.

= I installed the plugin but on the page there's only the link to the mp3 file and not the player =

Probably there's a conflict with some other installed plugin or even with the theme you are using.
Try first deactivating all the other plugins; if it works then reactivate them one by one to find out which is getting in conflict; if it doesn't work then there's a conflict with your theme.

= The player is working fine but it display differently from the examples you gave =

The appearance of the player is all defined in the "miniplayer.css" file located in the "css" folder of the plugin root. You maybe have some CSS classes that are overwriting the plugin ones.
You can inspect the player using the developer tools within the browser to find out which class is overwritten and fix the problem changing the theme css.

= It doesn't work on Firefox and neither on IE, what is the problem? =

On both those browsers the player falls back to the Flash® solution instead of the standard HTML5; That because FF doesn't accept mp3 files natively and IE is a mess :-).
So if the player doesn't work on them probably is your Flash plugin that is not update or is not working correctly.

= I checked the downloadable option but when I click the download button it opens a new window with the mp3 file instead of downloading it =

That happens because the audio file you are pointing to is on a different domain. The downloader doesn't work for files that are not on your site repository.
