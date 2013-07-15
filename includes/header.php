<? require($_SERVER['DOCUMENT_ROOT'] . "/config.php"); ?>
<!doctype html>
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">
	<meta name="author" content="<?= $config->author ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= $config->site_name ?></title>

	<meta name="robots" content="all">
	<link type="text/plain" rel="author" href="<?= $config->site_url ?>/humans.txt" />
	<link rel="icon" type="image/png" href="<?= $config->assets ?>/img/favicon.ico">
	<meta name="description" content="<?= $config->site_desc ?>">
	<meta name="keywords" content="<?= $config->site_keywords ?>">

	<meta property="og:title" content="<?= $config->site_name ?>"/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content="<?= $config->current_url ?>"/>
	<meta property="og:site_name" content="<?= $config->site_name ?>"/>
	<meta property="og:description" content="<?= $config->site_desc ?>"/>

	<link href="<?= $config->assets ?>/css/core.css">
	<script src="<?= $config->assets ?>/js/libs/modernizr.js"></script>

	<? if ( $config->env !== 'dev' ) : ?>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', '<?= $config->ga ?>');
			ga('send', 'pageview');
		</script>
	<? endif; ?>

</head>
<body data-base-url="http://<?= $_SERVER['HTTP_HOST'] ?>">

	<div class="wrapper">
