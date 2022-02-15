<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
define('BASEPATH', true);
include_once "../../../core/config/database.php";
include_once "../../../core/helpers/general_helper.php";
$row = 0;
if(isset($_POST['row'])){
   $row = mysqli_real_escape_string($conn,$_POST['row']);
}
$rowperpage = 3;

// selecting posts
$query = 'SELECT * FROM logs limit '.$row.','.$rowperpage;

$result = mysqli_query($conn,$query);

$html = '';

while($row = mysqli_fetch_array($result)){
  $id = $row['id'];  
  // Creating HTML structure
  	$html .= '<div class="card rounded border mb-2 post" id="post_'.$id.'" style="position: relative; left: 0px; top: 0px;">';
	$html .= '<div class="card-body p-3 secili">';
	$html .= '<div class="media">';
	$html .= '<i class="icon-pin menu-icon icon-sm align-self-center mr-3"></i>';
	$html .= '<div class="media-body">';
	$html .= '	<h6 class="mb-1">'.$row['log_title'].'<span class="text-danger text-right">('. _d($row['log_date']).' - '.get_nicetime($row['log_date']).')</span> </h6>';
	$html .= '<p class="mb-0 text-muted">'.$row['log_content'].'</p>';

	$html .= '</div>';
	$html .= '</div>';
	$html .= '</div>';
	$html .= '</div>';
  

}

echo $html;
}
 ?>