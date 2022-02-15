<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");

    $metro_id     = clean($_POST['metro_id']);
    $metro_name   = clean($_POST['metro_name']);
    $status    	  = (isset($_POST['status'])) ? clean($_POST['status']) : 0;
    
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
	// elseif ($cit) 
	// {
		
	// }
	
	else
	{		
		
			
		$sql 	 = "UPDATE metros SET metro_name='".$metro_name."', status='".$status."',seo_link='".seo($metro_name)."', updated_at='".$now."' WHERE id='".$metro_id."'";
		$execute = mysqli_query($conn,$sql);
		
		if ($execute) 
		{
            $data = [ 
 				'status'     => 200,
 				'title'      => translate('success'),
	     		'message'    => translate('successfully_inserted'), 
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