<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  define('BASEPATH', true);
  include_once("../../core/config/database.php");
  include_once("../../core/helpers/general_helper.php");
  $error = [];
  $res   = [];


  if (empty($_POST['phone_number'])) {
    $error[] = "Zəhmət olmasa əlaqə nömrənizi daxil edin.";
  }

  if (count($error) > 0) {
    $resp['status']  = 404;
    $resp['icon']    = 'error';
    $resp['message'] = 'Zəhmət olmasa əlaqə nömrənizi daxil edin';
    echo json_encode($resp);
    exit;
  }

  $phone_number      = clean($_POST['phone_number']);


  $statement  = "SELECT * FROM ads_users WHERE phone_number = '" . $phone_number . "' AND status=2 ";
  $execute    = mysqli_query($conn, $statement);
  $cnt        = mysqli_num_rows($execute);
  $bax        = mysqli_fetch_array($execute);

  if ($cnt === 1) {

    $check_ads_number = "SELECT COUNT(*) FROM ads WHERE user_id='" . $bax['id'] . "' ";
    $run_query =  mysqli_query($conn, $check_ads_number);
    $count_listings = mysqli_num_rows($run_query);

    if ($count_listings == 0) {
      $data = [
        'icon'             => 'info',
        'status'           => 200,
        'name'              => $bax['name'],
        'surname'          => $bax['surname'],
        'email'            => $bax['email'],
        'phone_number'      => $bax['phone_number'],
        'user_kind'        => $bax['user_type'],
        'message'          => 'Hörmətli ' . $bax['surname'] . ' ' . $bax['name'] . ', davam edə bilərik.'
      ];

      echo json_encode($data);
    } elseif ($count_listings == 1) {
      $data = [
        'icon'             => 'info',
        'status'           => 200,
        'name'              => $bax['name'],
        'surname'          => $bax['surname'],
        'email'            => $bax['email'],
        'phone_number'      => $bax['phone_number'],
        'user_kind'        => $bax['user_type'],
        'message'          => 'Hörmətli ' . $bax['surname'] . ' ' . $bax['name'] . ', sizin 1 pulsuz elan əlavə etmək hüququnuz var. Davam edə bilərik.'
      ];

      echo json_encode($data);
    } elseif ($count_listings >= 2) {
      $data = [
        'icon'             => 'info',
        'status'           => 200,
        'name'              => $bax['name'],
        'surname'          => $bax['surname'],
        'email'            => $bax['email'],
        'phone_number'      => $bax['phone_number'],
        'user_kind'        => $bax['user_type'],
        'message'          => 'Hörmətli ' . $bax['surname'] . ' ' . $bax['name'] . ', Sizin vaxtı bitməmiş 2 elanınız olduğu üçün yeni elan əlavə edə bilməzsiniz.'
      ];

      echo json_encode($data);
    }
  } elseif (!preg_match("/[0-9]{3}[0-9]{3}[0-9]{4}/", $phone_number)) {
    $data = [
      'icon'             => 'warning',
      'status'           => 404,
      'message'          => 'Daxil etdiyiniz nömrə doğru formatda deyil'

    ];

    echo json_encode($data);
  } else {
    $data = [
      'icon'             => 'success',
      'status'           => 204,
      'message'          => 'Xoş gördük, davam edə bilərik.'
    ];

    echo json_encode($data);
  }
} else {
  include_once "index.html";
}
