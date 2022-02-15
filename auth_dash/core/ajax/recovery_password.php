<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");

    $error = [];
	$res   = [];
	$email = (isset($_POST['email'])) ? clean($_POST['email']) : '';
	if (empty($email)) 
	{
    	$error[] = "E-poçt adresi daxil edilməyib";
	}

	if (count($error) > 0) 
	{

	    $resp['msg']    = $error;
	    $resp['status'] = false;
	    echo json_encode($resp);
	    exit;
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
		$error[] = "E-poçt adresi düzgün deyil";
		$resp['msg']    = $error;
		$resp['status'] = false;
		echo json_encode($resp);
		exit;
	}
	else
	{
		$find = "SELECT * FROM login_credentials WHERE email='".$email."'";
		$run  = mysqli_query($conn,$find);
		$sayi = mysqli_num_rows($run);
		if ($sayi!==1) 
		{
			$error[] = "E-poçt adresi tapılmadı";
			$resp['msg']    = $error;
			$resp['status'] = false;
			echo json_encode($resp);
			exit;
		}
		else
		{
			// $token = md5($emailId).rand(10,9999);
 
	  //    $expFormat = mktime(
	  //    date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
	  //    );
	 
	  //   $expDate = date("Y-m-d H:i:s",$expFormat);
	 
	  //   $update = mysqli_query($conn,"UPDATE users set  password='" . $password . "', reset_link_token='" . $token . "' ,exp_date='" . $expDate . "' WHERE email='" . $emailId . "'");
	 
	  //   $link = "<a href='www.yourwebsite.com/reset-password.php?key=".$emailId."&token=".$token."'>Click To Reset password</a>";
 
		}
	}


}
else
{
	include_once("index.html");
}
 ?>
