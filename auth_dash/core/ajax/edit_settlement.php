<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");

 

    $settlement_name = clean($_POST['settlement_name']);
    $region    	  	 = clean($_POST['city']);
    $settlement_id   = clean($_POST['settlement_id']);
    $status    	  	 = (isset($_POST['status'])) ? clean($_POST['status']) : 0;
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
		
			
		$sql 	 = "UPDATE settlements SET settlement_name='".$settlement_name."', region_id='".$region."', status='".$status."',seo_link='".seo($settlement_name)."', updated_at='".$now."' WHERE id='".$settlement_id."'";
		// dd($sql);
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