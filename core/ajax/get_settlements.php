<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
  define('BASEPATH', true);
  include_once("../../core/config/database.php");
  include_once("../../core/helpers/general_helper.php");
  $error = [];
  $res   = [];
 

  if (empty($_POST['region_id'])) 
  {
    $error[] = "Zəhmət olmasa rayon seçin.";
  }

  if (count($error) > 0) 
  {
    $resp['msg']    = $error;
    $resp['status'] = false;
    echo json_encode($resp);
    exit;
  }

  $region_id      = clean($_POST['region_id']); 

  $statement    = "SELECT * FROM settlements WHERE region_id = '".$region_id."' ";
  $execute      = mysqli_query($conn,$statement);
  $cnt    	    = mysqli_num_rows($execute); 

    if ($cnt > 0) 
    { 
      while($bax = mysqli_fetch_array($execute))
      {
        $data_settlement[] = [
        'settlement_id'       => $bax['id'],
        'settlement_name'     => $bax['settlement_name']
        ];
      }
    	echo json_encode($data_settlement);
    } 
    else 
    {

    	$data_settlement = [];

    	echo json_encode($data_settlement);
    }

   
}