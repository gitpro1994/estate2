<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
  define('BASEPATH', true);
  include_once("../../core/config/database.php");
  include_once("../../core/helpers/general_helper.php");

  $id          =  $_POST["data_id"];
  $class       =  $_POST["class_name"];
  
  
  if ($class=="flaticon-heart") 
  {
    $sql = "INSERT INTO wishlists (session_id,class_name,data_id) VALUES('".$_SESSION['unique_session']."','".$class."','".$id."')";
    $run = mysqli_query($conn,$sql);

      $data = [
              "icon"      => "success",
              "action"    => "add",
              "status"    => 200,
              "add_class" => "fa fa-heart",
              "all_count" => wish_count($_SESSION['unique_session']),
              "rem_class" => "flaticon-heart",
              "message"   => "Seçilmişlərə əlavə edildi"
      ];
  }
  else
  {
    $sql = "DELETE FROM wishlists WHERE session_id='".$_SESSION['unique_session']."' AND data_id='".$id."'";
    $run = mysqli_query($conn,$sql);
    $data = [
            "icon"      => "success",
            "action"    => "remove",
            "status"    => 200,
            "add_class" => "flaticon-heart",
            "all_count" => wish_count($_SESSION['unique_session']),
            "rem_class" => "fa fa-heart",
            "message"   => "Seçilmişlərdən silindi"
    ];
  }
  echo json_encode($data);
}
else
{
  include_once "index.html";
}