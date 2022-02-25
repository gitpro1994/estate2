<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include("../../core/config/database.php");
    include("../../core/helpers/general_helper.php");

    if($_FILES["avatar"]["name"] != '')
    {
         $test 		= explode('.', $_FILES["avatar"]["name"]);
         $ext  		= end($test);
         $name 		= 'avatar'.rand(100, 999) . '.' . $ext;
         $location 	= '../../assets/img/avatar/' . $name;  
         $admin_id  = has_userdata('loggedin_id');
         if(move_uploaded_file($_FILES["avatar"]["tmp_name"], $location))
         {
            $old  = "SELECT * FROM ads_users WHERE id='".users_info($_SESSION['id'], 'id')."'";
            $oldQ = mysqli_query($conn,$old);
            $row  = mysqli_fetch_array($oldQ);
            if (file_exists('assets/img/avatar/' . $row['avatar'])) {
            unlink('.assets/img/avatar/' . $row['avatar']); 
            }
            $sql = "UPDATE ads_users SET avatar='".$name."' WHERE id='".users_info($_SESSION['id'], 'id')."'";
            $run = mysqli_query($conn,$sql);
         	$data = [ 
     				'status'     => 200,
    	     		'message'    => 'Uğurla yeniləndi', 
    	     		'sorguNtc'   => true
        	     	];
         }
         else
         {
         	$data = [ 
     				'status'     => 204,
    	     		'message'    => 'Xəta baş verdi', 
    	     		'sorguNtc'   => false
        	     	];
         }
         echo json_encode($data);
    }
}
else
{
    include("index.html");
}
 ?>