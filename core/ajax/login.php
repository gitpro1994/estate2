<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  define('BASEPATH', true);
  include_once("../../core/config/database.php");
  include_once("../../core/helpers/general_helper.php");
  $error = [];
  $res   = [];

  if (empty($_POST['username']) || empty($_POST['password'])) {

    $error[] = translate("username_or_password_is_empty");
  }

  if (count($error) > 0) {
    $resp['message']    = $error;
    $resp['status']     = 404;
    $resp['icon']       = 'error';
    echo json_encode($resp);
    exit;
  }


  $username       = clean($_POST['username']);
  $password       = clean($_POST['password']);
  $pass           = hash_password($password);


  $statement  = "SELECT * FROM ads_users WHERE (username= '" . $username . "' OR email='" . $username . "' OR phone_number='" . $username . "') AND password = '" . $pass . "'";
  $execute    = mysqli_query($conn, $statement);
  $cnt        = mysqli_num_rows($execute);
  $bax        = mysqli_fetch_array($execute);

  if ($cnt === 1) {
    if ($bax['status'] == 2) {
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
        'icon'       => 'success',
        'title'      => translate("success"),
        'message'    => translate("registration_success"),
        'sorguNtc'   => true
      ];
      echo json_encode($data);

      exit;
    } elseif ($bax['status'] == 3) {

      $data = [
        'status'     => 100,
        'icon'       => 'warning',
        'title'      => translate("info"),
        'message'    => translate("Your_account_has_already_been_frozen_The_account_will_be_activated_while_it_is_included_continue?"),
        'sorguNtc'   => true
      ];
      echo json_encode($data);
      exit;
    } elseif ($bax['status'] == 4) {
      $data = [
        'status'     => 101,
        'icon'       => 'warning',
        'title'      => translate("info"),
        'message'    => translate("your_account_has_been_blocked"),
        'sorguNtc'   => true
      ];
      echo json_encode($data);
      exit;
    } elseif ($bax['status'] == 1) {
      $data = [
        'status'     => 101,
        'icon'       => 'error',
        'title'      => translate("info"),
        'message'    => translate("your_account_is_inactive"),
        'sorguNtc'   => true
      ];
      echo json_encode($data);
      exit;
    } else {
      $data = [
        'status'     => 404,
        'icon'       => 'error',
        'title'      => translate("error"),
        'message'    => translate("user_not_found"),
        'sorguNtc'   => true
      ];
      echo json_encode($data);
      exit;
    }
  } elseif ($cnt === 0) {
    $data = [
      'status'     => 404,
      'icon'       => 'error',
      'title'      => translate("error"),
      'message'    => translate("user_not_found"),
      'sorguNtc'   => true
    ];
    echo json_encode($data);
    exit;
  } else {
    $data = [
      'status'     => 204,
      'icon'       => 'error',
      'title'      => translate("error"),
      'message'    => translate("unexpected_error"),
      'sorguNtc'   => true
    ];
    echo json_encode($data);
    exit;
  }
}
