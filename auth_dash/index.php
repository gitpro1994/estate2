<?php

/**
 * @package      : KA Dashboard
 * @version      : v4.2
 * @developed by : Aghakarim Karimov Mahharam oghlu
 * @support      : aghakarim.karimov@gmail.com
 * @phone        : +994998812999
 * @system       : index.php
 * @copyright    : Aghakarim Karimov Mahharam oghlu
 */

define('BASEPATH', true);
include_once("../core/config/database.php");
include_once("../core/helpers/general_helper.php");
(settings('timezone')) ?  date_default_timezone_set(settings('timezone')) : '';
// dd($_SESSION);



$page   = (isset($_GET['page'])) ? clean($_GET['page']) : '';

// if files exist in modules folder, then will be write here the file name
$massiv = 	[
	'logs',
	'cities',
	'city_add',
	'region_add',
	'regions',
	'edit_regions',
	'settlements',
	'settlements_add',
	'edit_settlements',
	'metro_stations',
	'metro_add',
	'edit_metro',
	'hashtags',
	'hashtag_add',
	'edit_hashtag',
	'ads_type',
	'realty_kind',
	'edit_ads_type',
	'add_advertisements',
	'advertisements',
	'users',
	'add_user',
	'edit_users',
	'home',
	'login',
	'logout',
	'moduls',
	'profile',
	'settings',
	'visitors',
	'page_add',
	'page_list',
	'page_edit',
	'menu_list',
	'news_add',
	'news_list',
	'news_edit',
	'blog_add',
	'blog_list',
	'edit_cities',
	'album_add',
	'album_list',
	'album_edit',
	'albums_photos',
	'home_order',
	'slide_add',
	'slide_list',
	'slide_edit',
	'staff_add',
	'staff_list',
	'staff_edit',
	'social_links',
	'set_language',
	'edit_language',
	'language_list',
	'clear_attemps',
	'add_video',
	'videos_list',
	'statistics',
	'video_edit',
	'service_add',
	'service_list',
	'service_edit',
	'background_images',
	'service_photos',
	'slide_video_add',
	'video_slide_edit',
	'video_slide_list',
	'add_bl_pass',
	'contact_settings',
	'theme_settings',
	'smtp_settings',
	'apis_settings',
	'site_status',
	'password_blacklist',
	'recovery_password'
];

if ($page != 'login') {
	define("icaze", true);
	if (!empty($_SESSION['loggedin_id']) and !empty($_SESSION['username']) and ($_SESSION['loggedin'] == 1)) {

		// if (isset($_SESSION['last_active'])) 
		// {

		//     $max_time=1*10;
		//     $now=microtime(date("H:i:s"));

		//     $diff=round(microtime(date("H:i:s"))- $_SESSION['last_active']); 
		//     if ($diff>=$max_time) 
		//     { 
		//     	echo '<script>alert("cixis edilir")</script>';
		//         header("location:logout");          
		//     }
		//     else 
		//     {
		//         $time=microtime(date("H:i:s"));
		//     	$_SESSION['last_active']=$time; 
		//     }
		// }
		// else
		// {
		//     $time=microtime(date("H:i:s"));
		//     $_SESSION['last_active']=$time;
		// }

		$id        = clean($_SESSION['loggedin_id']);
		$login     = clean($_SESSION['username']);
		$qrysel    = "SELECT * FROM login_credentials WHERE username='" . $login . "' OR email='" . $login . "' AND id='" . $id . "'";
		$rrr       = mysqli_query($conn, $qrysel);
		$say       = mysqli_num_rows($rrr);
		($page != 'home' && !empty($page)) ? save_url($_SESSION['loggedin_id']) : '';
		if ($say != 1) {
			header("Location:login");
			die();
		}
	} else {
		header("Location:login");
		die();
	}

	include_once("modules/partials/head.php");
	include_once("modules/partials/nav.php");
	include_once("modules/partials/menu.php");
}

// if file exists in modules folder then include file here
if (in_array($page, $massiv)) {
	if (file_exists("modules/" . $page . ".php")) {
		include_once 'modules/' . $page . '.php';
	} else {
		include_once "error.php";
	}
}

// if page parametr is empty redirect home.php
elseif ($page == "") {
	if (file_exists("modules/home.php")) {
		include_once "modules/home.php";
	} else {
		include_once "error.php";
	}
}

// if page not found redirect 404 page
else {
	if (file_exists("modules/404.php")) {
		include_once "modules/404.php";
	} else {
		include_once "error.php";
	}
}
if ($page != 'login') {
	include_once "modules/partials/footer.php";
}
