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
   $searchQuery = " AND (type_name LIKE '%".$searchValue."%' ) ";
}

## Filtersiz umumi netice sayi
$sel                    = mysqli_query($conn,"SELECT COUNT(*) AS allcount FROM realty_kinds");
$records                = mysqli_fetch_assoc($sel);
$totalRecords           = $records['allcount'];

## Filterli umumi netice sayi
$sel                    = mysqli_query($conn,"SELECT COUNT(*) as allcount FROM realty_kinds WHERE 1 ".$searchQuery);
$records                = mysqli_fetch_assoc($sel);
$totalRecordwithFilter  = $records['allcount'];

## Cixan neticeler
$empQuery   = "SELECT * FROM realty_kinds WHERE 1 ".$searchQuery." ORDER BY ".$columnName." ".$columnSortOrder." LIMIT ".$row.",".$rowperpage;
$empRecords = mysqli_query($conn, $empQuery);
$data       = array();


while($bax = mysqli_fetch_assoc($empRecords))
{   
$updater = ($bax['updated_at']) ? $bax['updated_at'] : translate('not_edited_yet');

$up_date = ($bax['updated_at']) ? explode(" ",$bax['updated_at']) : $bax['updated_at'];
$cre_ate = ($bax['created_at']) ? explode(" ",$bax['created_at']) : $bax['created_at'];
$update  = ($bax['updated_at']) ? config_date($up_date[0]).' '.$up_date[1] : $bax['updated_at'];
$created = ($bax['created_at']) ? config_date($cre_ate[0]).' '.$cre_ate[1] : $bax['created_at'];
$sub_array = array();
$sub_array[] = '<div class="form-check mb-0 mt-0"><label class="form-check-label"><input type="checkbox" name="id[]" value="'.$bax['id'].'" class="form-check-input checkbox"><i class="input-helper"></i></label></div>';
$sub_array[] = $bax['id'];
$sub_array[] = '<a href="'.base_url().'/edit_ads_type/'.$bax['id'].'" class="renk_baslik" title="'.translate('edit').'">'.$bax['kind_name'].'</a>';
$sub_array[] = '<div class="btn btn-inverse-success btn-sm"> '.($bax['created_at']) ? $created : '---' .' </div>';
$sub_array[] = '<div class="btn btn-inverse-warning btn-sm">'. ($bax['updated_at']) ? $update : '---' .' </div>';
$sub_array[] = ($bax['status']==1) ? '<div class="badge badge-outline-success">'.translate('active').'</div>' : '<div class="badge badge-outline-danger">'.translate('deactive').'</div>';
$sub_array[] = '<a href="'.base_url().'/edit_ads_type/'.$bax['id'].'" class="btn btn-inverse-primary btn-sm"><i class="ti-pencil-alt" title="'.translate('edit').'"></i></a>
            <a href="del_adstype/'.$bax['id'].'" class="btn btn-inverse-danger btn-sm popconfirm" title="'.translate('delete').'"><i class="ti-trash"></i></a>';
 
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

 


 


