<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
include_once "../../../core/config/database.php";

$query = '';
 
$output = array();
$query = "SELECT * FROM language_list ORDER BY sira ASC";
$statement = mysqli_query($conn,$query);
$filtered_rows = mysqli_num_rows($statement);

$data = array();

while($bax = mysqli_fetch_array($statement))
{
$sub_array = array();
$sub_array[] = '<div class="form-check mb-0 mt-0"><label class="form-check-label"><input type="checkbox" name="id[]" value="'.$bax["id"].'" class="form-check-input"><i class="input-helper"></i></label></div>';
$sub_array[] = $bax['id'];
$sub_array[] = '<a href="edit_lang/'.$bax['lang_field'].'" class="renk_baslik" title="Düzəliş et">'.$bax['name'].'</a>';
$sub_array[] = '<img src="assets/vendors/iconfonts/flag-icon-css/flags/4x3/'.$bax['flag_key'].'.svg">';
$sub_array[] = ($bax['status']==1)? '<div class="badge badge-outline-success">Aktiv</div>' : '<div class="badge badge-outline-danger">Deaktiv</div>';
$sub_array[] = '<a href="edit_lang/'.$bax['lang_field'].'" class="btn btn-inverse-primary btn-sm"><i class="ti-pencil-alt" title="Düzəliş et"></i></a>';
				
 
 $data[] = $sub_array;
 
}
 
function get_total_all_records()
{
    global $conn;
    $statement  = "SELECT * FROM language_list";
    $statementr = mysqli_query($conn,$statement);
    return mysqli_num_rows($statementr);
}
 
$output = array(
    "draw"              =>  intval($_POST["draw"]),
    "recordsTotal"      =>  $filtered_rows,
    "recordsFiltered"   =>  get_total_all_records(),
    "data"              =>  $data
);
 
echo json_encode($output);

}

else
{
   include("index.html");
}

?>