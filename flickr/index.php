<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="I'm a 23-year old web developer, designer and photographer from Rotterdam, The Netherlands. Check out some of my recent work!">
	<meta name="keywords" content="paul, huisman, rotterdam, photography, portfolio, flickr, fotografie, travel, photoshop, hoppinger, drupal, wordpress, design, web, development, online, internet, html, css">
	<meta name="author" content="Paul Huisman">
	<title>Paul Huisman Online - Flickr photos</title>
	<link rel="stylesheet" type="text/css" href="../css/colorbox.css" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-1.1.0.css" />
	<link rel="stylesheet" type="text/css" href="../css/paul.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" src="../js/cufon-yui.js"></script>
	<script type="text/javascript" src="../js/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="../js/Dinot.font.js"></script>
	<script type="text/javascript" src="../js/Whitney.font.js"></script>
	<script type="text/javascript" src="../js/jcycle.js"></script>
	<script type="text/javascript" src="../js/hover_intent.js"></script>
	<script type="text/javascript" src="../js/paul.js"></script>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-7746100-4']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	<?php require_once ('../inc/phpFlickr.php'); ?>
</head>
<body class="flickr-page">
<div id="wrapper">
	<div id="container">		
		<header>
			<div class="topbar">
				<div class="fill">
					<div class="container">
						<h3 class="home-link"><a href="/fresh-look/#home" onclick='javascript:goToByScroll("container");'>Paul Huisman</a></h3>
						<ul>
							<li><a href="/fresh-look/#photography" onclick='javascript:goToByScroll("photography");'>Photography</a></li>
							<li><a href="/fresh-look/#web" onclick='javascript:goToByScroll("web");'>Webdevelopment</a></li>
							<li class="active"><a href="/fresh-look/#web" onclick='javascript:goToByScroll("web");'>Flickr Photos</a></li>
						</ul>
						<ul class="nav secondary-nav">
							<li><a href="mailto:paulhuisman88@gmail.com">Contact me</a></li> 
						</ul>
					</div>
				</div>
			</div>
		</header>
		
		<section id="content">
			<div class="content">
				<div class="intro-image flickr-logo">Paul Huisman - Webdeveloper en fotografie in Rotterdam</div>
				<h1 class="dinot-font bigintro">My Flickr photos</h1>
				<div class="clearfix"></div>
				<div id="content" class="photos">
					<?php
					$phpFlickrObj = new phpFlickr('9d00e0003329e7b7c119a55d7ec2534a'); 
					$phpFlickrObj->enableCache("fs", "/customers/paulhuisman-online.nl/paulhuisman-online.nl/httpd.www/fresh-look/flickr/cache");
					$user = $phpFlickrObj->people_findByUsername('Paul Huisman');
					$user_url = $phpFlickrObj->urls_getUserPhotos($user['id']);
					// $photos = $phpFlickrObj->people_getPublicPhotos($user['id'], NULL, NULL, 66);
					?>
					
					<?php $flickrsets = $phpFlickrObj->photosets_getList($user['id']); ?>
					
					<div id="filter">
						<span class="filter_intro">Pick your category:</span>
						<a href="#" ref="all" class="active">All</a>
						<?php 
						foreach ($flickrsets['photoset'] as $key => $set) {
							print '<a href="#" ref="'.$set['id'].'">'.$set['title'].'</a>';
							$photoset[$set['id']] = $phpFlickrObj->photosets_getPhotos($set['id']);
						}
						
						?>
					</div>
					
					<div id="photographs" class="clearfix">
						<?php
						foreach ($photoset as $setkey => $setdata) {
							foreach ($setdata['photoset']['photo'] as $photo) {
								echo "<a class='".$setkey." flickrphoto' rel='".$setkey."' href=\"" . $phpFlickrObj->buildPhotoURL($photo, "Large") .  "\" alt='".$photo[title]."'>";  
								   echo "<span class='black'></span><img rel='".$setkey."' src=\"" . $phpFlickrObj->buildPhotoURL($photo, "Square") .  "\"  width=\"75\" height=\"75\" alt='".$photo[title]."' />";  
								echo "</a>";  
							}
						}
						?>
					</div>
				</div>
					
				
			</div>
		</section>
		
		<section id="footer">
			<div class="optimalized">&copy; Paul Huisman 2012  |  This website has been optimalized for <a href="http://www.findmebyip.com/litmus/">CSS3-valid</a> browsers.</div>
		</section>
	</div>
</div>
</body>
</html>
