<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>

	<title>PiePlayer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/bootstrap-responsive.css">
	<link rel="stylesheet" href="/assets/css/player.css">
				
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="/assets/js/circleplayer.min.js"></script>
	
</head>
<body>
   <header id="banner" class="navbar navbar-static-top" role="banner">
   	<div class="navbar-inner">
   		<div class="container">
     		<a class="brand" href="/">PiePlayer</a>
     		  <nav id="nav-main" class="nav-collapse" role="navigation"> 
	      		<ul class="nav pull-right">
					  </ul>
					</nav>
   			</div>
   		</div>
   	</header> 
   	
		<div id="cp_container" class="container main">
			<div class="row">
				<div class="span4" align="center">			
					<div id="theplayer" class="cp-jplayer"></div> <!-- Required and calls the poster -->										
						 <a href="javascript:;" class="jp-previous" tabindex="1"><img width="15px" src="assets/img/backward.png"></a>
						 <a href="#" class="cp-play" tabindex="1"><img src="assets/img/play.png"></a></li>
						 <a href="#" class="cp-pause" style="display:none;" tabindex="1"><img src="assets/img/pause.png"></a>
						 <a href="javascript:;" class="jp-next" tabindex="1"><img width="15px" src="assets/img/forward.png"></a>					 
					</div>
				</div>
				<div class="row">
					<div class="span4">
						<div class="jp-playlist"> <!-- Playlist -->
							<ul class="track-list">
								<li></li> <!-- Empty <li> so your HTML conforms with the W3C spec -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		
		
				<footer class="container ">
					<div class="row">
						<div class="span12">

						</div>
					</div>
				</footer>
		
		
<script src="/assets/js/playlist.js"></script>
<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/apps.js"></script>
</body>
</html>
