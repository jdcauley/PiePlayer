	$(document).ready(function(){
	// Get the Playlist from the xml file
	$.ajax({
        type: "GET",
			url: "../../playlist/playlist.php",
			dataType: "xml",
			success: function(xml) {
				$(xml).find('track').each(function(){
					var mytitle = $(this).find('title').text();
 					var myartist = $(this).find('artist').text();
					var mymp3 = $(this).find('mp3').text();
					var myduration = $(this).find('duration').text();
					var myposter = $(this).find('poster').text();
					
					// Convert the XML nodes into JSON formatted strings
					var playlist = JSON.stringify({ title: mytitle, artist : myartist, mp3 : mymp3, duration : myduration, poster : myposter });

					//console.log(playlist);
					
					// Convert the JSON formatted strings into JSON objects and add to playlist
					var playlistObject = $.parseJSON(playlist);
					myPlaylist.add(playlistObject);
			});
		}
	});

	 // WhiteNoise Player instance
		var whiteNoise = new CirclePlayer("#theplayer",
			{
			}, {
				cssSelectorAncestor: "#cp_container"
		});
	
		// WhiteNoise Playlist instance
		var myPlaylist = new jPlayerPlaylist({
			jPlayer: "#theplayer",
			cssSelectorAncestor: "#cp_container",
		}, [ 
				// Playlist is created when the page loads via ajax
			], 
		{
			playlistOptions: {
			  autoPlay: false, // self explanatory
			  loopOnPrevious: false, //  If loop is active, the playlist will loop back to the end when executing previous()
			  shuffleOnLoop: true, //  If loop and shuffle are active, the playlist will shuffle when executing next() on the last item
			  enableRemoveControls: false, // Adds an x that allows user to remove songs from playlist
			  displayTime: 0, // how fast the playlist transitions on page load
			  addTime: 0, // transition time when adding a song
			  removeTime: 0, // transition time when removing a song
			  shuffleTime: 0 // transition time when shuffling playlist
			},
			swfPath: "../scripts",
			supplied: "mp3", // add the file format extension you will be streaming
			wmode: "window"
	
		});
	});