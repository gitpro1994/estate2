<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");


    $m_server     	= clean($_POST['m_server']);
    $m_port      	= clean($_POST['m_port']);
    $m_sertifika   	= clean($_POST['m_sertifika']);
    $m_adresi       = clean($_POST['m_adresi']);
    $m_parola       = clean($_POST['m_parola']);
    $status       	= (isset($_POST['status'])) ? 1 : 0;
    $m_kime       	= clean($_POST['m_kime']);
    
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
		if (!filter_var($m_port, FILTER_VALIDATE_INT)) 
		{
			$data = [ 
 				'status'     => 204,
 				'title'      => translate('error'),
	     		'message'    => translate('smtp_port_is_not_valid'), 
	     		'sorguNtc'   => true
    	     	];
		}
		elseif ($m_sertifika!='tls' AND $m_sertifika!='ssl') {
			$data = [ 
 				'status'     => 204,
 				'title'      => translate('error'),
	     		'message'    => translate('smtp_certificate_is_not_valid'), 
	     		'sorguNtc'   => true
    	     	];
		}
		elseif (!filter_var($m_adresi, FILTER_VALIDATE_EMAIL)) {
			$data = [ 
 				'status'     => 204,
 				'title'      => translate('error'),
	     		'message'    => translate('smtp_mail_is_not_valid_url'), 
	     		'sorguNtc'   => true
    	     	];
		}
		elseif (!filter_var($m_kime, FILTER_VALIDATE_EMAIL)) {
			$data = [ 
 				'status'     => 204,
 				'title'      => translate('error'),
	     		'message'    => translate('smtp_mail_is_not_valid_url'), 
	     		'sorguNtc'   => true
    	     	];
		}
		else
		{
			$sql = "UPDATE smtp_settings SET 
			smtp_server='".$m_server."', 
			smtp_port='".$m_port."',
			mail_certificate='".$m_sertifika."', 
			smtp_email='".$m_adresi."',
			smtp_email_password='".$m_parola."',
			status='".$status."',
			receiver_email='".$m_kime."',
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