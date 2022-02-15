<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");


    $firma_adi     	= clean($_POST['firma_adi']);
    $firma_telefon  = clean($_POST['firma_telefon']);
    $mobile_phone	= clean($_POST['mobile_phone']);
    $firma_fax    	= clean($_POST['firma_fax']);
    $firma_email    = clean($_POST['firma_email']);
     
    
	// Loop over field names, make sure each one exists and is not empty
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
 				'title'      => translate('error'),
	     		'message'    => translate('all_area_is_required'), 
	     		'sorguNtc'   => true
    	     	];
	}
	else
	{
		if (!filter_var($firma_email, FILTER_VALIDATE_EMAIL)) 
		{
			$data = [ 
 				'status'     => 204,
 				'title'      => translate('error'),
	     		'message'    => translate('email_is_not_valid'), 
	     		'sorguNtc'   => true
    	     	];
		}
		
		else
		{
			$sql = "UPDATE contact_settings SET 
			address='".$firma_adi."', 
			phone='".$firma_telefon."',
			mobile_phone='".$mobile_phone."', 
			fax='".$firma_fax."',
			email='".$firma_email."',
			updated_at='".$now."'
			";
			$execute = mysqli_query($conn,$sql);
			// $title   = "Sosial şəbəkə tənzimləmələrinə düzəliş edildi";
   //          $content = "Sosial şəbəkə tənzimləmələri yeniləndi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
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