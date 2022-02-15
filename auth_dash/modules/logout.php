<?php 
if (isset($_SESSION) AND !empty($_SESSION)) 
{
    // $title   = "Sistemdən çıxış edildi";
    // $content = "<b>".$_SESSION['username']."</b> istifadəçisi sistemdən çıxış etdi. Cihaz IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
    // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
    // $log_run = mysqli_query($conn,$logs);
                    
    unlink($_SESSION['loggedin_id']);     
    unlink($_SESSION['ip']);			  
    unlink($_SESSION['name']);     
    unlink($_SESSION['surname']);     
    unlink($_SESSION['soft']);   		
    unlink($_SESSION['avatar']);     
    unlink($_SESSION['status']);		  
    unlink($_SESSION['username']);        
    unlink($_SESSION['email']);        
    unlink($_SESSION['loggedin']);     
    session_destroy();
    header("Location:login");
}
else
{
    header("Location:login");
}

 ?>