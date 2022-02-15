<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
  define('BASEPATH', true);
  include_once("../../core/config/database.php");
  include_once("../../core/helpers/general_helper.php");
  
  $old_pass               = clean($_POST['old_pass']);
  $old_pass               = hash("sha256",$old_pass);
  $new_password           = clean($_POST['new_password']);
  $new_hash               = hash("sha256",$new_password);

  $error    = false;
  foreach($_POST as $key => $field) 
  {
    if (empty($_POST[$key])) 
    {
      $error = true;
    }
  }
  
  if ($error) 
  {
    $data = [ 
        'status'     => 204,
        'title'      => translate('error'),
        'message'    => translate('all_area_is_required'), 
        'sorguNtc'   => true
            ];
  }

  $select_user   = mysqli_query($conn,"SELECT password FROM ads_users WHERE id='".$_SESSION['id']."'");
  $user_password = mysqli_fetch_array($select_user);

  if($user_password['password'] === $old_pass)
  {
    $update_pass = mysqli_query($conn, "UPDATE ads_users SET password='".$new_hash."' WHERE id='".$_SESSION['id']."' ");
    if ($update_pass) 
    {
      $data = [ 
        'status'     => 200,
        'title'      => translate('success'),
        'message'    => translate('password_updated'), 
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
        'message'    => translate('password_not_updated'), 
        'sorguNtc'   => true
            ];
        echo json_encode($data);
        exit;
    }
    

  }
  else
  {
    $data = [ 
        'status'     => 204,
        'title'      => translate('error'),
        'message'    => translate('hello'), 
        'sorguNtc'   => true
            ];
        echo json_encode($data);
        exit;

  }
}