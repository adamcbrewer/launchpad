<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
	   More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title></title>
	
	<!-- META -->
	<meta http-equiv="Content-Language" content="en-gb">
	<meta http-equiv="imagetoolbar" content="false">
	<meta name="MSSmartTagsPreventParsing" content="true">
	<meta name="robots" content="all">
	
	<meta name="Author" content="">
	<link type="text/plain" rel="author" href="humans.txt" />
	<meta name="Copyright" content="">
	
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	<!-- FACEBOOK OPEN GRAPH -->
	<meta property="og:title" content=""/> <!-- subject title -->
	<meta property="og:type" content=""/> <!-- More information: http://developers.facebook.com/docs/opengraph/ -->
	<meta property="og:image" content=""/> <!-- image must be at least 50px by 50px with a maximum ratio of 3:1 -->
	<meta property="og:url" content=""/> <!-- URL of the page being liked -->
	<meta property="og:site_name" content=""/> <!-- A human-readable name for your site -->
	<meta property="og:description" content=""/> <!-- basic site description -->
	<!-- A comma-separated list of Facebook user IDs or application IDs -->
	<meta property="fb:admins" content=""/> <!-- admin ID -->
	<meta property="fb:app_id" content=""/> <!-- app ID -->
	
	
	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link href="assets/css/normalize.css" rel="stylesheet"> <!-- https://github.com/necolas/normalize.css/blob/master/normalize.css -->
	<!-- <link href="assets/css/reset.css" rel="stylesheet"> --> <!-- reset with clearfix -->
	<link href="assets/css/core.css" rel="stylesheet"> <!-- core stylesheet -->

	<script src="assets/js/modernizr.min.js?v=2.0.6"></script> <!-- Always check for latest version -->

</head>
<body>
	
	<div id="wrapper">
			
		<header id="header">
			
			<nav id="navigation">
				
			</nav> <!-- #navigation -->
			
		</header> <!-- #header -->
			
		<section id="content">
			
			<article>
				
			</article>
				
		</section> <!-- #content -->
		
		<footer id="footer">
			
		</footer> <!-- #footer -->
			
	</div> <!-- #wrapper -->
	
	<!-- Grab Google mootools lib, fall back to local if offline -->
	<script src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.1/mootools-yui-compressed.js"></script>
	<script>window.MooTools || document.write('<script src="assets/js/mootools-core.min.js?v=1.4.1"><\/script>')</script>
	<script src="assets/js/script.js"></script>

	<script type="text/javascript" charset="utf-8">
		/*
		 * Init global object (for creating base_url methods, etc.)
		 */
		var site = {basePath: "<?php echo $_SERVER['HTTP_HOST']; ?>"};

		/*
		 * Add a data-attribute of the user-agent to <html>
		 *
		 * Target with: html[data-useragent*="Chrome/13.0"][data-platform="Win32"] ...
		 */
		var b = document.documentElement;
		b.setAttribute("data-useragent",  navigator.userAgent);
		b.setAttribute("data-platform", navigator.platform );
	</script>


	<!-- Change UA-XXXXX-X to be your site's ID -->
	<script>
	window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
	Modernizr.load({
		load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
	});
	</script>
	
	
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
		chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	
</body>
</html>
