<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");

    $facebook     	= clean($_POST['facebook']);
    $instagram      = clean($_POST['instagram']);
    $linkedin   	= clean($_POST['linkedin']);
    $youtube       	= clean($_POST['youtube']);
    $twitter       	= clean($_POST['twitter']);
     
    
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
	else
	{
		if (!filter_var($facebook, FILTER_VALIDATE_URL) AND $facebook!='#') {
			$data = [ 
 				'status'     => 204,
 				'title'      => translate('error'),
	     		'message'    => translate('site_url_is_not_valid_url'), 
	     		'sorguNtc'   => true
    	     	];
		}
		elseif (!filter_var($instagram, FILTER_VALIDATE_URL) AND $instagram!='#') 
		{
			$data = [ 
 				'status'     => 204,
 				'title'      => translate('error'),
	     		'message'    => translate('site_url_is_not_valid_url'), 
	     		'sorguNtc'   => true
    	     	];
		}
		elseif (!filter_var($linkedin, FILTER_VALIDATE_URL) AND $linkedin!='#') {
			$data = [ 
 				'status'     => 204,
 				'title'      => translate('error'),
	     		'message'    => translate('site_url_is_not_valid_url'), 
	     		'sorguNtc'   => true
    	     	];
		}
		elseif (!filter_var($youtube, FILTER_VALIDATE_URL) AND $youtube!='#') {
			$data = [ 
 				'status'     => 204,
 				'title'      => translate('error'),
	     		'message'    => translate('site_url_is_not_valid_url'), 
	     		'sorguNtc'   => true
    	     	];
		}
		elseif (!filter_var($twitter, FILTER_VALIDATE_URL) AND $twitter!='#') {
			$data = [ 
 				'status'     => 204,
 				'title'      => translate('error'),
	     		'message'    => translate('site_url_is_not_valid_url'), 
	     		'sorguNtc'   => true
    	     	];
		}
		else
		{
			$sql = "UPDATE social_media_settings SET 
			facebook='".$facebook."', 
			twitter='".$twitter."',
			instagram='".$instagram."', 
			linkedin='".$linkedin."',
			youtube='".$youtube."'
			";
			$execute = mysqli_query($conn,$sql);
			// $title   = "Sosial şəbəkə tənzimləmələrinə düzəliş edildi";
   //          $content = "Sosial şəbəkə tənzimləmələri yeniləndi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
   //          $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
   //          $log_run = mysqli_query($conn,$logs);
            $data = [ 
 				'status'     => 200,
 				'title'      => translate('success'),
	     		'message'    => translate('successfully_updated'), 
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