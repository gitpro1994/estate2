<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
if (isset($_POST['key']) AND (isset($_POST['value'])) ) {
define('BASEPATH', true);
include("../../../core/config/database.php");
include("../../../core/helpers/general_helper.php");
 	
    $key     = clean($_POST['key']);
    $value   = clean($_POST['value']);
    $dil     = clean($_POST['dil_id']);
  	$up      = "UPDATE `languages` SET `$dil`='".$value."' WHERE `word` = '".$key."' ";
  	$upr     = mysqli_query($conn,$up);
  	$title   = strtoupper($dil)." dili üzrə <b>".$value."</b> dəyəri dəyişdirildi";
    $content = strtoupper($dil)." dili üzrə <b>".$value."</b> dəyəri dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
    $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
    $log_run = mysqli_query($conn,$logs);
  	if ($upr) {
  		
	  	$data = [ 
	     		'sorguMsj'   => 'Yeniləndi', 
	     		'sorguNtc'   => true
	     		];
	
  	}
  	else{
  		$data = [ 
	     		'sorguMsj'   => 'Xəta baş verdi', 
	     		'sorguNtc'   => false
	     		];
  	}
	echo json_encode($data);
  }
}
else
{
include("index.html");
}

 ?>