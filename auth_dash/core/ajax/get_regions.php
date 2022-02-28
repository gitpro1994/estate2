<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  define('BASEPATH', true);
  include_once("../../../core/config/database.php");
  include_once("../../../core/helpers/general_helper.php");

  $error = [];
  $res   = [];

  if (empty($_POST['city_id'])) {
    $error[] = "Zəhmət olmasa şəhər seçin.";
  }

  if (count($error) > 0) {
    $resp['msg']    = $error;
    $resp['status'] = false;
    echo json_encode($resp);
    exit;
  }

  $city_id      = clean($_POST['city_id']);

  $data = [];
  $statement  = "SELECT * FROM regions WHERE city_id = '" . $city_id . "' ";
  $execute    = mysqli_query($conn, $statement);
  $cnt        = mysqli_num_rows($execute);


  if ($cnt > 0) {
    while ($bax = mysqli_fetch_array($execute)) {
      $data[] = [
        'id'            => $bax['id'],
        'region_name'   => $bax['region_name']
      ];
    }
    echo json_encode(['data' => $data]);
  } else {

    $data = [];

    echo json_encode($data);
  }
}
