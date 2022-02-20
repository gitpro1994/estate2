<?php
	ob_start();
	session_start();
	define("ENVIRONMENT", "development");
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	// (ENVIRONMENT == "production") ?	error_reporting(0) : error_reporting(1);		
	$now   = date("Y-m-d H:i:s");
	$date  = date("Y-m-d");
	$host  = 'localhost';   // Host adı
	$user  = 'root';        // Mysql istifadəçi adı  
	$pass  = '';    		// Mysql şifrəsi
	$db    = 'estate';      // Verilənlər bazası adı

	## Mysql Bağlantısı ##
	$conn = @mysqli_connect($host, $user, $pass) or die(include_once "error.php");
	## Verilənlər bazası seçmək ##
	@mysqli_select_db($conn,$db) or die(include_once "error.php"); 


	## Azerbaycan dili Xarakterlərini dəstəkləməsi üçün  ##
	@mysqli_query($conn,'SET NAMES "utf8"');
	@mysqli_query($conn,'SET CHARACTER SET "utf8"');
	@mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");
 ?>