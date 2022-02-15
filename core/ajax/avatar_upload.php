<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    define('BASEPATH', true);
    include("../../core/config/database.php");
    include("../../core/helpers/general_helper.php");

    if($_FILES["avatar_file"]["name"] != '')
    {
         $test 		= explode('.', $_FILES["avatar_file"]["name"]);
         $ext  		= end($test);
         $name 		= 'avatar'.rand(100, 999) . '.' . $ext;
         $location 	= '../../assets/images/avatar/' . $name;  
         if(move_uploaded_file($_FILES["avatar_file"]["tmp_name"], $location))
         {
            $old  = "SELECT * FROM ads_users WHERE id='".$_SESSION['id']."' ";
            $oldQ = mysqli_query($conn,$old);
            $row  = mysqli_fetch_array($oldQ);
            if (file_exists('../../assets/images/avatar/' . $row['avatar'])) {
                unlink('../../assets/images/avatar/' . $row['avatar']); 
            }
            $sql = "UPDATE ads_users SET avatar='".$name."' WHERE id='".$_SESSION['id']."'";
            $run = mysqli_query($conn,$sql);
          
         	$data = [ 
     				'status'     => 200,
                    'icon'     => 'success',
    	     		'message'    => 'Uğurla yeniləndi', 
    	     		'sorguNtc'   => true
        	     	];
                echo json_encode($data);
         }
         else
         {
         	$data = [ 
     				'status'     => 204,
                    'icon'     => 'error',
    	     		'message'    => 'Xəta baş verdi', 
    	     		'sorguNtc'   => false
        	     	];
             echo json_encode($data);
         }
    }
}
else
{
    include("index.html");
}
 ?>