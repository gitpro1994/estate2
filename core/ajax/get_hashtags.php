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

  $hashtags  		= "SELECT * FROM hashtags WHERE region_id = '".$region_id."' ";
  $execute_qry  = mysqli_query($conn,$hashtags);
  $cnt_hash   	= mysqli_num_rows($execute_qry);
  

    if ($cnt_hash > 0) 
    { 
      while($bax = mysqli_fetch_array($execute_qry))
      {
        $data_hashtag[] = [
        'hashtag_id'    	  => $bax['id'],
        'hashtag_name'      => $bax['hashtag_name']
        ];
      }
    	echo json_encode($data_hashtag);
    } 
    else 
    {

    	$data_hashtag = [];

    	echo json_encode($data_hashtag);
    }
}