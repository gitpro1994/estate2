<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");

    
    $sl  = "SELECT * FROM slider";
    $rr  = mysqli_query($conn,$sl);
    $cnt = mysqli_num_rows($rr);

    $title    	  	= clean($_POST['title']);
    $url    	  	= clean($_POST['url']);
    $video_url    	= clean($_POST['video_url']);
    $status    	  	= (isset($_POST['status'])) ? clean($_POST['status']) : 0;
    $target    	  	= (isset($_POST['newtab'])) ? 1 : 0;
    $aciqlama  		= clean($_POST['aciqlama']);
   	$sira           = $cnt+1;

    $test 			= explode('.', $_FILES["slide_photo"]["name"]);
	$ext  			= end($test);
	$name 			= 'slide'.rand(100, 999) . '.' . $ext;
	$location 		= '../../../assets/uploads/slider/' . $name;  
	
	

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
	elseif (empty($_FILES["slide_photo"]["tmp_name"]) || empty($_FILES["slide_photo"]["name"])) 
	{
		$data = [ 
 				'status'     => 204,
 				'title'      => translate('error'),
	     		'message'    => translate('image_file_not_selected'), 
	     		'sorguNtc'   => true
    	     	];
	}
	else
	{		
		if (move_uploaded_file($_FILES["slide_photo"]["tmp_name"], $location)) 
		{
			
			$sql = "INSERT INTO slider (sira_no, slide_title, slide_url, slide_photo,  video_url,slide_status, slide_text, slider_target) 
                                 VALUE ('".$sira."','".$title."', '".$url."', '".$name."', '".$video_url."','".$status."', '".$aciqlama."', '".$target."')";
			$execute 	= mysqli_query($conn,$sql);
			
			if ($execute) 
			{
				$title   = $title." başlıqlı yeni slayd əlavə edildi";
	            $content = $title." başlıqlı yeni slayd əlavə edildi. Əlavə edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
	            $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
	            $log_run = mysqli_query($conn,$logs);

	            $data = [ 
	 				'status'     => 200,
	 				'title'      => translate('success'),
		     		'message'    => translate('successfully_inserted'), 
		     		'sorguNtc'   => true
	    	     	];
			}
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