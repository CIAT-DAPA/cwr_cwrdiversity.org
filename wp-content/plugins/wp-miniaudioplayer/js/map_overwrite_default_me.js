/*******************************************************************************
 *
 * map_overwrite_default_me
 * Author: pupunzi
 * Creation date: 12/05/15
 *
 ******************************************************************************/
var miniAudioPlayer_defaults = miniAudioPlayer_defaults || {};

function replaceDefault(){

	var me = jQuery(".mejs-container").not(".wp-audio-playlist .mejs-container");
	me.each(function(){
		var audioUrl = jQuery("audio", jQuery(this)).attr("src");
		var id = new Date().getTime();
		var map = jQuery("<a/>").attr({href:audioUrl, id: id }).html("audio");
		jQuery(this).replaceWith(map);
		jQuery("#" + id).mb_miniPlayer(miniAudioPlayer_defaults);
	});

	var me_pl = jQuery(".wp-audio-playlist");
	me_pl.each(function(){

		var el = jQuery(this);
		var pl = jQuery("<div/>").addClass("map_pl_container");

		var albumInfo = jQuery(".wp-playlist-current-item .wp-playlist-caption", el);
		var infoBox = jQuery("<div/>").addClass("map_album_infobox");

		albumInfo.find("span").each(function(){
			var meta = jQuery(this);
			var span = jQuery("<span/>").html(meta.html());

			if(meta.is(".wp-playlist-item-title"))
				span.addClass("map_item_title").append(", ");

			if(meta.is(".wp-playlist-item-artist"))
				span.addClass("map_item_artist");

			if(meta.is(".wp-playlist-item-album"))
				span.addClass("map_item_album");

			infoBox.append(span);
		});

		el.before(pl);
		pl.append(infoBox);

		var audioUrl = jQuery("audio", jQuery(this)).attr("src");
		var id = new Date().getTime();
		var map = jQuery("<a/>").attr({href:audioUrl, id: id }).html("audio");
		pl.append(map);

		var opt = {};
		jQuery.extend(opt, miniAudioPlayer_defaults, {width: "100%"} );
		var pl_player = jQuery("#" + id).mb_miniPlayer(opt);

		var me_pl_elements = jQuery(".wp-playlist-item", jQuery(this));

		var me_pl_container = jQuery("<div/>").addClass("pl_items_container");
		pl.append(me_pl_container);

		var counter = 0;
		me_pl_elements.each(function(){
			counter ++;
			var elementsUrl = jQuery("A",this).attr("href");
			var title = jQuery(".wp-playlist-item-title", this).html() || "";
			var author = jQuery(".wp-playlist-item-artist", this).html() || "";

			var pl_el = jQuery("<div/>").addClass("pl_item").html( counter + ". " + title + author).css({cursor: "pointer"});

			if(counter == 1){

				pl_el.addClass("sel");
				jQuery("#" + id).mb_miniPlayer_changeFile({mp3: elementsUrl}, title  +  author);

			}

			if(miniAudioPlayer_defaults.downloadable){
				var dwnload = pl_player[0].player.createDownload(elementsUrl, title);
				pl_el.append(dwnload);

				jQuery(".mbMiniPlayer .map_download", pl).remove();
			}

			pl_el.on("click", function(){

				jQuery(".sel", pl).removeClass("sel");

				jQuery(this).addClass("sel");

				var player = jQuery("#" + id);
				player.mb_miniPlayer_changeFile({mp3: elementsUrl}, title  +  author);
				player.mb_miniPlayer_play();
			});

			me_pl_container.append(pl_el);
		});

		el.remove();

	})

}
