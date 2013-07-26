<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="I'm a 23-year old web developer, designer and photographer from Rotterdam, The Netherlands. Check out some of my recent work!">
	<meta name="keywords" content="paul, huisman, rotterdam, photography, portfolio, fotografie, travel, photoshop, hoppinger, drupal, wordpress, design, web, development, online, internet, html, css">
	<meta name="author" content="Paul Huisman">
	<title>Paul Huisman Online - Web Development, Photography and Design</title>
	<link rel="stylesheet" type="text/css" href="css/colorbox.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-1.1.0.css" />
	<link rel="stylesheet" type="text/css" href="css/paul.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/hover_intent.js"></script>
	<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="js/Dinot.font.js"></script>
	<script type="text/javascript" src="js/Whitney.font.js"></script>
	<script type="text/javascript" src="js/jcycle.js"></script>
	<script type="text/javascript" src="js/paul.js"></script>
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
</head>
<body class="flickr">
<div id="wrapper">
	<div id="container">		
		<header>
			<div class="topbar">
				<div class="fill">
					<div class="container">
						<h3 class="home-link"><a href="#home" onclick='javascript:goToByScroll("container");'>Paul Huisman</a></h3>
						<ul>
							<li><a href="#photography" onclick='javascript:goToByScroll("photography");'>Photography</a></li>
							<li><a href="#web" onclick='javascript:goToByScroll("web");'>Webdevelopment</a></li>
							<li><a href="flickr-field/">Flickr Field for ACF</a></li>
						</ul>
						<ul class="nav secondary-nav">
							<li><a id="email_me" href="javascript:;">Contact me</a></li> 
						</ul>
					</div>
				</div>
			</div>
		</header>
		
		<section id="content">
			<div class="content">
				<div class="intro-image">Paul Huisman - Webdeveloper en fotografie in Rotterdam</div>
				<h1 class="dinot-font bigintro">Hi, I'm Paul. Nice to meet you!</h1>
				<h2 class="dinot-font introtext" id="photography">I'm a 24-year old web developer, designer and photographer from Rotterdam, The Netherlands.</h2>
				
				<?php 
				$photos_array = array(
					'drakens'           => 'Drakensbergen, South Africa',
					'hyena'           => 'Hyena, Kruger Park',
					'pumba'           => 'Warthog, Kruger Park',
					'zebra'           => 'Zebra, Hluhwluhe National Park',
					'blyde'           => 'Blyde River Canyon, South Africa',
					'kudu'           => 'Female Kudu, Kruger Park',
					'gili_air'           => 'Tropical Paradise - Gili Air',
					'urban1'             => 'Urban Photography Gent, Belgium',
					'chiangmai_hdr'      => 'Chiang Mai, Thailand in HDR',
					'lines'              => 'Lines in the airport',
					
					'bikes_rdam'         => 'Bikes along the Maas in Rotterdam',
					
					'urban2'             => 'Urban Photography Gent, Belgium',
					
					
					'church-tekapo-yeah' => 'Church, New Zealand',
					'sunset-aus'		 => 'Sunset, Denham - Australia',
					'komodohdr'			 => 'Komodo Island, Indonesia',
					'blenheim-tree' 	 => 'Blenheim, New Zealand',
					'melb' 				 => 'Melbourne, Australia',
					'volkswagen' 		 => 'Old Volkswagen, Chiang Mai - Thailand',
					'greenp' 			 => 'The Green Pools, Western Australia',
					'dalai' 			 => 'Buddha Statue, Chiang Mai - Thailand',
					'sugarloaf'			 => 'Sugarloaf Rock, Western Australia',
					'rb'				 => 'Routeburn, New Zealand',
					'wanaka-lake'		 => 'Lake Wanaka, New Zealand',
					'gili3' 			 => 'Gili Air, Indonesia',
					'duns' 				 => 'Dunsborough, Western Australia',
					'rb2' 				 => 'Routeburn Track, New Zealand',
					'fremantle' 		 => 'Fremantle, Australia',
					'laosrocks' 		 => 'Limestone cliffs, Laos',
					'tekapo'			 => 'Lake Tekapo, New Zealand',
					'thai-falls'		 => 'Chiang Mai, Thailand',
				); 
				?>
				
				<?php $count = 0; ?>
				<div id="carousel_wrapper">
					<div id="main_carousel">
						<?php foreach ($photos_array as $item_file => $item_descr) : ?>
							<?php if ($count % 6 == 0 ) echo '<div class="carousel_row">'; ?>
								<div class="recentwork-item">
									<a class="lightbox" onClick="_gaq.push(['_trackEvent', 'Photography', 'Open Big', '<?php print $item_descr; ?>']);" href="images/photos/big/<?php print $item_file; ?>.jpg" title="<?php print $item_descr; ?>" rel="group1">
										<div class="item-image-bg"></div>
										<img class="item-image" src="images/photos/thumbs/<?php print $item_file; ?>.jpg" alt="<?php print $item_descr; ?>" />
										<div class="item-layover"></div>
										<div class="item-description web"><?php print $item_descr; ?></div>							
									</a>
								</div>
							<?php if ($count  % 6 == 5 ) echo '</div>'; ?>
							<?php $count++; ?>
						<?php endforeach; ?>
					</div>
					<div id="c_nav"></div>
					<div id="prev_s">prev</div>				
					<div id="next_s">next</div>	
				</div>

				<h2 class="dinot-font web-intro">Be sure to check out some of the internet projects I've been involved in below!</h2>
				
				<div class="web-section clearfix" id="web">
					<div class="web-item">
						<a href="http://www.omroepwest.nl" onClick="_gaq.push(['_trackEvent', 'Outgoing', 'Websites', 'Omroep West']);">
							<div class="web-image">
								<img class="item-image" src="images/web/ow3.jpg" alt="Omroep West" />
								<div class="web-item-layover"></div>
							</div>
						</a>
						<h3><a href="http://www.dewillem.nl" onClick="_gaq.push(['_trackEvent', 'Outgoing', 'Websites', 'Omroep West']);">Omroep West</a></h3>
						<div class="web-item-description">
							<strong>Client:</strong>&nbsp;RTV West<br />
							<div class="live"><strong>Live:</strong>&nbsp;01-10-2012</div>
	
						</div>
					</div>
					<div class="web-item second">
						<a href="flickr-field" onClick="_gaq.push(['_trackEvent', 'Outgoing', 'Websites', 'Flickr Field']);">
							<div class="web-image">
								<img class="item-image" src="images/web/flickr.png" alt="Flickr Field" />
								<div class="web-item-layover"></div>
							</div>
						</a>
						<h3><a href="flickr-field" onClick="_gaq.push(['_trackEvent', 'Outgoing', 'Websites', 'Flickr Field']);">Flickr Field</a></h3>
						<div class="web-item-description">
							I made a flickr field add-on for the popular Wordpress plugin <a href="http://advancedcustomfields.com/" target="_blank">Advanced Custom Fields</a>.<br />
							<div class="live"><strong>Live:</strong>&nbsp;06-05-2012</div>
						
						</div>
						
					</div>
					<div class="web-item">
						<a href="http://www.dewillem.nl">
							<div class="web-image">
								<img class="item-image" src="images/web/dewillem.jpg" alt="De Willem" />
								<div class="web-item-layover"></div>
							</div>
						</a>
						<h3><a href="http://www.dewillem.nl">De Willem</a></h3>
						<div class="web-item-description">
							<strong>Client:</strong>&nbsp;De Willem (middle school)<br />
							<div class="live"><strong>Live:</strong>&nbsp;25-08-2012</div>
	
						</div>
					</div>
					<div class="web-item second">
						<a href="http://www.servicepuntsmw.nl">
							<div class="web-image">
								<img class="item-image" src="images/web/smw.jpg" alt="Servicepunt SMW" />
								<div class="web-item-layover"></div>
							</div>
						</a>
						<h3><a href="http://www.servicepuntsmw.nl">Servicepunt SMW</a></h3>
						<div class="web-item-description">
							<strong>Client:</strong>&nbsp;Servicepunt SMW<br />
							<div class="live"><strong>Live:</strong>&nbsp;20-09-2011</div>
	
						</div>
					</div>
					
				</div>
				
				<div style="clear:both"></div>
				
				<h2 class="dinot-font web-intro special">My specialties are Drupal, Wordpress, jQuery and SEO/SEA optimalisation!</h2>
				
				
			</div>
		</section>
		
		<section id="footer">
			<div class="optimalized">&copy; Paul Huisman <?php echo date('Y');?>  |  This website has been optimalized for <a href="http://www.findmebyip.com/litmus/">CSS3-valid</a> browsers.</div>
		</section>
	</div>
</div>
</body>
</html>
