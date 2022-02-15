<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once "../../core/config/database.php";
    include_once "../../core/helpers/general_helper.php";

    $name     		= clean($_POST['name']);
    $surname    	= clean($_POST['surname']);
    $email   		= clean($_POST['email']);
    $phone_number   = clean($_POST['phone_number']);

	// Loop over field names, make sure each one exists and is not empty

    $sec    = "SELECT * FROM ads_users WHERE id='".$_SESSION['id']."'";
	$runs   = mysqli_query($conn,$sec);
	$bak    = mysqli_fetch_array($runs);

	$error 		= false;
	foreach($_POST as $key => $field) 
	{
	  if (empty($_POST[$key])) 
	  {
	  	$error = true;
	  }
	}
	if ($error) 
	{
	  $data = [ 
 				'status'     => 204,
 				'icon'       => 'error',
 				'title'      => translate('error'),
	     		'message'    => translate('all_area_is_required'), 
	     		'sorguNtc'   => true
    	     	];
	}
	else
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
			$data = [ 
 				'status'     => 204,
 				'icon'       => 'error',
 				'title'      => translate('error'),
	     		'message'    => translate('email_is_not_valid_email_address'), 
	     		'sorguNtc'   => true
    	     	];
		}
		
		else
		{

			$sql = "UPDATE ads_users SET 
			name='".$name."', 
			surname='".$surname."', 
			email='".$email."',
			phone_number='".$phone_number."'  WHERE id='".$_SESSION['id']."'";
			$execute = mysqli_query($conn,$sql);

            $data = [ 
 				'status'     => 200,
 				'icon'       => 'success',
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