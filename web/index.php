<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<!-- 	
		Make a DNS handshake with a foreign domain, so the connection 
		goes faster when the user eventually needs to access it. 
		This works well for loading in assets (like images) from another domain, 
		or a JavaScript library from a CDN.
	-->
	<link rel="dns-prefetch" href="//ajax.googleapis.com">

	<!-- Hide page from search engines. !IMPORTANT -->
	<meta name="robots" content="noindex">

	<!-- Use the .htaccess and remove these lines to avoid edge case issues. More info: h5bp.com/b/378 -->
	<!-- 
		IE10 does not support plugins, such as Flash, in Metro Mode. 
		If your site requires plugins, you can let users know that via the 
		X-UA-Compatible meta element (requiresActiveX=true), which will prompt them to switch to Desktop Mode.
	-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">

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

	<!-- 
		Signal to search engines and others "Use this URL for this page!" 
		Useful when parameters after a # or ? is used to control the display state of a page.
	-->
	<link rel="canonical" href="">

	<!--
		Enabling your application for pinning will allow IE9 users to add it to their Windows Taskbar and Start Menu.
		Without this rule, Windows will use the page title as the name for your application.
	-->
	<meta name="application-name" content=""> <!-- title -->
	<!-- Toolti-tip that shit, yo'! -->
	<meta name="msapplication-tooltip" content=""> <!-- tooltip description -->
	
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
	<!-- Remove 'initial-scale' to prevent mobile devices zooming-in -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link href="assets/css/reset.css" rel="stylesheet"> <!-- reset with clearfix -->
	<link href="assets/css/core.css" rel="stylesheet"> <!-- core stylesheet -->

	<script src="assets/js/libs/modernizr-2.5.min.js"></script> <!-- Always check for latest version -->

</head>
<body>
	
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6. chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	<div id="wrapper">
			
		<header id="header">
			
			<nav id="navigation">
				
			</nav> <!-- #navigation -->
			
		</header> <!-- #header -->
			
		<section role="main" id="content">
			
			<article>
				
			</article>
				
		</section> <!-- #content -->
		
		<footer id="footer">
			
		</footer> <!-- #footer -->
			
	</div> <!-- #wrapper -->
	
	<script type="text/javascript" charset="utf-8">
		/*
		 * Init global object (for creating base_url methods, etc.)
		 */
		var Site = {
			basePath: "<?php echo $_SERVER['HTTP_HOST']; ?>"
		};

		/*
		 * Add a data-attribute of the user-agent to <html>
		 *
		 * Target with: html[data-useragent*="Chrome/13.0"][data-platform="Win32"] ...
		 */
		var b = document.documentElement;
		b.setAttribute("data-useragent",  navigator.userAgent);
		b.setAttribute("data-platform", navigator.platform );
	</script>

	<script src="assets/js/libs/mootools-core-1.4.1.min.js"></script>
	<script src="assets/js/script.js"></script>


	<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
	mathiasbynens.be/notes/async-analytics-snippet -->
	<script>
		var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
	
	
	
	
</body>
</html>
