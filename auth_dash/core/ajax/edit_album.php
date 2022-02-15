<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");

    
    $id             = $_POST['album_id'];
    $title    	  	= clean($_POST['title']);
    $status    	  	= (isset($_POST['status'])) ? clean($_POST['status']) : 0;
    $album_info  	= clean($_POST['album_info']);
    $description   	= clean($_POST['description']);
    $keywords       = clean($_POST['keywords']);

    $test 			= explode('.', $_FILES["album_cover_photo"]["name"]);
	$ext  			= end($test);
	$name 			= 'album_photo'.rand(100, 999) . '.' . $ext;
	$location 		= '../../../assets/uploads/photo_gallery/' . $name;  
	
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

	if ((empty($_FILES["album_cover_photo"]["tmp_name"]) || empty($_FILES["album_cover_photo"]["name"])) AND (empty(albumById($id,'album_kapak')))) 
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

		if (move_uploaded_file($_FILES["album_cover_photo"]["tmp_name"], $location)) 
		{
			if (!empty(albumById($id,'album_kapak')))
			{
				$old_sekil =  "../../../assets/uploads/photo_gallery/".albumById($id,'album_kapak');

		        if (file_exists($old_sekil)) 
		        {
		        	unlink($old_sekil);
		        }
	   		 }
			$qry = "album_kapak='".$name."' ,";
		}
		else
		{
			$qry = "";
		}
			
			$sql 		= "UPDATE photo_albums SET album_name='".$title."', ".$qry."  album_info='".htmlspecialchars($album_info)."', album_desc='".$description."',  album_keyw='".$keywords."', album_status='".$status."', seo_url='".seo($title)."' WHERE id='".$id."'";
			// dd($sql);
			$execute 	= mysqli_query($conn,$sql);
			
			if ($execute) 
			{
				$title   = $_SESSION['username']." alboma dəyişiklik etdi";
	            $content = $_SESSION['username']." alboma dəyişiklik etdi. Əlavə edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
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