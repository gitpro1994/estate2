<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");


    $region_name    = clean($_POST['region_name']);
    $city    	  	= clean($_POST['city']);
    $status    	  	= (isset($_POST['status'])) ? clean($_POST['status']) : 0;
	
	$sel = "SELECT * FROM cities WHERE id='".$city."'";
	$run = mysqli_query($conn,$sel);
	$say = mysqli_num_rows($run);
	
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
	
	if ($say==0) 
	{
		$data = [ 
 				'status'     => 204,
 				'title'      => translate('error'),
	     		'message'    => translate('selected_city_not_find'), 
	     		'sorguNtc'   => true
    	     	];
	}
	else
	{		
			
		$sql 		= "INSERT INTO regions (city_id,region_name,seo_link,status,created_at) 
		VALUES('".$city."', '".$region_name."', '".seo($region_name)."', '".$status."', '".$now."')";
		$execute 	= mysqli_query($conn,$sql);
		
		if ($execute) 
		{
			// $title   = $title." başlıqlı yeni səhifə əlavə edildi";
   //          $content = $title." başlıqlı yeni səhifə əlavə edildi. Əlavə edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
   //          $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
   //          $log_run = mysqli_query($conn,$logs);

            $data = [ 
 				'status'     => 200,
 				'title'      => translate('success'),
	     		'message'    => translate('successfully_inserted'), 
	     		'sorguNtc'   => true
    	     	];
		}
		
		else
		{
			$data = [ 
				'status'     => 204,
				'title'      => translate('error'),
     			'message'    => word_to_trans_seo('An error occurred while adding the news'), 
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