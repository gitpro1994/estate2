<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
  define('BASEPATH', true);
  include_once("../../core/config/database.php");
  include_once("../../core/helpers/general_helper.php");

  $id     =   $_POST["data_id"];
  $class  =   $_POST["class_name"];

  if ($class=="flaticon-heart") 
  {
    
    $data = [
            "icon"      => "success",
            "action"    => "add",
            "status"    => 200,
            "add_class" => "fa fa-heart",
            "rem_class" => "flaticon-heart",
            "message"   => "Seçilmişlərə əlavə edildi"
    ];
  }
  else
  {
    
    $data = [
            "icon"      => "success",
            "action"    => "remove",
            "status"    => 200,
            "add_class" => "flaticon-heart",
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