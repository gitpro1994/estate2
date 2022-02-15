<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");
    

    $id             = $_POST['slide_id'];
    $title    	  	= clean($_POST['title']);
    $url    	  	= clean($_POST['url']);
    $video_url    	= clean($_POST['video_url']);
    $status    	  	= (isset($_POST['status'])) ? clean($_POST['status']) : 0;
    $aciqlama    	= clean($_POST['aciqlama']);
    $target    	  	= (isset($_POST['newtab'])) ? 1 : 0;

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
	
	if (empty($_FILES["slide_photo"]["tmp_name"]) || empty($_FILES["slide_photo"]["name"]) AND (empty(slide($id,'slide_photo')))) 
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
			if (!empty(slide($id,'slide_photo')))
			{
				$old_sekil =  "../../../assets/uploads/slider/".slide($id,'slide_photo');

		        if (file_exists($old_sekil)) 
		        {
		        	unlink($old_sekil);
		        }
	    	}
			$qry = "slide_photo='".$name."' ,";
		}
		else
		{
			$qry 		= '';
		}
			$sql 		= "UPDATE slider SET  slide_title='".$title."', slide_url='".$url."', ".$qry." video_url='".$video_url."',slide_status='".$status."',  slide_text='".$aciqlama."', slider_target='".$target."' WHERE id='".$id."'";
			$execute 	= mysqli_query($conn,$sql);
			
			if ($execute) 
			{
				$title   = $_SESSION['username']." slayda dəyişiklik etdi";
	            $content = $_SESSION['username']." slayda dəyişiklik etdi. Əlavə edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
	            $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
	            $log_run = mysqli_query($conn,$logs);

	            $data = [ 
	 				'status'     => 200,
	 				'title'      => translate('success'),
		     		'message'    => translate('successfully_inserted'), 
		     		'sorguNtc'   => true
	    	     	];
			}
		// }
		// else
		// {
		// 	$data = [ 
		// 		'status'     => 204,
		// 		'title'      => translate('error'),
  //    			'message'    => word_to_trans_seo('An error occurred while adding the blog'), 
  //    			'sorguNtc'   => true
	 //     	];
		// }
		
	} 
    echo json_encode($data);
		
}
else
{
    include_once("index.html");
}

 ?>