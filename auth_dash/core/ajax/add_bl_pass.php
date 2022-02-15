<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");

    $pass  = clean($_POST['pass']);

    $qry   = "SELECT * FROM password_blacklist WHERE bad_pass='".$pass."'";
    $ru    = mysqli_query($conn,$qry);
    $say   = mysqli_num_rows($ru);	
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
	elseif ($say!=0) 
	{
		 $data = [ 
 				'status'     => 204,
 				'title'      => translate('error'),
	     		'message'    => translate('this_password_already_exist_in_blacklist'), 
	     		'sorguNtc'   => true
    	     	];
	}
	else
	{
			$sql = "INSERT INTO password_blacklist (bad_pass,status) VALUES ('".$pass."',1)";
			$execute = mysqli_query($conn,$sql);
			if ($execute) {
			$title   = $_SESSION['username']." qara siyahıya yeni şifrə əlavə etdi";
            $content = $_SESSION['username']." qara siyahıya yeni şifrə (".$pass.") əlavə etdi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
            $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
            $log_run = mysqli_query($conn,$logs);
            $data = [ 
 				'status'     => 200,
 				'title'      => translate('success'),
	     		'message'    => translate('successfully_updated'), 
	     		'sorguNtc'   => true
    	     	];
			}
			else
			{
				$data = [ 
 				'status'     => 204,
 				'title'      => translate('error'),
	     		'message'    => translate('not_inserted'), 
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