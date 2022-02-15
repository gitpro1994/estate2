<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include("../../../core/config/database.php");
    include("../../../core/helpers/general_helper.php");

    if($_FILES["avatar"]["name"] != '')
    {
         $test 		= explode('.', $_FILES["avatar"]["name"]);
         $ext  		= end($test);
         $name 		= 'avatar'.rand(100, 999) . '.' . $ext;
         $location 	= '../../assets/images/profile/' . $name;  
         $admin_id  = has_userdata('loggedin_id');
         if(move_uploaded_file($_FILES["avatar"]["tmp_name"], $location))
         {
            $old  = "SELECT * FROM login_credentials WHERE id='".$admin_id."'";
            $oldQ = mysqli_query($conn,$old);
            $row  = mysqli_fetch_array($oldQ);
            if (file_exists('../assets/images/profile/' . $row['avatar'])) {
            unlink('../../assets/images/profile/' . $row['avatar']); 
            }
            $sql = "UPDATE login_credentials SET avatar='".$name."' WHERE id='".$admin_id."'";
            $run = mysqli_query($conn,$sql);
            // $title   = $_SESSION['username']." profil şəklini dəyişdirdi";
            // $content = $_SESSION['username']." profil şəklini dəyişdirdi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
            // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
            // $log_run = mysqli_query($conn,$logs);
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