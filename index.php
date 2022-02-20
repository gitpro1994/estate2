<?php 
/**
 * @package      : KA Dashboard
 * @version      : v4.2
 * @developed by : Aghakarim Karimov Mahharam oghlu
 * @developed by : Cavid Shixiyev Chapar oghlu
 * @support      : aghakarim.karimov@gmail.com
 * @phone        : +994998812999
 * @system       : index.php
 * @copyright    : Aghakarim Karimov Mahharam oghlu
 */

define('BASEPATH', true);
include_once("core/config/database.php");
include_once("core/helpers/general_helper.php");

(settings('timezone')) ?  date_default_timezone_set(settings('timezone')) : '';
sayt_ziyaretci();

if(site_status('status')==0)
{
$page = (isset($_GET['page'])) ? clean($_GET['page']) : ''; 	


$massiv = [
				'404',
				'home',
				'logout',
				'login',
				'items',
				'dashboard',
				'profile',
				'about',			
				'uploadfile',			
				'file-control',			
				'contact',
				'details',
				'add_listing',
				'menu',
				(site_status('status')==1) ? 'construct' : '',
				'cookies',
				'set_language',
				'cp_policy'
			];

	if (strlen($page)==0) 
	{
		if (file_exists("modules/home.php")) 
		{
 			include_once "modules/home.php";
		}
		else
		{
			include_once "modules/404.php";
		}
	}
	
	elseif (in_array($page,$massiv)) 
	{
		if (file_exists("modules/".$page.".php")) 
		{
			include_once 'modules/'.$page.'.php'; 
		}
		else
		{
			include_once "modules/404.php";
		}
	}
	
	elseif($page=="") 
	{
		if (file_exists("modules/home.php")) 
		{
 			include_once "modules/home.php";
		}
		else
		{
			include_once "modules/404.php";
		}
	}
	else
	{
		if (file_exists("modules/404.php")) 
		{
 			include_once 'modules/404.php';
		}
		else
		{
			include_once "error.php";
		}
	}
}
else
{
		include_once 'modules/construct.php';
}

?>
