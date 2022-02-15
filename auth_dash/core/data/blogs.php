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
   $searchQuery = " AND (blog_title LIKE '%".$searchValue."%' OR 
        short_text LIKE '%".$searchValue."%' OR 
        blog_content LIKE '%".$searchValue."%' ) ";
}

## Filtersiz umumi netice sayi
$sel                    = mysqli_query($conn,"SELECT COUNT(*) AS allcount FROM blogs");
$records                = mysqli_fetch_assoc($sel);
$totalRecords           = $records['allcount'];

## Filterli umumi netice sayi
$sel                    = mysqli_query($conn,"SELECT COUNT(*) as allcount FROM blogs WHERE 1 ".$searchQuery);
$records                = mysqli_fetch_assoc($sel);
$totalRecordwithFilter  = $records['allcount'];

## Cixan neticeler
$empQuery   = "SELECT * FROM blogs WHERE 1 ".$searchQuery." ORDER BY ".$columnName." ".$columnSortOrder." LIMIT ".$row.",".$rowperpage;
$empRecords = mysqli_query($conn, $empQuery);
$data       = array();


while($bax = mysqli_fetch_assoc($empRecords))
{   
$updater = (!empty($bax['updater'])) ? $bax['updater'] : translate('not_edited_yet');
$sub_array = array();
$sub_array[] = '<div class="form-check mb-0 mt-0"><label class="form-check-label"><input type="checkbox" name="id[]" value="'.$bax['id'].'" class="form-check-input checkbox"><i class="input-helper"></i></label></div>';
$sub_array[] = $bax['id'];
$sub_array[] = '<a href="'.base_url().'/edit_blog/'.$bax['id'].'" class="renk_baslik" title="'.translate('edit').'">'.$bax['blog_title'].'</a>';
$sub_array[] = '<div class="btn btn-inverse-success btn-sm"> '.$bax['creator'].' </div>';
$sub_array[] = '<div class="btn btn-inverse-warning btn-sm">'. $updater .' </div>';
$sub_array[] = ($bax['is_home']==1) ? '<div class="badge badge-outline-success">'.translate('active').'</div>' : '<div class="badge badge-outline-danger">'.translate('deactive').'</div>';
$sub_array[] = ($bax['blog_status']==1) ? '<div class="badge badge-outline-success">'.translate('active').'</div>' : '<div class="badge badge-outline-danger">'.translate('deactive').'</div>';
$sub_array[] = '<a href="'.base_url().'/edit_blog/'.$bax['id'].'" class="btn btn-inverse-primary btn-sm"><i class="ti-pencil-alt" title="'.translate('edit').'"></i></a>
				<a href="del_blog/'.$bax['id'].'" class="btn btn-inverse-danger btn-sm popconfirm" title="'.translate('delete').'"><i class="ti-trash"></i></a>';
 
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

 


