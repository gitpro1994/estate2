<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");


    $whatsapp     	    = htmlentities(mysqli_real_escape_string($conn,$_POST['whatsapp']));
    $google_analytics   = htmlentities(mysqli_real_escape_string($conn,$_POST['google_analytics']));
    $dogrulama_kodu	    = htmlentities(mysqli_real_escape_string($conn,$_POST['dogrulama_kodu']));
    $google_maps    	= htmlentities(mysqli_real_escape_string($conn,$_POST['google_maps']));
    $canli_destek       = htmlentities(mysqli_real_escape_string($conn,$_POST['canli_destek']));
 	
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
			$sql = "UPDATE apis_settings SET 
			google_analytics='".$google_analytics."', 
			google_site_verification='".$dogrulama_kodu."',
			contact_map='".$google_maps."', 
			live_support='".$canli_destek."',
			left_shortcut_icons='".$whatsapp."',
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
	 

    		
    echo json_encode($data);
}
else
{
    include_once("index.html");
}


 ?>