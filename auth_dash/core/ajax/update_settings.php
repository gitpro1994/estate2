<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");

 //    $yonetim    = clean($_POST['yonetim']);
 //    $rules 		= "RewriteRule ^".$yonetim."/([0-9a-zA-Z-_]+)$ auth_dash/index.php?page=$1 [QSA,L]";
	// $htaccess 	= file_get_contents('../../../.htaccess');
	// $htaccess 	= str_replace('###EDITABLE###', $rules."\n###EDITABLE###", $htaccess);
	// file_put_contents('../../../.htaccess', $htaccess);
	
	

    $renk1    	  = clean($_POST['renk1']);
    $renk2    	  = clean($_POST['renk2']);
    $renk3    	  = clean($_POST['renk3']);
    $renk4    	  = clean($_POST['renk4']);
    $site_url     = clean($_POST['site_url']);
    $site_title   = clean($_POST['site_title']);
    $language     = clean($_POST['language']);
    $site_keyw    = clean($_POST['site_keyw']);
    $site_desc    = clean($_POST['site_desc']);
    $copyright    = clean($_POST['copyright']);  
    $timezone     = clean($_POST['timezone']);  
    $date_format  = clean($_POST['date_format']);  
    $dash_copy	  = clean($_POST['dashboard_copyright']);  
    $currency	  = clean($_POST['currency_symbol']);  
    
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
		if (!filter_var($site_url, FILTER_VALIDATE_URL)) {
			$data = [ 
 				'status'     => 204,
 				'title'      => translate('error'),
	     		'message'    => translate('site_url_is_not_valid_url'), 
	     		'sorguNtc'   => true
    	     	];
		}
		
		else
		{

			// $rules 		= "RewriteRule ^".$yonetim."/(.*) auth_dash/$1";
			// $htaccess 	= file_get_contents('../../.htaccess');
			// $htaccess 	= str_replace('###EDITABLE###', $rules."\n###EDITABLE###", $htaccess);
			// file_put_contents('../../.htaccess', $htaccess);
			// $dash_url='".$yonetim."',
			$sql = "UPDATE global_settings SET 
			color_1 = '".$renk1."',
			color_2 = '".$renk2."',
			color_3 = '".$renk3."',
			color_4 = '".$renk4."',
			site_url = '".$site_url."',
			site_title='".$site_title."', 
			seo_keywords='".$site_keyw."', 
			seo_description='".$site_desc."', 
			dashboard_footer_text='".$dash_copy."',
			frontend_footer_text='".$copyright."',
			timezone='".$timezone."',
			translation='".$language."',
			date_format='".$date_format."',
			currency_symbol='".$currency."'
			";
			$execute = mysqli_query($conn,$sql);
			if ($execute) 
			{
				// $title   = "Ümumi tənzimləmələrə düzəliş edildi";
	   //          $content = "Sistem tənzimləmələri yeniləndi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
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
	} 
		
    echo json_encode($data);
}
else
{
    include_once("index.html");
}


 ?>