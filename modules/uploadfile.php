<?php
    error_reporting(1);

    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
    include_once("core/config/database.php");
    include_once("core/helpers/general_helper.php");
    include_once("Image.php");
    $image = new \ImageManipulation\Image();

    $uploadDir = 'uploads';

    if (!empty($_FILES)) 
    {
        $tmpFile = $_FILES['file']['tmp_name'];
        $filename = time().'-'. $_FILES['file']['name'];

        move_uploaded_file($tmpFile,$uploadDir.'/'.$filename);
        $image->setImage($uploadDir.'/'.$filename);
        $image->resize(500,500);
        // $image->watermark("logo.png",[]);
        $image->save($uploadDir.'/'.$filename);
        $image->clean();

        echo $filename;
    }


?>

