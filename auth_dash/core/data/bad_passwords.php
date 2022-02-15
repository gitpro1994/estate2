<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
define('BASEPATH', true);
include_once "../../../core/config/database.php";
include_once "../../../core/helpers/general_helper.php";


$query = '';
 
$output = array();
## Read value
$draw            = $_POST['draw'];
$row             = $_POST['start'];
$rowperpage      = $_POST['length']; // Rows display per page
$columnIndex     = $_POST['order'][0]['column']; // Column index
$columnName      = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue     = mysqli_real_escape_string($conn,$_POST['search']['value']); // Search value

## Axtaris 
$searchQuery = " ";
if($searchValue != ''){
   $searchQuery = " AND (bad_pass LIKE '%".$searchValue."%') ";
}

## Filtersiz umumi netice sayi
$sel                    = mysqli_query($conn,"SELECT COUNT(*) AS allcount FROM password_blacklist");
$records                = mysqli_fetch_assoc($sel);
$totalRecords           = $records['allcount'];

## Filterli umumi netice sayi
$sel                    = mysqli_query($conn,"SELECT COUNT(*) as allcount FROM password_blacklist WHERE 1 ".$searchQuery);
$records                = mysqli_fetch_assoc($sel);
$totalRecordwithFilter  = $records['allcount'];

## Cixan neticeler
$empQuery   = "SELECT * FROM password_blacklist WHERE 1 ".$searchQuery." ORDER BY ".$columnName." ".$columnSortOrder." LIMIT ".$row.",".$rowperpage;
$empRecords = mysqli_query($conn, $empQuery);
$data       = array();


while($bax = mysqli_fetch_assoc($empRecords))
{   

$sub_array = array();
$sub_array[] = '<div class="form-check mb-0 mt-0"><label class="form-check-label"><input type="checkbox" name="id[]" value="'.$bax["id"].'" class="form-check-input"><i class="input-helper"></i></label></div>';
$sub_array[] = $bax['id'];
$sub_array[] = '<a href="edit_lang/'.$bax['bad_pass'].'" class="renk_baslik" title="Düzəliş et">'.$bax['bad_pass'].'</a>';
$sub_array[] = ($bax['status']==1)? '<div class="badge badge-outline-success">Aktiv</div>' : '<div class="badge badge-outline-danger">Deaktiv</div>';
$sub_array[] = '<a href="edit_lang/'.$bax['bad_pass'].'" class="btn btn-inverse-primary btn-sm"><i class="ti-pencil-alt" title="Düzəliş et"></i></a>';
				
 
 $data[] = $sub_array;
 
}
 

 
$output = array(
    "draw"              =>  intval($draw),
    "recordsTotal"      =>  $totalRecords,
    "recordsFiltered"   =>  $totalRecordwithFilter,
    "data"              =>  $data
);
 
 
echo json_encode($output);

}

else
{
   include("index.html");
}

?>