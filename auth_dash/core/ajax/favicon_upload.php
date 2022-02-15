<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include("../../../core/config/database.php");
    include("../../../core/helpers/general_helper.php");

    if($_FILES["favicon"]["name"] != '')
    {
         $test 		= explode('.', $_FILES["favicon"]["name"]);
         $ext  		= end($test);
         $name 		= 'favicon'.rand(100, 999) . '.' . $ext;
         $location 	= '../../../assets/uploads/favicon/' . $name;  
         if(move_uploaded_file($_FILES["favicon"]["tmp_name"], $location))
         {
            $old  = "SELECT favicon FROM global_settings";
            $oldQ = mysqli_query($conn,$old);
            $row  = mysqli_fetch_array($oldQ);
            if (file_exists('../../../assets/uploads/favicon/' . $row['favicon'])) {
            unlink('../../../assets/uploads/favicon/' . $row['favicon']); 
            }
            $sql = "UPDATE global_settings SET favicon='".$name."'";
            $run = mysqli_query($conn,$sql);
            // $title   = "Favicon dəyişdirildi";
            // $content = "Sistemdə favicon dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
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