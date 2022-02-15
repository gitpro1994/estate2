<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
	error_reporting(E_ALL);
	ini_set('display_errors', TRUE);
	ini_set('display_startup_errors', TRUE);
  	include_once("core/config/database.php");
  	include_once("core/helpers/general_helper.php");
	include_once("Image.php");
	$image = new \ImageManipulation\Image();

  	// define('BASEPATH', true);
	
	// $classLib = new imageLib();
	// die();

	// Remove Image
	if(isset($_GET['remove-img']) AND $_GET['remove-img']=='ok')
	{
		$file = clean($_POST['file']);
		if (!empty($file)) {

			$folderName = 'uploads';
		
			if (file_exists($folderName.'/'.$file)) 
			{
				if(unlink($folderName.'/'.$file))
				{
					$resp['status'] = 1;
					json_encode($resp);
				}
				else
				{
					$resp['status'] = 0;
					json_encode($resp);
				}
				
			}
		}
	}

	// Rotate Image
	if(isset($_GET['rotate-img']) AND $_GET['rotate-img']=='ok')
	{
		$file = clean($_POST['file']);

		if (!empty($file)) {

			$folderName = 'uploads';
			$fileName = $folderName.'/'.$file;
			$image->setImage($fileName);
			$image->rotate(270);
			$image->save($fileName);
			$image->clean();
			$resp['status'] = 1;
			$resp['file']   = $file;
			echo json_encode($resp);
		}
	}  
}
else
{
	include_once "index.html";
}



 ?>