<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");

    $id             = $_POST['service_id'];
    $title    	  	= clean($_POST['title']);
    $subtitle  	  	= clean($_POST['subtitle']);
    $status    	  	= (isset($_POST['status'])) ? clean($_POST['status']) : 0;
    $ser_content  	= $_POST['service_content'];
    $description   	= clean($_POST['description']);
    $keywords       = clean($_POST['keywords']);

    $test 			= explode('.', $_FILES["service_photo"]["name"]);
	$ext  			= end($test);
	$name 			= 'service'.rand(100, 999) . '.' . $ext;
	$location 		= '../../../assets/uploads/services/' . $name;  
	
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

	if ((empty($_FILES["service_photo"]["tmp_name"]) || empty($_FILES["service_photo"]["name"])) AND (empty(serviceById($id,'photo')))) 
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

		if (move_uploaded_file($_FILES["service_photo"]["tmp_name"], $location)) 
		{
			if (!empty(serviceById($id,'photo')))
			{
				$old_sekil =  "../../../assets/uploads/services/".serviceById($id,'photo');

		        if (file_exists($old_sekil)) 
		        {
		        	unlink($old_sekil);
		        }
	   		 }
			$qry = "photo='".$name."' ,";
		}
		else
		{
			$qry = "";
		}
			
			$sql 		= "UPDATE services SET title='".$title."', subtitle='".$subtitle."', content='".$ser_content."', ".$qry."  seo_desc='".$description."', seo_keyw='".$keywords."', seo_url='".seo($title)."', status='".$status."' WHERE id='".$id."'";
			// dd($sql);
			$execute 	= mysqli_query($conn,$sql);
			
			if ($execute) 
			{
				$title   = $_SESSION['username']." xidmətə dəyişiklik etdi";
	            $content = $_SESSION['username']." xidmətə dəyişiklik etdi. Əlavə edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
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