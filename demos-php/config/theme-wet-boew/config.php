<?php

	$_ROOT_SERVER_DIR = "/wet-boew";
	//$_ROOT_SERVER_DIR .= "-php";
	
	//override variables set in the dist config folder here to personalize the site
	$_DIST_CONFIG_LOC_ = $_ROOT_SERVER_DIR . "/dist-php/config/theme-wet-boew/config.php";
	include $_SERVER['DOCUMENT_ROOT'] . $_DIST_CONFIG_LOC_;
	
	/*	Override variables in the dist-php config files here for the specific site */
	
	//enable if deployed from github. Comment out if demos deployed from zip file
	
	$_SITE['wb_site_href_eng'] = $_ROOT_SERVER_DIR . "/demos-php/index.php"; 
	$_SITE['wb_site_href_fra'] = $_ROOT_SERVER_DIR . "/demos-php/index.php"; 

	//Modify the language selection link to point to whatever script suits your 
	//site or keep the default language script
	$_SITE['gcwu_cmblang_href_eng'] = $_SITE['gcwu_cmblang_href_fra'] = $_SITE['wb_php_dist_folder'] . "/langselect/lang.php"; 

?>