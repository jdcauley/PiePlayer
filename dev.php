<!DOCTYPE html>
<html>
<head>
	<title>PiePlayer 2.0</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<!-- <link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/bootstrap-responsive.css"> -->
	<link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
	<!--  <link rel="stylesheet" href="/assets/css/player.css"> -->
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  	<script src="http://vjs.zencdn.net/c/video.js"></script>
  	<script src="assets/js/video-playlist.js"></script>
  <style>
	.playlist-wrapper{
		width: 640px !important;
		overflow-x: scroll;
	}
	.playlist-wrapper img{
  		width: 100px;
  		height: auto;
  		margin: 270px 5px 0px;
	}
  </style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span12">
	<video id="vid1"
         class="video-js vjs-default-skin"
         controls
         preload="auto"
         width="640"
         height="264"
         poster=""
         data-setup='<?php include ('playlist/exp.php'); ?>'>
		<p>Video Playback Not Supported</p>
	</video>
	</div>
	</div>
	</div>
</body>
</html>
