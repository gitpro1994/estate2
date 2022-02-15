<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
  define('BASEPATH', true);
  include_once("../../../core/config/database.php");
  include_once("../../../core/helpers/general_helper.php");

  if (isset($_POST['dataid']) AND (isset($_POST['check']))) 
  {
  
    $dataid = $_POST['dataid'];
  	$up 	  = "UPDATE modul_functionalities SET module_status='".$_POST['check']."' WHERE id=".$dataid."";
  	$upr 	  = mysqli_query($conn,$up);
  	
  	/* modules select for logs */
   //  $qry  	= "SELECT * FROM modules WHERE saheNomre='sahe".$dataid[0]."' AND modulid='".$dataid[1]."' ";
   //  $exec 	= mysqli_query($conn,$qry);
   //  $rows   = mysqli_fetch_array($exec);
 		
   //  $status  = ($_POST['check']==1) ? 'aktivləşdirildi' : 'deaktivləşdirildi';
 		// $title   = $rows['module_name']." adlı modulun statusu ". $status;
   //  $content = $rows['module_name']." adlı modulun statusu ".$status.". Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
   //  $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
   //  $log_run = mysqli_query($conn,$logs);

	  	$data = [ 
	     		'status'     => 200,
 					'title'      => translate('success'),
	     		'message'    => translate('successfully_updated'), 
	     		'sorguNtc'   => true
	     		];
	
		echo json_encode($data);
  }
}
else
{  	
  include_once "index.html";
}
 ?>