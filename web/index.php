<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">

	<title></title>

	<? // META ?>
	<meta name="robots" content="all">

	<link type="text/plain" rel="author" href="humans.txt" />

	<meta name="description" content="">
	<meta name="keywords" content="">

	<? // FACEBOOK OPEN GRAPH ?>
	<meta property="og:title" content=""/> <? // subject title ?>
	<meta property="og:type" content=""/> <? // More information: http://developers.facebook.com/docs/opengraph/ ?>
	<meta property="og:image" content=""/> <? // image must be at least 50px by 50px with a maximum ratio of 3:1 ?>
	<meta property="og:url" content=""/> <? // URL of the page being liked ?>
	<meta property="og:site_name" content=""/> <? // A human-readable name for your site ?>
	<meta property="og:description" content=""/> <? // basic site description ?>

	<? // Mobile viewport optimized: j.mp/bplateviewport ?>
	<? // Remove 'initial-scale' to prevent mobile devices zooming-in ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="assets/css/reset.css" rel="stylesheet"> <? // reset with clearfix ?>
	<link href="assets/css/core.css" rel="stylesheet"> <? // core stylesheet ?>

	<script src="assets/js/libs/modernizr-2.6.2.custom.js"></script> <? // Always check for latest version ?>

	<? // Async Google Analytics ?>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-XXXXXXXX-X']); <? // Add correct analytics ID ?>
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

</head>
<body data-base-url="<?= $_SERVER['HTTP_HOST'] ?>">

	<div id="wrapper">

	</div> <!-- /wrapper -->

	<script src="assets/js/script.js" async defer></script>

</body>
</html>
