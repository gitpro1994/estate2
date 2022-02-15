<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
  define('BASEPATH', true);
  include_once("../../../core/config/database.php");
  include_once("../../../core/helpers/general_helper.php");

	if(isset($_POST['sifre']) && $_POST['sifre'] != '')
	{
	 	$response = array();
	 	$sifre 		= mysqli_real_escape_string($conn,$_POST['sifre']);
	  $sql  		= "SELECT * FROM password_blacklist WHERE bad_pass='".$sifre."'";
	  $res    	= mysqli_query($conn, $sql);
	  $count  	= mysqli_num_rows($res);
	  $hashpass = hash_password($sifre);
	  $oldpass  = "SELECT * FROM passwords_changes WHERE old_password='".$hashpass."' AND user_id='".$_SESSION['loggedin_id']."'";
	  $oldrun   = mysqli_query($conn,$oldpass);
	  $oldcnt   = mysqli_num_rows($oldrun);
	  
	  if($count > 0)
	 	{
	 		$response['status'] = false;
	 		$response['msg'] 	= translate('this_password_can_not_be_selected_for_security_reasons');
	 	}
	 	elseif ($oldcnt != 0) 
	 	{
	 		$response['status'] = false;
	 		$response['msg'] 	= translate('you_have_used_this_password_before');
	 	}
	 	elseif(strlen($sifre) < 6 || strlen($sifre) > 25)
	 	{
	 		$response['status'] = false;
	 		$response['msg'] 	= translate('password_must_be_6_to_25_characters');
	 	}
	 	elseif (!preg_match("#[0-9]+#", $sifre)) 
	 	{
	 		$response['status'] = false;
      $response['msg'] 	= translate("password_must_include_at_least_one_number");
    }

  	elseif (!preg_match("#[a-z]+#", $sifre)) 
  	{
  		$response['status'] = false;
      $response['msg'] 	= translate("password_must_include_at_least_lower_case");
  	} 
  	elseif (!preg_match("#[A-Z]+#", $sifre)) 
  	{
  		$response['status'] = false;
      $response['msg'] 	= translate("password_must_include_at_least_upper_case");
  	}  
	 	else
	 	{
	 		$response['status'] = true;
	 		$response['msg'] 	= translate('the_password_can_be_selected');
	 	}
	 		echo json_encode($response);
	}
}
else
{
	include_once "index.html";
}
 ?>

