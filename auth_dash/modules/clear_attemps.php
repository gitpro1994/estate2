<?php 
if ((!empty($_SESSION['username'])) AND ($_SESSION['loggedin']==1)) 
{
    $sql = "SELECT * FROM login_attempts WHERE login='".$_SESSION['username']."' OR login='".$_SESSION['email']."'";
    $run = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($run);
    $say = mysqli_num_rows($run);
    if ($say!=0) 
    {
    	$sql = "DELETE FROM login_attempts WHERE login='".$_SESSION['username']."' OR login='".$_SESSION['email']."'";
    	$ruu = mysqli_query($conn,$sql);
    	if ($ruu) 
    	{
    		$title   = strtoupper($_SESSION['username'])." istifadəçisi yalnış cəhdlərini sıfırladı.";
	        $content = "<b>".strtoupper($_SESSION['username'])."</b> istifadəçisi yalnış cəhdlərini sıfırladı. Cihaz IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
	        // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
	        // $log_run = mysqli_query($conn,$logs);
	        
    		if (!empty($_SERVER['HTTP_REFERER'])) {
		        redirect($_SERVER['HTTP_REFERER']);
		    }
		    else{
		        redirect(base_url('home'), 'refresh');  
		    }
    	}
    }
    else
	{
	        redirect(base_url('home'), 'refresh'); 
	}
    
}
else
{
        redirect(base_url('home'), 'refresh'); 
}
?>

