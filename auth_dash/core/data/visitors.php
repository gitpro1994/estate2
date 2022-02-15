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
   $searchQuery = " AND (ip_adres LIKE '%".$searchValue."%' OR 
        visitor_info LIKE '%".$searchValue."%' OR 
        visit_date LIKE '%".$searchValue."%' ) ";
}

## Filtersiz umumi netice sayi
$sel                    = mysqli_query($conn,"SELECT COUNT(*) AS allcount FROM site_visitor");
$records                = mysqli_fetch_assoc($sel);
$totalRecords           = $records['allcount'];

## Filterli umumi netice sayi
$sel                    = mysqli_query($conn,"SELECT COUNT(*) as allcount FROM site_visitor WHERE 1 ".$searchQuery);
$records                = mysqli_fetch_assoc($sel);
$totalRecordwithFilter  = $records['allcount'];

## Cixan neticeler
$empQuery   = "SELECT * FROM site_visitor WHERE 1 ".$searchQuery." ORDER BY ".$columnName." ".$columnSortOrder." LIMIT ".$row.",".$rowperpage;
$empRecords = mysqli_query($conn, $empQuery);
$data       = array();


$data = array();

while($bax = mysqli_fetch_array($empRecords))
{
$tarixi = explode(" ",$bax['visit_date']);
$info = (array)json_decode($bax['visitor_info'],JSON_UNESCAPED_UNICODE);
$sub_array = array();
$sub_array[] = '<div class="form-check mb-0 mt-0"><label class="form-check-label"><input type="checkbox" name="id[]" value="'.$bax['id'].'" class="form-check-input checkbox"><i class="input-helper"></i></label></div>';
$sub_array[] = config_date($tarixi[0]).' '.$tarixi[1];
$sub_array[] = $bax['ip'];
$sub_array[] = $bax['count'];
$sub_array[] = (isset($info['country_name'])) ? $info['country_name'] : '-';
$sub_array[] = (isset($info['city'])) ? $info['city'] : '-'; 
$sub_array[] = (isset($info['country_code'])) ? '<img width="16" src="http://assets.ipstack.com/flags/'.strtolower($info['country_code']).'.svg">' : '-';

 
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

else{
   include("index.html");
}
?>

 


