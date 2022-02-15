<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include("../../../core/config/database.php");
    include("../../../core/helpers/general_helper.php");

    if($_FILES["contact"]["name"] != '')
    {
         $test 		= explode('.', $_FILES["contact"]["name"]);
         $ext  		= end($test);
         $name 		= 'contact'.rand(100, 999) . '.' . $ext;
         $location 	= '../../../assets/uploads/backgrounds/contact/' . $name;  
         if(move_uploaded_file($_FILES["contact"]["tmp_name"], $location))
         {
            $old  = "SELECT * FROM background_images WHERE page='contact'";
            $oldQ = mysqli_query($conn,$old);
            $row  = mysqli_fetch_array($oldQ);
            if (file_exists('../../../assets/uploads/backgrounds/contact/' . $row['photo'])) {
                unlink('../../../assets/uploads/backgrounds/contact/' . $row['photo']); 
            }
            $sql = "UPDATE background_images SET photo='".$name."' WHERE page='contact'";
            $run = mysqli_query($conn,$sql);
            $title   = site_url()."/contact səhifəsinin arxa fon şəkli dəyişdirildi";
            $content = site_url()."/contact səhifəsinin arxa fon şəkli <b>".$_SESSION['username']."</b> tərəfindən dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
            $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
            $log_run = mysqli_query($conn,$logs);
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