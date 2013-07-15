<?php
$config = new stdClass;

$config->env = 'dev';

// Analytics
$config->ga = 'UA-XXXXXX-X';

// SEO and namimg
$config->site_name = "Your New Site";
$config->site_desc = "";
$config->site_keywords = "";
$config->author = "";
$config->current_url = "http://" . $_SERVER["SERVER_NAME"]. $_SERVER["REQUEST_URI"];

// Directory helpers
$config->site_url = "http://" . $_SERVER['HTTP_HOST'];
$config->assets = $config->site_url . '/assets';



if ( $config->env == 'dev' ) {
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
}
