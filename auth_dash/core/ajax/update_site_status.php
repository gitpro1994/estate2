<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");

    $date     	= clean($_POST['acilis_tarih']);
    $date       = date("Y-m-d",strtotime($date));
    $time      	= clean($_POST['acilis_zaman']);
    $title   	= clean($_POST['baslik']);
    $content    = clean($_POST['aciklama']);
    $status     = (isset($_POST['status'])) ? 1 : 0;
    
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
	
	
		$sql = "UPDATE site_status SET 
		open_date='".$date."', 
		open_time='".$time."',
		title='".$title."', 
		content='".$content."',
		status='".$status."'
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