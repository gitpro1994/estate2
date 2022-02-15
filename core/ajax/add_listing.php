<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
  define('BASEPATH', true);
  include_once("../../core/config/database.php");
  include_once("../../core/helpers/general_helper.php");


	$phone_number    	  = (isset($_POST['add_listing_phone_number']) AND (!empty($_POST['add_listing_phone_number']))) ? clean($_POST['add_listing_phone_number']) : 'null';
	$name    	  				= (isset($_POST['add_listing_name']) AND (!empty($_POST['add_listing_name']))) ? clean($_POST['add_listing_name']) : 'null';
	$email    	  			= (isset($_POST['add_listing_email']) AND (!empty($_POST['add_listing_email']))) ? clean($_POST['add_listing_email']) : 'null';
	$user_kind    	  	= (isset($_POST['user_kind']) AND (!empty($_POST['user_kind']))) ? clean($_POST['user_kind']) : 'null';
	$kind_id    	  		= (isset($_POST['kind_id']) AND (!empty($_POST['kind_id']))) ? clean($_POST['kind_id']) : 'null';
	$type_id    	  		= (isset($_POST['type_id']) AND (!empty($_POST['type_id']))) ? clean($_POST['type_id']) : 'null';
	$city    	  				= (isset($_POST['city_id']) AND (!empty($_POST['city_id']))) ? clean($_POST['city_id']) : 'null';
	$office_kind    	  = (isset($_POST['office_kind']) AND (!empty($_POST['office_kind']))) ? clean($_POST['office_kind']) : 'null';
	$rooms    	  			= (isset($_POST['rooms']) AND (!empty($_POST['rooms']))) ? clean($_POST['rooms']) : 'null';
	$area    	  				= (isset($_POST['area']) AND (!empty($_POST['area']))) ? clean($_POST['area']) : 'null';
	$space    	  			= (isset($_POST['space']) AND (!empty($_POST['space']))) ? clean($_POST['space']) : 'null';
	$floor_no   	  		= (isset($_POST['floor']) AND (!empty($_POST['floor']))) ? clean($_POST['floor']) : 'null';
	$building_floor_no  = (isset($_POST['floor_no']) AND (!empty($_POST['floor_no']))) ? clean($_POST['floor_no']) : 'null';
	$price    	  			= (isset($_POST['price']) AND (!empty($_POST['price']))) ? clean($_POST['price']) : 'null';
	$payment_method    	= (isset($_POST['payment_method']) AND (!empty($_POST['payment_method']))) ? clean($_POST['payment_method']) : 'null';
	$mortgage    	  		= (isset($_POST['mortgage']) AND (!empty($_POST['mortgage']))) ? clean($_POST['mortgage']) : 'null';
	$region_id    	  	= (isset($_POST['region_id']) AND (!empty($_POST['region_id']))) ? clean($_POST['region_id']) : 'null';
	$hashtag_id    	  	= (isset($_POST['hashtag_id']) AND (!empty($_POST['hashtag_id']))) ? clean($_POST['hashtag_id']) : 'null';
	$settlement_id    	= (isset($_POST['settlement_id']) AND (!empty($_POST['settlement_id']))) ? clean($_POST['settlement_id']) : 'null';
	$address    	  		= (isset($_POST['address']) AND (!empty($_POST['address']))) ? clean($_POST['address']) : 'null';
	$description    	  = (isset($_POST['description']) AND (!empty($_POST['description']))) ? clean($_POST['description']) : 'null';
	$photo              = (isset($_POST['estate_photos']) AND (!empty($_POST['estate_photos']))) ? trim($_POST['estate_photos']) : 'null';


	// dd($post);
	
	// $error 		= false;

	// foreach($_POST as $key => $field) 
	// {
	// 	if (isset($_POST[$key])) 
	// 	{
	// 	  if (empty($_POST[$key])) 
	// 	  {
	// 	    $error = true;
	// 	  }
	// 	}
	// }
		
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
	    	$status     = 1;

	    	
	    	$insert_user = mysqli_query($conn,"INSERT INTO ads_users (name,email,phone_number,user_type,avatar,username,password,status)
	    	VALUES ('".$name."','".$email."','".$phone_number."','".$user_kind."','".$avatar."','".$username."','".$hash."','".$status."') ");
	    	$user_id = mysqli_insert_id($conn);

				// dd($user_id);
	    	if($insert_user)
	    	{
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
							0,
							'".$photo."',
							1,
							 ADDDATE(curdate(), INTERVAL 30 DAY) )";
							// dd($sql);
						$execute 	= mysqli_query($conn,$sql);

	    	}

	    	
	    	
	    } 
	}
     
else
{
    include_once("index.html");
}

 ?>