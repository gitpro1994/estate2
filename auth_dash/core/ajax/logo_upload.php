<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include("../../../core/config/database.php");
    include("../../../core/helpers/general_helper.php");

    if($_FILES["logo_file"]["name"] != '')
    {
         $test 		= explode('.', $_FILES["logo_file"]["name"]);
         $ext  		= end($test);
         $name 		= 'logo'.rand(100, 999) . '.' . $ext;
         $location 	= '../../../assets/uploads/logo/' . $name;  
         if(move_uploaded_file($_FILES["logo_file"]["tmp_name"], $location))
         {
            $old  = "SELECT logo FROM global_settings";
            $oldQ = mysqli_query($conn,$old);
            $row  = mysqli_fetch_array($oldQ);
            if (file_exists('../../../assets/uploads/logo/' . $row['logo'])) {
                unlink('../../../assets/uploads/logo/' . $row['logo']); 
            }
            $sql = "UPDATE global_settings SET logo='".$name."'";
            $run = mysqli_query($conn,$sql);
            // $title   = "Əsas loqo dəyişdirildi";
            // $content = "Sistemdə əsas loqo dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
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