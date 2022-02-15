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

  $data_settlement = [];
  $data_hashtag = [];
  $statement    = "SELECT * FROM settlements WHERE region_id = '".$region_id."' ";
  $execute      = mysqli_query($conn,$statement);
  $cnt    	    = mysqli_num_rows($execute);

  $hashtags  		= "SELECT * FROM hashtags WHERE region_id = '".$region_id."' ";
  $execute_qry  = mysqli_query($conn,$hashtags);
  $cnt_hash   	= mysqli_num_rows($execute_qry);
    

    if ($cnt > 0) 
    { 

      while($bax = mysqli_fetch_array($execute)){
        $data_settlement = [
        'content_settlement'  => 'yes',
        'settlement'          => 'yes',
        'settlement_id'                  => $bax['id'],
        'settlement_name'     => $bax['settlement_name']
        ];
      }
    	
    	echo json_encode($data_settlement);
    } 
    else 
    {

    	$data_settlement = [
        'content_settlement' => 'empty'
      ];

    	echo json_encode($data_settlement);
    }

    // if ($cnt_hash > 0) 
    // { 

    //   while($bax = mysqli_fetch_array($execute_qry)){
    //     $data_hashtag = [
    //     'content_hashtag'   => 'yes',
    //     'hashtag'           => 'yes',
    //     'hashtag_id'    			      => $bax['id'],
    //     'hashtag_name'      => $bax['hashtag_name']
    //     ];
    //   }
    	
    // 	echo json_encode($data_hashtag);
    // } 
    // else 
    // {

    // 	$data_hashtag = [
    //     'content_hashtag' => 'empty'
    //   ];

    // 	echo json_encode($data_hashtag);
    // }
}