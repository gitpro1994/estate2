<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once "../../../core/config/database.php";
    include_once "../../../core/helpers/general_helper.php";

    $name     		= clean($_POST['name']);
    $surname    	= clean($_POST['surname']);
    $email   		= clean($_POST['email']);
    $username		= clean($_POST['username']);
    $sifre			= clean($_POST['sifre']);
    $second			= clean($_POST['second_sifre']);
    $sifre      	= (!empty($sifre)) ? hash_password($sifre) : '';
    $seoncd      	= (!empty($second)) ? hash_password($second) : '';
    $update_pass 	= (!empty($sifre)) ? ', password="'.$sifre.'"' : '';
    $update_sec 	= (!empty($update_sec)) ? ', second_password="'.$update_sec.'"' : '';
	// Loop over field names, make sure each one exists and is not empty

    $sec    = "SELECT * FROM login_credentials WHERE id='".$_SESSION['loggedin_id']."'";
	$runs   = mysqli_query($conn,$sec);
	$bak    = mysqli_fetch_array($runs);

	$error 		= false;
	foreach($_POST as $key => $field) 
	{
	  if (empty($_POST[$key])) 
	  {
	  	if ($_POST[$key] != $_POST['sifre']) {
	  		$error = true;
	  	}
	  }
	}
	if ($error) 
	{
	  $data = [ 
 				'status'     => 204,
 				'title'      => translate('error'),
	     		'message'    => translate('all_area_is_required'), 
	     		'sorguNtc'   => true
    	     	];
	}
	else
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$data = [ 
 				'status'     => 204,
 				'title'      => translate('error'),
	     		'message'    => translate('email_is_not_valid_email_address'), 
	     		'sorguNtc'   => true
    	     	];
		}
		
		else
		{

			$sql = "UPDATE login_credentials SET 
			name='".$name."', 
			surname='".$surname."', 
			email='".$email."',
			username='".$username."' $update_pass $update_pass WHERE id='".$_SESSION['loggedin_id']."'";

			if (!empty($sifre)) 
			{	
				
				$chp    = "INSERT INTO passwords_changes (user_id,old_password) VALUES('".$_SESSION['loggedin_id']."','".$bak['password']."')";
            	$chpr   = mysqli_query($conn,$chp);
            	// $title   = $_SESSION['username']." hesabının şifrəsini dəyişdi";
            	// $content = $_SESSION['username']." hesabının şifrəsini dəyişdi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
            	// $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
            	// $log_run = mysqli_query($conn,$logs);	
			}
			$execute = mysqli_query($conn,$sql);

			// $title   = $_SESSION['username']." öz profil məlumatlarına düzəliş etdi";
   //          $content = $_SESSION['username']." öz profil məlumatlarını yenilədi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
   //          $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
   //          $log_run = mysqli_query($conn,$logs);
            $data = [ 
 				'status'     => 200,
 				'title'      => translate('success'),
	     		'message'    => translate('successfully_updated'), 
	     		'sorguNtc'   => true
    	     	];
		}
	} 

    		
    echo json_encode($data);
}
else
{
    include_once("index.html");
}


 ?>