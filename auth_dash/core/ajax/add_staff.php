<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");


    $par['name']      	= clean($_POST['name']); 
    $par['surname']   	= clean($_POST['surname']);
    $par['position'] 	= clean($_POST['position']);
    $par['department'] 	= clean($_POST['department']);
    $par['info'] 		= (!empty($_POST['facebook'])) ? $_POST['info'] : ' ';
    $par['facebook'] 	= (!empty($_POST['facebook'])) ? $_POST['facebook'] : '#';
    $par['twitter'] 	= (!empty($_POST['twitter'])) ? $_POST['twitter'] : '#';
    $par['instagram'] 	= (!empty($_POST['instagram'])) ? $_POST['instagram'] : '#';
    $par['linkedin'] 	= (!empty($_POST['linkedin'])) ? $_POST['linkedin'] : '#';
    $par['youtube'] 	= (!empty($_POST['youtube'])) ? $_POST['youtube'] : '#';
    $par['status'] 		= (isset($_POST['status'])) ? 1 : 0;
    $par['home'] 		= (isset($_POST['anasayfa'])) ? 1 : 0;    
  	
    // dd($par);

    $test 			= explode('.', $_FILES["staff_photo"]["name"]);
	$ext  			= end($test);
	$name 			= 'staff'.rand(100, 999) . '.' . $ext;
	$location 		= '../../../assets/uploads/staff/' . $name;  
	
	// Loop over field names, make sure each one exists and is not empty
	$error 		= false;
	foreach($par as $key => $field) 
	{
	  if (empty($par[$key])) 
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
	elseif (empty($_FILES["staff_photo"]["tmp_name"]) || empty($_FILES["staff_photo"]["name"])) 
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
		if (move_uploaded_file($_FILES["staff_photo"]["tmp_name"], $location)) 
		{
			
			$sql 		= "INSERT INTO staff (name,surname,position,staff_photo,facebook,telegram,instagram,youtube,status,is_home,seo_url,category_id,person_info) 
			VALUES('".$par['name']."', '".$par['surname']."', '".$par['position']."', '".$name."', '".$par['facebook']."', '".$par['twitter']."', '".$par['instagram']."', '".$par['youtube']."', '".$par['status']."', '".$par['home']."','".seo($par['name'].'-'.$par['surname'])."','".$par['department']."','".$par['info']."')";
			$execute 	= mysqli_query($conn,$sql);
			
			if ($execute) 
			{
				$title   = $par['name'].' '.$par['surname']. " adli yeni işçi əlavə edildi";
	            $content = $par['name'].' '.$par['surname']. " başlıqlı yeni işçi əlavə edildi. Əlavə edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
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