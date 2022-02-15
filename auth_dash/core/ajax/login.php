<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
	define('BASEPATH', true);
	include_once "../../../core/config/database.php";
	include_once "../../../core/helpers/general_helper.php";
	$error = [];
	$res   = [];

	if (empty($_POST['kadi']) || empty($_POST['sifre'])) 
	{
    	$error[] = "İstifadəçi adı vəya şifrə daxil edilməyib";
	}
 
	if (count($error) > 0) 
	{
	    $resp['msg']    = $error;
	    $resp['status'] = false;
	    echo json_encode($resp);
	    exit;
	}
	$login     	= clean($_POST['kadi']); 
	$pass      	= clean($_POST['sifre']); 
	$pass      	= hash_password($pass);

	$getu 		= "SELECT * FROM login_credentials WHERE (email='".$login."' OR username='".$login."') AND password='".$pass."'";
	$getr 		= mysqli_query($conn,$getu);
	$cnget      = mysqli_num_rows($getr);
	$getD       = mysqli_fetch_array($getr);
	
	// ilk once yoxlayiriq istifadecinin statusu veya qadagasi varmi
	$ban  		= "SELECT * FROM system_bans WHERE login='".$login."' AND status=1";
	$brun 		= mysqli_query($conn,$ban);
	$say_ban	= mysqli_num_rows($brun);

	$block      = "SELECT * FROM login_attempts WHERE login='".$login."'";
	$run_block  = mysqli_query($conn,$block);
	$fetch      = mysqli_fetch_array($run_block);
	$block_say  = mysqli_num_rows($run_block);

	if ($say_ban!=0) 
	{
		$row_ban = mysqli_fetch_array($brun);
		$error[] = "İstifadəçi sistem tərəfindən ban edilib.<br> <b>Səbəb: ".$row_ban['reason']."</b>";
		$resp['msg']    = $error;
	    $resp['status'] = false;
	    echo json_encode($resp);
	    exit;
	}

	// İstifadəçi varsa
	if ($cnget!=0) 
	{ 
		if ($say_ban!=0) 
		{
			$row_ban = mysqli_fetch_array($brun);
			$error[] = "İstifadəçi sistem tərəfindən ban edilib.<br> <b>Səbəb: ".$row_ban['reason']."</b>";
			$resp['msg']    = $error;
		    $resp['status'] = false;
		    echo json_encode($resp);
		    exit;
		}
		elseif ($getD['status']!=1) 
		{
			$error[] = "İstifadəçi statusu deaktivdir.";
			$resp['msg']    = $error;
		    $resp['status'] = false;
		    echo json_encode($resp);
		    exit;
		}
		elseif ($block_say!=0 AND $fetch['try_count']>=5) 
		{
			
			$second_auth    = "SELECT * FROM login_credentials WHERE (username= '".$login."' OR email='".$login."') AND second_password = '".$pass."'";
			$execute   		= mysqli_query($conn,$second_auth);
			$cnt 			= mysqli_num_rows($execute);
			$row        	= mysqli_fetch_array($execute);
			if ($cnt == 1)
			{
				 $sessionData = [
	                'loggedin_id'       => $row['id'],
	                'ip'			    => $row['ip'],
	                'set_lang'          => settings('translation'),
	                'name'              => $row['name'],
	                'surname'           => $row['surname'],
	                'soft'    			=> $row['soft'],
	                'avatar'            => $row['avatar'],
	                'status'		    => $row['status'],
	                'username'          => $row['username'],
	                'email'          	=> $row['email'],
	                'loggedin'          => true,
	       	];
			    $upta    = "UPDATE login_credentials SET last_login='".$now."', ip='".getIP()."', soft='".$_SERVER['HTTP_USER_AGENT']."'  WHERE id='".$row['id']."'";
		        $upnur   = mysqli_query($conn,$upta);
		        $res 	 = mysqli_query($conn,'SHOW TABLE STATUS WHERE Data_free / Data_length > 0.1 AND Data_free > 102400');
				while($row = mysqli_fetch_assoc($res)) 
				{
				  mysqli_query('OPTIMIZE TABLE ' . $row['Name']);
				}
			    set_userdata($sessionData);

			    $resp['status']      = true;
			    echo json_encode($resp);
			    exit;
			}
			else
			{

			if ($fetch['try_count']>=10) 
			{
						$block = "INSERT INTO system_bans (login,ip,soft,ban_date,reason) VALUES('".$login."','".getIP()."','".$_SERVER['HTTP_USER_AGENT']."','".$now."','Giriş təhlükəsizliyini aşmaq istədiyi üçün.')";
						$rnu   = mysqli_query($conn,$block);
						$error[]         = "İstifadəçi sistem tərəfindən 30 dəqiqə müddətinə bloklandı. <br>Səbəb: <b>Giriş təhlükəsizliyini aşmaq istədiyi üçün</b>";
						$resp['msg']    = $error;
					    $resp['status'] = false;
					    echo json_encode($resp);
					    exit;
			}
			$error[] = "İstifadəçinin 5 yalnış giriş cəhdi səbəbindən hesab güvənə alındı.<br><b>Sistemə giriş üçün 2-ci doğrulama şifrənizdən istifadə edin.</b>";
			$resp['msg']    = $error;
		    $resp['status'] = false;
		    echo json_encode($resp);
		    exit;
			}
		}
		else
		{
			$statement 	= "SELECT * FROM login_credentials WHERE (username= '".$login."' OR email='".$login."') AND password = '".$pass."'";
			$execute   	= mysqli_query($conn,$statement);
			$cnt 		= mysqli_num_rows($execute);
			$row        = mysqli_fetch_array($execute);
			if ($cnt === 1) 
			{
			    $sessionData = [
		                'loggedin_id'       => $row['id'],
		                'ip'			    => $row['ip'],
		                'set_lang'          => settings('translation'),
		                'name'              => $row['name'],
		                'surname'           => $row['surname'],
		                'soft'    			=> $row['soft'],
		                'avatar'            => $row['avatar'],
		                'status'		    => $row['status'],
		                'username'          => $row['username'],
		                'email'          	=> $row['email'],
		                'loggedin'          => true,
		       	];
			    $upta    = "UPDATE login_credentials SET last_login='".$now."', ip='".getIP()."', soft='".$_SERVER['HTTP_USER_AGENT']."'  WHERE id='".$row['id']."'";
		       	// dd($upta);
		        $upnur   = mysqli_query($conn,$upta);

		        $res = mysqli_query($conn,'SHOW TABLE STATUS WHERE Data_free / Data_length > 0.1 AND Data_free > 102400');
				while($row = mysqli_fetch_assoc($res)) 
				{
				  mysqli_query($conn,'OPTIMIZE TABLE ' . $row['Name']);
				}
			    set_userdata($sessionData);

			    $resp['status']      = true;
			    echo json_encode($resp);
			    exit;
			}
		}
	}
	elseif($block_say!=0 AND $fetch['try_count']>=5) 
	{
			
		$second_auth    = "SELECT * FROM login_credentials WHERE (username= '".$login."' OR email='".$login."') AND second_password = '".$pass."'";
		$execute   		= mysqli_query($conn,$second_auth);
		$cnt 			= mysqli_num_rows($execute);
		$row        	= mysqli_fetch_array($execute);
		if ($cnt == 1)
		{
			 $sessionData = [
                'loggedin_id'       => $row['id'],
                'ip'			    => $row['ip'],
                'set_lang'          => settings('translation'),
                'name'              => $row['name'],
                'surname'           => $row['surname'],
                'soft'    			=> $row['soft'],
                'avatar'            => $row['avatar'],
                'status'		    => $row['status'],
                'username'          => $row['username'],
                'email'          	=> $row['email'],
                'loggedin'          => true,
       	];
		    $upta    = "UPDATE login_credentials SET last_login='".$now."', ip='".getIP()."', soft='".$_SERVER['HTTP_USER_AGENT']."'  WHERE id='".$row['id']."'";
	        $upnur   = mysqli_query($conn,$upta);
	        $res 	 = mysqli_query($conn,'SHOW TABLE STATUS WHERE Data_free / Data_length > 0.1 AND Data_free > 102400');
			while($row = mysqli_fetch_assoc($res)) 
			{
			  mysqli_query('OPTIMIZE TABLE ' . $row['Name']);
			}

		    set_userdata($sessionData);
		    $resp['status']      = true;
		    echo json_encode($resp);
		    exit;
		}

		else
		{
		
	    $rqm         = $fetch['try_count']+1;
	    $sql 		 = "UPDATE login_attempts SET try_count='".$rqm."', ip='".getIP()."', soft='".$_SERVER['HTTP_USER_AGENT']."', try_date='".$now."' WHERE login='".$login."'";
				$sqlr        = mysqli_query($conn,$sql);
		if ($rqm>=10) 
		{
					$block = "INSERT INTO system_bans (login,ip,soft,ban_date,reason) VALUES('".$login."','".getIP()."','".$_SERVER['HTTP_USER_AGENT']."','".$now."','Giriş təhlükəsizliyini aşmaq istədiyi üçün.')";
					$rnu   = mysqli_query($conn,$block);
					$error[]         = "İstifadəçi sistem tərəfindən 30 dəqiqə müddətinə bloklandı. <br>Səbəb: <b>Giriş təhlükəsizliyini aşmaq istədiyi üçün</b>";
					$resp['msg']    = $error;
				    $resp['status'] = false;
				    echo json_encode($resp);
				    exit;
		}
		$error[] = "İstifadəçinin 5 yalnış giriş cəhdi səbəbindən hesab güvənə alındı.<br><b>Sistemə giriş üçün 2-ci doğrulama şifrənizdən istifadə edin.</b>";
		$resp['msg']    = $error;
	    $resp['status'] = false;
	    echo json_encode($resp);
	    exit;
		}
	}
	else
	{
		if ($say_ban!=0) 
		{
			$row_ban = mysqli_fetch_array($brun);
			$error[] = "İstifadəçi sistem tərəfindən 30 dəqiqə müddətinə bloklanıb.<br> <b>Səbəb: ".$row_ban['reason']."</b>";
			$resp['msg']    = $error;
		    $resp['status'] = false;
		    echo json_encode($resp);
		    exit;
		}
		elseif ((!empty($getD['status'])) AND ($getD['status']!=1)) 
		{
			$error[] = "İstifadəçi statusu deaktivdir.";
			$resp['msg']    = $error;
		    $resp['status'] = false;
		    echo json_encode($resp);
		    exit;
		}
		else
		{
			$select          = "SELECT * FROM login_attempts WHERE login='".$login."'";
			$execc           = mysqli_query($conn,$select);
			$sayi            = mysqli_num_rows($execc);
			$col   			 = mysqli_fetch_array($execc);
			if ($sayi>0) 
			{
				$rqm         = $col['try_count']+1;
				$sql 		 = "UPDATE login_attempts SET try_count='".$rqm."', ip='".getIP()."', soft='".$_SERVER['HTTP_USER_AGENT']."', try_date='".$now."' WHERE login='".$login."'";
				$sqlr        = mysqli_query($conn,$sql);
				if ($rqm==10) {
					$block = "INSERT INTO system_bans (login,ip,soft,ban_date,reason) VALUES('".$login."','".getIP()."','".$_SERVER['HTTP_USER_AGENT']."','".$now."','Giriş təhlükəsizliyini aşmaq istədiyi üçün.')";
					$rnu   = mysqli_query($conn,$block);
					$error[]         = "İstifadəçi sistem tərəfindən 30 dəqiqə müddətinə bloklandı. <br>Səbəb: <b>Giriş təhlükəsizliyini aşmaq istədiyi üçün</b>";
					$resp['msg']    = $error;
				    $resp['status'] = false;
				    echo json_encode($resp);
				    exit;
				}
				
			}
			else
			{
				$sql 		 = "INSERT INTO login_attempts (login,try_count,ip,soft,try_date) VALUES ('".$login."','1','".getIP()."','".$_SERVER['HTTP_USER_AGENT']."','".$now."')";
				$sqlr        = mysqli_query($conn,$sql);
			}
			$error[] = "İstifadəçi adı vəya şifrə yalnışdır";
			$resp['msg']    = $error;
		    $resp['status'] = false;
		    echo json_encode($resp);
		    exit;
		}
	}
	
} // Ajax request check
else
{
	include("index.html");
}

 ?>