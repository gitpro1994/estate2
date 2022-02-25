<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
  define('BASEPATH', true);
  include_once("../../core/config/database.php");
  include_once("../../core/helpers/general_helper.php");


	$phone_number    	  = (isset($_POST['phone_number']) AND (!empty($_POST['phone_number']))) ? clean($_POST['phone_number']) : "NULL";
	$name    	  				= (isset($_POST['name']) AND (!empty($_POST['name']))) ? clean($_POST['name']) : "NULL";
	$email    	  			= (isset($_POST['email']) AND (!empty($_POST['email']))) ? clean($_POST['email']) : "NULL";
	$user_kind    	  	= (isset($_POST['user_kind']) AND (!empty($_POST['user_kind']))) ? clean($_POST['user_kind']) : "NULL";
	$kind_id    	  		= (isset($_POST['kind_id']) AND (!empty($_POST['kind_id']))) ? (int)$_POST['kind_id'] : "NULL";
	$type_id    	  		= (isset($_POST['type_id']) AND (!empty($_POST['type_id']))) ? (int)$_POST['type_id'] : "NULL";
	$city    	  				= (isset($_POST['city_id']) AND (!empty($_POST['city_id']))) ? (int)$_POST['city_id'] : "NULL";
	$office_kind    	  = (isset($_POST['office_kind']) AND (!empty($_POST['office_kind']))) ? (int)$_POST['office_kind'] : "NULL";
	$rooms    	  			= (isset($_POST['rooms']) AND (!empty($_POST['rooms']))) ? clean($_POST['rooms']) : "NULL";
	$area    	  				= (isset($_POST['area']) AND (!empty($_POST['area']))) ? clean($_POST['area']) : "NULL";
	$space    	  			= (isset($_POST['space']) AND (!empty($_POST['space']))) ? clean($_POST['space']) : "NULL";
	$floor_no   	  		= (isset($_POST['floor_no']) AND (!empty($_POST['floor_no']))) ? clean($_POST['floor_no']) : "NULL";
	$building_floor_no  = (isset($_POST['building_floor_no']) AND (!empty($_POST['building_floor_no']))) ? clean($_POST['building_floor_no']) : "NULL";
	$price    	  			= (isset($_POST['price']) AND (!empty($_POST['price']))) ? (int)$_POST['price'] : "NULL";
	$payment_method    	= (isset($_POST['payment_method']) AND (!empty($_POST['payment_method']))) ? (int)$_POST['payment_method'] : "NULL";
	$mortgage    	  		= (isset($_POST['mortgage']) AND (!empty($_POST['mortgage']))) ? (int)$_POST['mortgage'] : "NULL";
	$region_id    	  	= (isset($_POST['region_id']) AND (!empty($_POST['region_id']))) ? (int)$_POST['region_id'] : "NULL";
	$hashtag_id    	  	= (isset($_POST['hashtag_id']) AND (!empty($_POST['hashtag_id']))) ? (int)$_POST['hashtag_id'] : "NULL";
	$settlement_id    	= (isset($_POST['settlement_id']) AND (!empty($_POST['settlement_id']))) ? (int)$_POST['settlement_id'] : "NULL";
	$address    	  		= (isset($_POST['address']) AND (!empty($_POST['address']))) ? clean($_POST['address']) : "NULL";
	$description    	  = (isset($_POST['description']) AND (!empty($_POST['description']))) ? clean($_POST['description']) : "NULL";
	$photo              = (isset($_POST['estate_photos']) AND (!empty($_POST['estate_photos']))) ? trim($_POST['estate_photos']) : "NULL";


	
	if (empty($phone_number) || empty($name) || empty($email) || empty($user_kind)) 
	{
		$data = [
			        'icon'             => 'warning',
			        'status'           => 204,
			        'message'          => 'İstifadəçi məlumatları daxil edilməyib'
			      ];

      		echo json_encode($data);
	}
	
	else
	{
			$statement  = "SELECT * FROM ads_users WHERE phone_number = '".$phone_number."' AND status=1 ";
		  $execute    = mysqli_query($conn,$statement);
		  $cnt    	  = mysqli_num_rows($execute);
		  $bax        = mysqli_fetch_array($execute);
		  
	    if ($cnt < 1 ) 
	    {
		  	$password   = password_generate();
		  	$hash       = hash_password($password);
	    	$username 	= current(explode('@', $email));
	    	$avatar     = 'default.png';
	    	$status     = (int)1;

	    	
	    	$insert_user = mysqli_query($conn,"INSERT INTO ads_users (name,email,phone_number,user_type,avatar,username,password,status)
	    	VALUES ('".$name."','".$email."','".$phone_number."','".$user_kind."','".$avatar."','".$username."','".$hash."','".$status."') ");
	    	$user_id = mysqli_insert_id($conn);
	    }
	    else
	    {
	    	$insert_user = true;
	    	$user_id     = $bax['id'];
	    }
	    	if($insert_user)
	    	{
	    		$seen =(int)0;
	    		$ads_status =(int)3;
	    		$sql = "INSERT INTO ads (
			    			user_id,
			    			kind_id,
			    			type_id,
			    			city_id,
			    			office_kind,
			    			rooms,
			    			area,
			    			space,
			    			floor_no,
			    			building_floor_no,
			    			price,
			    			payment_method,
			    			mortgage,
			    			regions,
			    			hashtags,
			    			settlements,
			    			address,
			    			description,
			    			seen,
			    			images,
			    			status,
			    			end_date) 
						VALUES(
							".$user_id.",
							".$kind_id.",
							".$type_id.",
							".$city.",
							".$office_kind.",
							'".$rooms."',
							'".$area."',
							'".$space."',
							'".$floor_no."',
							'".$building_floor_no."',
							".$price.",
							".$payment_method.",
							".$mortgage.",
							".$region_id.",
							".$hashtag_id.",
							".$settlement_id.",
							'".$address."',
							'".$description."',
							'".$seen."',
							'".$photo."',
							'".$ads_status."',
							 ADDDATE(curdate(), INTERVAL 30 DAY) )";
							 
						$execute 	= mysqli_query($conn,$sql);
						if ($execute) 
						{
							$data = [
					        'icon'             => 'success',
					        'status'           => 200,
					        'message'          => 'Elan elave edildi'
					      ];

      				echo json_encode($data);
						}
						else
						{
							$data = [
					        'icon'             => 'error',
					        'status'           => 204,
					        'message'          => 'get isinle mesgul ol'
					      ];

      		echo json_encode($data);
						}
	    	}
	    	else
	    	{
	    		$data = [
					        'icon'             => 'warning',
					        'status'           => 204,
					        'message'          => 'Elan elave edilmedi'
					      ];

      		echo json_encode($data);
	    	}	 
	
	}


}     
else
{
    include_once("index.html");
}

 ?>