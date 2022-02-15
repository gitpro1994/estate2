<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");

    $menu_ust    	= clean($_POST['menu_ust']);
    $menu_sira      = clean($_POST['menu_sira']);
    $menu_ad  		= clean($_POST['menu_ad']);
    $menu_url   	= clean($_POST['menu_url']);
    $target    	  	= (isset($_POST['newtab'])) ? 1 : 0;
    $status    	  	= (isset($_POST['menu_durum'])) ? 1 : 0;

  // dd($_POST);
	
	// Loop over field names, make sure each one exists and is not empty
	// $error 		= false;
	// foreach($_POST as $key => $field) 
	// {
	//   if (empty($_POST[$key])) 
	//   {
	//     $error = true;
	//   }
	// }
	
	// if ($error) 
	// {
	//   	$data = [ 
 // 				'status'     => 204,
 // 				'title'      => translate('error'),
	//      		'message'    => translate('all_area_is_required'), 
	//      		'sorguNtc'   => true
 //    	     	];
	// }
		$sql = "SELECT * FROM menus WHERE menu_name='".$menu_ad."'";
		$ruu = mysqli_query($conn,$sql);
		$sy  = mysqli_num_rows($ruu);
		if ($sy!=0) 
		{
			$data = [ 
 				'status'     => 204,
 				'title'      => translate('error'),
	     		'message'    => translate('menu_name_already_exist'), 
	     		'sorguNtc'   => true
    	     	];
		}
	else
	{		
		$sql 		= "INSERT INTO menus (menu_name,menu_sira,menu_url,parent_id,menu_status,target) 
		VALUES('".$menu_ad."', '".$menu_sira."', '".$menu_url."', '".$menu_ust."', '".$status."', '".$target."')";
		$execute 	= mysqli_query($conn,$sql);
		
		if ($execute) 
		{
			$title   = $menu_ad." adlı yeni menu əlavə edildi";
            $content = $menu_ad." adlı yeni menu əlavə edildi. Əlavə edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
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