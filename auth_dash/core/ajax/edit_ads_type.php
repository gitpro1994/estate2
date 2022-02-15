<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");

    $ads_type_id  = clean($_POST['ads_type_id']);
    $kind_name    = clean($_POST['kind_name']);
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
		
			
		$sql 	 = "UPDATE realty_kinds SET kind_name='".$kind_name."', status='".$status."',seo_link='".seo($kind_name)."', updated_at='".$now."' WHERE id='".$ads_type_id."'";
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