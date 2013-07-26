<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="How-to-use guide of the Flickr field for the Wordpress plugin Advanced Custom Fields">
	<meta name="keywords" content="paul, huisman, flickr, advanced custom fields, hoppinger, sets, galleries, set, gallery, acf, flickr field, fotografie, travel, photoshop, hoppinger, drupal, wordpress, design, web, development, online, internet, html, css">
	<meta name="author" content="Paul Huisman">
	<title>Advanced Custom Fields - Flickr | by Paul Huisman</title>
	<link rel="stylesheet" type="text/css" href="../css/colorbox.css" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-1.1.0.css" />
	<link rel="stylesheet" type="text/css" href="../css/flickr-field-info.css" />
	<link type="text/css" rel="stylesheet" href="../css/SyntaxHighlighter.css"></link>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" src="../js/cufon-yui.js"></script>
	<script type="text/javascript" src="../js/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="../js/Dinot.font.js"></script>
	<script type="text/javascript" src="../js/Whitney.font.js"></script>
	<script type="text/javascript" src="../js/shCore.js"></script>
	<script type="text/javascript" src="../js/shBrushPhp.js"></script>
	<script type="text/javascript" src="../js/flickr.js"></script>
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
<body class="flickr-field-info">
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
								<li class="active"><a href="flickr-field/">Flickr Field for ACF</a></li>
								<li><a href="http://www.hoppinger.com">Hoppinger</a></li>
								<li><a id="email_me" href="javascript:;">Contact me</a></li> 
							</ul>
						</div>
					</div>
				</div>
			</header>
			
			<section id="content">
				<div class="content_wrap">
					<div class="intro-image flickr-logo">Paul Huisman - Webdeveloper en fotografie in Rotterdam</div>
					<h1 class="dinot-font bigintro">Flickr for Advanced Custom Fields</h1>
					<div class="clearfix">
						<h2 class="dinot-font clearfix intro">Why use Flickr field?</h2>
						<div class="flickr-field-content intro">
							Using <a href="http://www.flickr.com">Flickr.com</a> for your photos is a great way to keep them organized online. Making sets on Flickr is a great way to group your own photo content. Flickr's galleries enables you to group content of  users other then yourself. This field will create a dropdown of all Flickr sets or galleries based on a given user ID and API Key.
						</div>	
						<div class="right">
							<a href="flickr_field.zip" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Flickr Field']);">
								<div class="flickr-field-content download">
									<h2 class="dinot-font no-border">Download</h2>
									<a href="flickr_field.zip" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Flickr Field']);">Download the Flickr field &rarr;</a>
								</div>
							</a>
						</div>
					
						<div class="flickr-field-content">
							<h2 class="dinot-font clearfix">How to set it up</h2>
							<p>First of, this isn't gonna work if you haven't downloaded and enabled <a href="http://www.advancedcustomfields.com" target="_blank">Advanced Custom Fields (ACF)</a> first. You also need a Flickr account to create sets and/or galleries. If you haven't got one yet, <a href="http://www.flickr.com" target="_blank">create one here</a> (you can use your Google or Facebook account).</p>
							<p>Now that you have ACF and a Flickr account you're ready to <a href="flickr_field.zip" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Flickr Field']);">download my Flickr Field</a> if you haven't already. Create a folder called <u>fields</u> in <em>wp-content/themes/[YOUR THEME]</em> and extract the flickr folder in there.<br />Make sure you do this right, or the field won't work.</p>
							
							<p>The .ZIP contains the following files:<br />
								<ul>
									<li><strong>flickr.php</strong> - This contains the Flickr field add-on for Advanced Custom Fields</li>
									<li><strong>phpFlickr.php</strong> - <a href="http://phpflickr.com/" target="_blank">phpFlickr</a> is a class written by Dan Coulter in PHP to act as a wrapper for Flickr's API. In short, we use this class to retrieve data from Flickr.</li>
									<li><strong>cache</strong> - This folder will be filled with phpFlicker's caching</li>
								</ul>
							</p>
							
							
							<p>You have to register the field with <em>register_field($name, $path)</em> in order to use it. The $path is the direct path to the fields directory in your theme. Put the code below in your <em>functions.php</em></p>
				
<pre name="code" class="php">
if(function_exists('register_field')) {	
	register_field('Flickr_field', dirname(__File__) . '/fields/flickr/flickr.php'); 
}

