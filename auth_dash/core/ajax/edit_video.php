<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");
    // dd($_POST);
    $id             = $_POST['video_id'];
    $title    	  	= clean($_POST['title']);
    $kod    	  	= clean($_POST['kod']);
    $status    	  	= (isset($_POST['status'])) ? 1 : 0;
    $aciqlama   	= clean($_POST['aciqlama']);

    $test 			= explode('.', $_FILES["video_cover_edit"]["name"]);
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

	if ((empty($_FILES["video_cover_edit"]["tmp_name"]) || empty($_FILES["video_cover_edit"]["name"])) AND (empty(newsById($id,'news_photo')))) 
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

		if (move_uploaded_file($_FILES["video_cover_edit"]["tmp_name"], $location)) 
		{
			if (!empty(videoById($id,'cover_photo')))
			{
				$old_sekil =  "../../../assets/uploads/videos/".videoById($id,'cover_photo');

		        if (file_exists($old_sekil)) 
		        {
		        	unlink($old_sekil);
		        }
	   		 }
			$qry = "cover_photo='".$name."' ,";
		}
		else
		{
			$qry = "";
		}
			
			$sql 		= "UPDATE videos SET video_name='".$title."', youtube_url='".$kod."', ".$qry."  aciqlama='".$aciqlama."', video_status='".$status."',seo_url='".seo($title)."'  WHERE id='".$id."'";
			// dd($sql);
			$execute 	= mysqli_query($conn,$sql);
			
			if ($execute) 
			{
				$title   = $_SESSION['username']." videoya dəyişiklik etdi";
	            $content = $_SESSION['username']." videoya dəyişiklik etdi. Əlavə edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
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