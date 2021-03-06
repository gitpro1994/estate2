<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");


    $title    	  	= clean($_POST['title']);
    $status    	  	= (isset($_POST['status'])) ? clean($_POST['status']) : 0;
    $home    	  	= (isset($_POST['home'])) ? 1 : 0;
    $short_text   	= clean($_POST['short_text']);
    $news_content  	= clean($_POST['news_content']);
    $description   	= clean($_POST['description']);
    $keywords       = clean($_POST['keywords']);

    $test 			= explode('.', $_FILES["cover_photo"]["name"]);
	$ext  			= end($test);
	$name 			= 'news'.rand(100, 999) . '.' . $ext;
	$location 		= '../../../assets/uploads/news/' . $name;  
	
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
	elseif (empty($_FILES["cover_photo"]["tmp_name"]) || empty($_FILES["cover_photo"]["name"])) 
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
		if (move_uploaded_file($_FILES["cover_photo"]["tmp_name"], $location)) 
		{
			
			$sql 		= "INSERT INTO news (news_title,short_text,news_content,news_photo,news_status,creator,create_date,is_home,keyword,descr,news_url) 
			VALUES('".$title."', '".$short_text."', '".$news_content."', '".$name."', '".$status."', '".$_SESSION['username']."', '".$now."', '".$home."', '".$keywords."', '".$description."','".seo($title)."')";
			$execute 	= mysqli_query($conn,$sql);
			
			if ($execute) 
			{
				$title   = $title." ba??l??ql?? yeni x??b??r ??lav?? edildi";
	            $content = $title." ba??l??ql?? yeni x??b??r ??lav?? edildi. ??lav?? ed??n IP adresi ".getIP()." , istifad?? edil??n Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
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