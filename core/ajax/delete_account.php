<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{
  define('BASEPATH', true);
  include_once("../../core/config/database.php");
  include_once("../../core/helpers/general_helper.php");
  $error = [];
  $res   = [];


  if (empty($_POST['id'])) 
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

  $data                 = clean($_POST['id']);
  if (users_info($_SESSION['id'], 'status') == 0) 
  {
    $data = [
      'status'     => 204,
      'icon'       => 'warning',
      'message'    => 'Hesabınız daha öncə dondurulub.',
      'sorguNtc'   => false
    ];
    echo json_encode($data);
  } 
  elseif ($_SESSION['id'] === $data) 
  {
    $ads_status = "UPDATE ads SET status=0 WHERE user_id='" . users_info($_SESSION['id'], 'id') . "'";
    $ads_run    = mysqli_query($conn, $ads_status);


    /* İstifadeciye aid elanlarin statusunu deyis */
    if ($ads_run) 
    {
      $update_status_user   = "DELETE FROM ads_users WHERE  id= '" . $data . "' ";
      $execute_qry          = mysqli_query($conn, $update_status_user);

      /* END */

      if ($execute_qry) 
      {
        $data = [
          'status'     => 200,
          'icon'       => 'success',
          'message'    => 'Uğurla silindi!',
          'sorguNtc'   => true
        ];
        echo json_encode($data);
      } 
      else 
      {
        $data = [
          'status'     => 204,
          'icon'       => 'error',
          'message'    => 'Xəta baş verdi',
          'sorguNtc'   => false
        ];
        echo json_encode($data);
      }
    } 
    else 
    {
      $data = [
        'status'     => 204,
        'icon'       => 'warning',
        'message'    => 'Yalnız şəxsi profiliniz üzərində dəyişiklik etmə hüququnuz var',
        'sorguNtc'   => false
      ];
      echo json_encode($data);
    }
  }
} 
else 
{
  include_once("index.html");
}
