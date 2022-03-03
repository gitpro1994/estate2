<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
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
  $searchValue     = mysqli_real_escape_string($conn, $_POST['search']['value']); // Search value

  ## Axtaris 
  $searchQuery = " ";
  if ($searchValue != '') {
    $searchQuery = " AND (address LIKE '%" . $searchValue . "%' ) AND (price LIKE '%" . $searchValue . "%' ) ";
  }

  ## Filtersiz umumi netice sayi
  $sel                    = mysqli_query($conn, "SELECT COUNT(*) AS allcount FROM ads");
  $records                = mysqli_fetch_assoc($sel);
  $totalRecords           = $records['allcount'];

  ## Filterli umumi netice sayi
  $sel                    = mysqli_query($conn, "SELECT COUNT(*) as allcount FROM ads WHERE 1 " . $searchQuery);
  $records                = mysqli_fetch_assoc($sel);
  $totalRecordwithFilter  = $records['allcount'];

  ## Cixan neticeler
  $empQuery   = "SELECT * FROM ads AS a INNER JOIN cities AS c ON a.city_id=c.id LEFT JOIN regions AS r ON a.regions=r.id INNER JOIN realty_kinds AS rk ON a.kind_id=rk.id INNER JOIN ads_users AS au ON a.user_id=au.id INNER JOIN realty_types AS rt ON a.type_id=rt.id WHERE 1 " . $searchQuery . " ORDER BY " . $columnName . " " . $columnSortOrder . " LIMIT " . $row . "," . $rowperpage;
  $empRecords = mysqli_query($conn, $empQuery);
  $data       = array();


  while ($bax = mysqli_fetch_array($empRecords)) {

    if ($bax[22] == 0) {

      $status = '<div class="input-group mb-3 ">
         <div class="  input-group-prepend min-width-full">
         <a class="dropdown-item"  href="#"   ><div class="badge badge-info w-100">' . translate("deleted") . '</div></a>
           <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span class="sr-only">Toggle Dropdown</span>
           </button>
           <div class="dropdown-menu">
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 5)" ><div class="badge badge-primary w-100" >' . translate("non_accepted") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 1)" ><div class="badge badge-danger w-100">' . translate("deactive") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 2)" ><div class="badge badge-success w-100">' . translate("active") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 3)" ><div class="badge badge-warning w-100">' . translate("under_inspection") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 4)" ><div class="badge badge-dark w-100">' . translate("expired") . '</div></a>
             <div role="separator" class="dropdown-divider"></div>
           </div>
         </div>
       </div>';
    } elseif ($bax[22] == 1) {
      $status = '<div class="input-group mb-3 ">
         <div class="  input-group-prepend min-width-full">
         <a class="dropdown-item"  href="#"    ><div class="badge badge-danger w-100">' . translate("deactive") . '</div></a>
           <button type="button" class="btn btn-outline-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span class="sr-only">Toggle Dropdown</span>
           </button>
           <div class="dropdown-menu">
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ',  0)"><div class="badge badge-info w-100"   >' . translate("deleted") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ',  5)"><div class="badge badge-primary w-100"   >' . translate("non_accepted") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ',  2)"><div class="badge badge-success w-100"   >' . translate("active") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ',  3)"><div class="badge badge-warning w-100"   >' . translate("under_inspection") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ',  4)"><div class="badge badge-dark w-100"   >' . translate("expired") . '</div></a>
             <div role="separator" class="dropdown-divider"></div>
           </div>
         </div>
       </div>';
    } elseif ($bax[22] == 2) {
      $status = '<div class="input-group mb-3 ">
         <div class="  input-group-prepend min-width-full">
         <a class="dropdown-item"  href="#"   ><div class="badge badge-success w-100">' . translate("active") . '</div></a>
           <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span class="sr-only">Toggle Dropdown</span>
           </button>
           <div class="dropdown-menu">
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 0)" ><div class="badge badge-info w-100"   >' . translate("deleted") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 1)" ><div class="badge badge-danger w-100"   >' . translate("deactive") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 5)" ><div class="badge badge-primary w-100" >' . translate("non_accepted") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 3)" ><div class="badge badge-warning w-100"   >' . translate("under_inspection") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 4)" ><div class="badge badge-dark w-100"   >' . translate("expired") . '</div></a>
             <div role="separator" class="dropdown-divider"></div>
           </div>
         </div>
       </div>';
    } elseif ($bax[22] == 3) {
      $status = '<div class="input-group mb-3 ">
         <div class="  input-group-prepend min-width-full">
         <a class="dropdown-item"  href="#"   ><div class="badge badge-warning w-100">' . translate("under_inspection") . '</div></a>
           <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span class="sr-only">Toggle Dropdown</span>
           </button>
           <div class="dropdown-menu">
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 0)"><div class="badge badge-info w-100"   >' . translate("deleted") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 1)"><div class="badge badge-danger w-100"   >' . translate("deactive") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 2)"><div class="badge badge-success w-100"   >' . translate("active") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 5)"><div class="badge badge-primary w-100" >' . translate("non_accepted") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 4)"><div class="badge badge-dark w-100"   >' . translate("expired") . '</div></a>
             <div role="separator" class="dropdown-divider"></div>
           </div>
         </div>
       </div>';
    } elseif ($bax[22] == 4) {
      $status = '<div class="input-group mb-3 ">
         <div class="  input-group-prepend min-width-full">
         <a class="dropdown-item"  href="#"   ><div class="badge badge-dark w-100">' . translate("expired") . '</div></a>
           <button type="button" class="btn btn-outline-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span class="sr-only">Toggle Dropdown</span>
           </button>
           <div class="dropdown-menu">
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 0)"><div class="badge badge-info w-100"   >' . translate("deleted") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 1)"><div class="badge badge-danger w-100"   >' . translate("deactive") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 2)"><div class="badge badge-success w-100"   >' . translate("active") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 3)"><div class="badge badge-warning w-100"   >' . translate("under_inspection") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 5)"><div class="badge badge-primary w-100" >' . translate("non_accepted") . '</div></a>
             <div role="separator" class="dropdown-divider"></div>
           </div>
         </div>
       </div>';
    } elseif ($bax[22] == 5) {
      $status = '<div class="input-group mb-3 ">
         <div class="  input-group-prepend min-width-full">
         <a class="dropdown-item"  href="#"   ><div class="badge badge-primary w-100">' . translate("non_accepted") . '</div></a>
           <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span class="sr-only">Toggle Dropdown</span>
           </button>
           <div class="dropdown-menu">
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 0)"><div class="badge badge-info w-100" >' . translate("deleted") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 1)"><div class="badge badge-danger w-100"   >' . translate("deactive") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 2)"><div class="badge badge-success w-100"   >' . translate("active") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 3)"><div class="badge badge-warning w-100"   >' . translate("under_inspection") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax[0] . ', 4)"><div class="badge badge-dark w-100"   >' . translate("expired") . '</div></a>
             <div role="separator" class="dropdown-divider"></div>
           </div>
         </div>
       </div>';
    }


    $updater = ($bax['updated_at']) ? $bax['updated_at'] : translate('not_edited_yet');
    $val     = ($bax['kind_id'] == 1) ? 'satılır' : 'kirayə verilir';
    $up_date = ($bax['updated_at']) ? explode(" ", $bax['updated_at']) : $bax['updated_at'];
    $cre_ate = ($bax['created_at']) ? explode(" ", $bax['created_at']) : $bax['created_at'];
    $update  = ($bax['updated_at']) ? config_date($up_date[0]) . ' ' . $up_date[1] : $bax['updated_at'];
    $created = ($bax['created_at']) ? config_date($cre_ate[0]) . ' ' . $cre_ate[1] : $bax['created_at'];
    $sub_array = array();
    $sub_array[] = '<div class="form-check mb-0 mt-0"><label class="form-check-label"><input type="checkbox" name="id[]" value="' . $bax['id'] . '" class="form-check-input checkbox"><i class="input-helper"></i></label></div>';
    $sub_array[] = $bax[0];
    $sub_array[] = '<a href="">' . $bax['city_name'] . ' şəhərində, ' . $bax["area"] . ' m² - ' . $bax['type_name'] . ' ' . $val . '</a>';
    $sub_array[] = $bax['price'] . ' ₼';
    $sub_array[] = $bax['name'] . ' ' . $bax['surname'];
    $sub_array[] = '<div class="btn btn-inverse-warning btn-sm">' . ($bax['updated_at']) ? $update : '---' . ' </div>';
    $sub_array[] = @$status;
    $sub_array[] = '<a href="' . base_url() . '/edit_cities/' . $bax['id'] . '" class="btn btn-inverse-primary btn-sm"><i class="ti-pencil-alt" title="' . translate('edit') . '"></i></a>
				<a href="del_advertisement/' . $bax[0] . '" class="btn btn-inverse-danger btn-sm popconfirm" title="' . translate('delete') . '"><i class="ti-trash"></i></a>';

    $data[] = $sub_array;
  }

  $output = array(
    "draw"              =>  intval($draw),
    "recordsTotal"      =>  $totalRecords,
    "recordsFiltered"   =>  $totalRecordwithFilter,
    "data"              =>  $data
  );

  echo json_encode($output);
} else {
  include("index.html");
}
