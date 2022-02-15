<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");
    $par['id']          = $_POST['id'];
    $par['name']      	= clean($_POST['name']); 
    $par['surname']   	= clean($_POST['surname']);
    $par['position'] 	= clean($_POST['position']);
    $par['department'] 	= clean($_POST['department']);
    $par['info'] 		= $_POST['info'];
    $par['facebook'] 	= (!empty($_POST['facebook'])) ? $_POST['facebook'] : '#';
    $par['twitter'] 	= (!empty($_POST['twitter'])) ? $_POST['twitter'] : '#';
    $par['instagram'] 	= (!empty($_POST['instagram'])) ? $_POST['instagram'] : '#';
    $par['linkedin'] 	= (!empty($_POST['linkedin'])) ? $_POST['linkedin'] : '#';
    $par['youtube'] 	= (!empty($_POST['youtube'])) ? $_POST['youtube'] : '#';
    $par['status'] 		= (isset($_POST['status'])) ? 1 : 0;
    $par['home'] 		= (isset($_POST['anasayfa'])) ? 1 : 0; 

    $test 			= explode('.', $_FILES["staff_photo_edit"]["name"]);
	$ext  			= end($test);
	$name 			= 'staff'.rand(100, 999) . '.' . $ext;
	$location 		= '../../../assets/uploads/staff/' . $name;  
	
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
	
	if (empty($_FILES["staff_photo_edit"]["tmp_name"]) || empty($_FILES["staff_photo_edit"]["name"]) AND (empty(staffById($par['id'],'staff_photo')))) 
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
		if (move_uploaded_file($_FILES["staff_photo_edit"]["tmp_name"], $location)) 
		{
			if (!empty(staffById($par['id'],'staff_photo')))
			{
				$old_sekil =  "../../../assets/uploads/staff/".staffById($par['id'],'staff_photo');

		        if (file_exists($old_sekil)) 
		        {
		        	unlink($old_sekil);
		        }
	    	}
			$qry = "staff_photo='".$name."' ,";
		}
		else
		{
			$qry = '';
		}
			
			$sql 		= "UPDATE staff SET name='".$par['name']."', surname='".$par['surname']."', position='".$par['position']."', ".$qry." facebook='".$par['facebook']."', telegram='".$par['twitter']."',instagram='".$par['instagram']."', youtube='".$par['youtube']."', status='".$par['status']."',is_home='".$par['home']."',seo_url='".seo($par['name'].'-'.$par['surname'])."', category_id='".$par['department']."', person_info='".$par['info']."' WHERE id='".$par['id']."'";
			$execute 	= mysqli_query($conn,$sql);
			
			if ($execute) 
			{
				$title   = $_SESSION['username']." işçiyə dəyişiklik etdi";
	            $content = $_SESSION['username']." işçiyə dəyişiklik etdi. Əlavə edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
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