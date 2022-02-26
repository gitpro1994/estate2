<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once "../../core/config/database.php";
    include_once "../../core/helpers/general_helper.php";

    $old_password     			= clean($_POST['old_password']);
    $new_password   			= clean($_POST['new_password']);
	$repeat_new_password   		= clean($_POST['repeat_new_password']);

	$hash_password 				= hash_password($new_password);

	$error 		= false;
	
	foreach($_POST as $key => $field) 
	{
	  if (empty($_POST[$key])) 
	  {
	  	$error = true;
	  }
	  else
	  {
		$error = false;
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
		if ($new_password != $repeat_new_password) 
		{
			$data = [ 
 				'status'     => 204,
 				'icon'       => 'info',
 				'title'      => translate('error'),
	     		'message'    => translate('passwords_are_not_same'), 
	     		'sorguNtc'   => true
    	     	];
		}
		
		elseif(users_info($_SESSION['id'], 'password')==hash_password($new_password))
		{
			$data = [ 
				'status'     => 204,
				'icon'       => 'info',
				'title'      => translate('error'),
				'message'    => translate('passwords_are_already_same'), 
				'sorguNtc'   => true
				];
		}
		else
		{
			$sql = "UPDATE ads_users SET 
			password='".$hash_password."'
			WHERE id='".users_info($_SESSION['id'], 'id')."'";
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