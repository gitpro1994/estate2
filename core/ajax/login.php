<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
  define('BASEPATH', true);
  include_once("../../core/config/database.php");
  include_once("../../core/helpers/general_helper.php");
  $error = [];
  $res   = [];

  if (empty($_POST['login_email']) || empty($_POST['login_password'])) 
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

  $login      = clean($_POST['login_email']); 
  $pass       = clean($_POST['login_password']); 
  $pass       = hash_password($pass);


  $statement  = "SELECT * FROM ads_users WHERE (username= '".$login."' OR email='".$login."') AND password = '".$pass."'";
    $execute    = mysqli_query($conn,$statement);
    $cnt    = mysqli_num_rows($execute);
    $bax        = mysqli_fetch_array($execute);

    if ($cnt === 1) 
    {
      $sessionData = [
        'id'                => $bax['id'],
        'set_lang'          => settings('translation'),
        'name'              => $bax['name'],
        'surname'           => $bax['surname'],
        'status'            => $bax['status'],
        'kadi'              => $bax['username'],
        'mail'              => $bax['email'],
        'logged_in'         => true,
      ];
      set_userdata($sessionData);
      $data = [ 
        'status'     => 200,
        'title'      => translate('success'),
        'message'    => translate('registration_success'), 
        'sorguNtc'   => true
      ];
      echo json_encode($data);

      exit;
    }
    else
    {
      $data = [ 
        'status'     => 204,
        'title'      => translate('error'),
        'message'    => translate('unexpected_error'), 
        'sorguNtc'   => true
      ];
      echo json_encode($data);
      exit; 
    }
  }
