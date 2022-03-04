<?php
    error_reporting(1);

    
    $uploadDir = 'uploads';


    if (!empty($_FILES)) 
    {
     $tmpFile = $_FILES['file']['tmp_name'];
     $filename = time().'-'. $_FILES['file']['name'];

     move_uploaded_file($tmpFile,$uploadDir.'/'.$filename);
     echo $filename;
    }


?>

