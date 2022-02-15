<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");
    
    $title    	  	= clean($_POST['title']);
    $kod    	  	= clean($_POST['kod']);
    $status    	  	= (isset($_POST['status'])) ? 1 : 0;
    $aciqlama   	= clean($_POST['aciqlama']);
   

    $test 			= explode('.', $_FILES["video_cover"]["name"]);
	$ext  			= end($test);
	$name 			= 'video'.rand(100, 999) . '.' . $ext;
	$location 		= '../../../assets/uploads/videos/' . $name;  
	
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
	elseif (empty($_FILES["video_cover"]["tmp_name"]) || empty($_FILES["video_cover"]["name"])) 
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
		if (move_uploaded_file($_FILES["video_cover"]["tmp_name"], $location)) 
		{
			
			$sql 		= $ins = "INSERT INTO videos (video_name,youtube_url,cover_photo,aciqlama,video_status,seo_url) VALUES ('".$title."', '".$kod."', '".$name."','".$aciqlama."', '".$status."','".seo($title)."')";
			$execute 	= mysqli_query($conn,$sql);
			
			if ($execute) 
			{
				$title   = $title." adlı yeni video <b>".mb_strtoupper($_SESSION['username'])."</b> tərəfindən yaradıldı.";
	            $content = $title." adlı yeni video <b>".mb_strtoupper($_SESSION['username'])."</b> tərəfindən yaradıldı. Əlavə edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
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