</pre>
						
							<p>Remember that you can include any user IDs you want (aslong as they have public sets available). You just need an Flickr API key to make calls to the Flickr API.</p>
							
							<p><strong>OPTIONAL:</strong> If you're going to use this field several times in your website, you can use <em>add_option</em> to create an option for the flickr_api_key. If this exist it will be filled in automatically when making a new Flickr field. Copy the code below and replace [YOUR API KEY] with your flickr api key. <a href="http://www.flickr.com/services/apps/create/apply/" target="_blank">Apply for a key.</a></p>

<pre name="code" class="php">
add_option( 'flickr_api_key', '[YOUR API KEY]' );

</pre>
										
						<p></p>
						</div>	
						
						<div class="flickr-field-content">
							<h2 class="dinot-font clearfix">How to use it</h2>
							
							<p>Go to Advanced Custom Fields in the menu and create a new Field Group. Use <em>Add field</em> to add a new field. Select Flickr field on Field type. Fill in your user ID and api Key like the screenshot below (click on the image for enlargement). Use the ACF Rules to add the field group to a post (obviously you can also select a page or custom post-type of your choice here).</p>
							
							<p><a class="larger" href="Flickr-field-1.png" title="Adding a new Flickr field (set)"><img class="main" src="Flickr-field-1.png" alt="Creating a new Flickr field" /></a></p>
						
							<p>Now that you've added the field you can go ahead and edit an existing post or add a new one and select a flickr set by clicking on the row with the desired set. You can deselect an active set by clicking on it.</p>
							
							<p><a class="larger" href="Flickr-field-2.png" title="Select a Flickr set on your edit post page"><img class="main" src="Flickr-field-2.png" alt="Select a Flickr set on your edit post page" /></a></p>
						
							<p>Congrats, you added a flickr set to your post. Now you probably want to display the Flickr data in your template. Use the following code to display the flickr set (or gallery) images:</p>
						
<pre name="code" class="php">
// Get the Flickr data by using get_field
$flickr_set = get_field('flickr_set');

// Check if an set or gallery ID exists
if (isset($flickr_set['id'])) {

	// Require phpFlickr
	require_once(dirname(__FILE__) . '/fields/flickr/phpFlickr.php');
	$f = new phpFlickr($flickr_set['api_key']);
	
	// Enable phpFlickr caching
	$f->enableCache("fs", dirname(__FILE__) . '/fields/flickr/cache');

	// Get all data based on Flickr ID (set or gallery)
	switch ($flickr_set['flickr_content']) {
		
		case 'sets':
			$photos = $f->photosets_getPhotos($flickr_set['id']);
			foreach ($photos['photoset']['photo'] as $photo) {	
				echo '<a href="'. $f->buildPhotoURL($photo, 'large') .'"><img src="'. $f->buildPhotoURL($photo, 'square') .'"/></a>';
			}
		break;
		
		case 'galleries':
			$photos = $f->galleries_getPhotos($flickr_set['id']);
			
			foreach ($photos['photos']['photo'] as $photo) {
				echo '<a href="'. $f->buildPhotoURL($photo, 'large') .'"><img src="'. $f->buildPhotoURL($photo, 'square') .'"/></a>';
			}
		break;
	}
		
}
 
</pre>
							
							<p>Use the <a href="http://www.flickr.com/services/api/">Flickr API documentation</a> and scroll the phpFlickr class to look for different functions and/or parameters.</p>
						</div>
						
						<div class="flickr-field-content">
							<h2 class="dinot-font clearfix">To-do list</h2>
							<ul>
								<li>Multi-select sets</li>
								<li>Handle more then 50 sets</li>
								<li>Tags, favorites and more</li>
							</ul>
						</div>	
						
						<div class="flickr-field-content">
							<h2 class="dinot-font clearfix">Fork me on Github</h2>
							Do you have some cool ideas and want to contribute to my custom field? <a href="https://github.com/phuisman88/ACF">Fork me on Github</a>.
						</div>	
					</div>
				</div>
			</section>
			
			<section id="footer">
				<div class="optimalized">&copy; Paul Huisman | <a href="http://www.hoppinger.com">Hoppinger</a> 2012</div>
			</section>
		</div>
	</div>
</body>
</html>
