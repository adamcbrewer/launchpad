<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">
	<meta name="author" content="">

	<? // Mobile viewport optimized: j.mp/bplateviewport ?>
	<? // Remove 'initial-scale' to prevent mobile devices zooming-in ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Your New Project</title>

	<? // Meta ?>
	<meta name="robots" content="all">

	<link type="text/plain" rel="author" href="humans.txt" />

	<meta name="description" content="">
	<meta name="keywords" content="">

	<? // Social sharing ?>
	<meta property="og:title" content=""/> <? // subject title ?>
	<meta property="og:type" content=""/> <? // More information: http://developers.facebook.com/docs/opengraph/ ?>
	<meta property="og:image" content=""/> <? // image must be at least 50px by 50px with a maximum ratio of 3:1 ?>
	<meta property="og:url" content=""/> <? // URL of the page being liked ?>
	<meta property="og:site_name" content=""/> <? // A human-readable name for your site ?>
	<meta property="og:description" content=""/> <? // basic site description ?>

	<link href="assets/css/core.css" rel="stylesheet"> <? // core stylesheet ?>

	<script src="assets/js/libs/modernizr-2.6.2.custom.js"></script> <? // Always check for latest version ?>

	<?
		// Async Google Analytics
		// https://developers.google.com/analytics/devguides/collection/analyticsjs/
	?>
	<script type="text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-XXXX-Y'); <? // correct account number ?>
		ga('send', 'pageview');
	</script>

</head>
<body data-base-url="http://<?= $_SERVER['HTTP_HOST'] ?>">

	<div class="wrapper">

	</div>

	<script src="assets/js/script.js"></script>

</body>
</html>
