<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");

    $id             = clean($_POST['video_id']);
    $video    	  	= clean($_POST['video']);
    $status    	  	= (isset($_POST['status'])) ? clean($_POST['status']) : 0;
    
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
	elseif (empty($video)) 
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
		
			
			$sql 		= "UPDATE slide_videos SET video='".$video."', status='".$status."' WHERE id='".$id."'";
			$execute 	= mysqli_query($conn,$sql);
			
			if ($execute) 
			{
				$title   = "Slayd videosu yeniləndi";
	            $content = "Slayd videosu yeniləndi. Əlavə edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
	            $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
	            $log_run = mysqli_query($conn,$logs);

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
	     			'message'    => word_to_trans_seo('An error occurred while adding the blog'), 
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