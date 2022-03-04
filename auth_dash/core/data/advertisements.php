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
  $empQuery   = "
  SELECT a.id AS ads_id,
  a.rooms AS ads_rooms,
  a.kind_id AS ads_kind_id,
  a.type_id AS ads_type_id,
  a.user_id AS ads_user_id,
  a.area AS ads_area,
  a.floor_no AS ads_floor_no,
  a.building_floor_no AS ads_building_floor_no,
  a.price AS ads_price,
  a.payment_method AS ads_payment_method,
  a.mortgage AS ads_mortgage,
  a.address AS ads_address,
  a.images AS ads_images,
  a.status AS ads_status,
  a.end_date AS ads_end_date,
  a.created_at AS ads_created_at,
  a.updated_at AS ads_updated_at,
  a.deleted_at AS ads_deleted_at,
  a.sef_url AS ads_sef_url,
  c.city_name,
  c.seo_link as city_seo_link,
  c.status as city_status,
  r.region_name,
  r.seo_link as region_seo_link,
  r.status as region_status,
  rk.kind_name,
  rk.seo_link as rk_seo_link,
  rk.status as rk_status,
  rt.type_name,
  rt.seo_link as rt_seo_link,
  rt.status as rt_status,
  au.name as au_name,
  au.surname as au_surname
  FROM ads AS a 
  LEFT JOIN cities AS c ON a.city_id=c.id 
  LEFT JOIN regions AS r ON a.regions=r.id 
  LEFT JOIN realty_kinds AS rk ON a.kind_id=rk.id
  LEFT JOIN realty_types AS rt ON a.type_id=rt.id 
  LEFT JOIN ads_users AS au ON a.user_id=au.id 
  WHERE 1 " . $searchQuery . " ORDER BY " . $columnName . " " . $columnSortOrder . " LIMIT " . $row . "," . $rowperpage;
  $empRecords = mysqli_query($conn, $empQuery);
  $data       = array();


  while ($bax = mysqli_fetch_array($empRecords)) {

    if ($bax['ads_status'] == 0) {

      $status = '<div class="input-group mb-3 ">
         <div class="  input-group-prepend min-width-full">
         <a class="dropdown-item"  href="#"   ><div class="badge badge-info w-100">' . translate("deleted") . '</div></a>
           <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span class="sr-only">Toggle Dropdown</span>
           </button>
           <div class="dropdown-menu">
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 5)" ><div class="badge badge-primary w-100" >' . translate("non_accepted") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 1)" ><div class="badge badge-danger w-100">' . translate("deactive") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 2)" ><div class="badge badge-success w-100">' . translate("active") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 3)" ><div class="badge badge-warning w-100">' . translate("under_inspection") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 4)" ><div class="badge badge-dark w-100">' . translate("expired") . '</div></a>
             <div role="separator" class="dropdown-divider"></div>
           </div>
         </div>
       </div>';
    } elseif ($bax['ads_status'] == 1) {
      $status = '<div class="input-group mb-3 ">
         <div class="  input-group-prepend min-width-full">
         <a class="dropdown-item"  href="#"    ><div class="badge badge-danger w-100">' . translate("deactive") . '</div></a>
           <button type="button" class="btn btn-outline-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span class="sr-only">Toggle Dropdown</span>
           </button>
           <div class="dropdown-menu">
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ',  0)"><div class="badge badge-info w-100"   >' . translate("deleted") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ',  5)"><div class="badge badge-primary w-100"   >' . translate("non_accepted") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ',  2)"><div class="badge badge-success w-100"   >' . translate("active") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ',  3)"><div class="badge badge-warning w-100"   >' . translate("under_inspection") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ',  4)"><div class="badge badge-dark w-100"   >' . translate("expired") . '</div></a>
             <div role="separator" class="dropdown-divider"></div>
           </div>
         </div>
       </div>';
    } elseif ($bax['ads_status'] == 2) {
      $status = '<div class="input-group mb-3 ">
         <div class="  input-group-prepend min-width-full">
         <a class="dropdown-item"  href="#"   ><div class="badge badge-success w-100">' . translate("active") . '</div></a>
           <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span class="sr-only">Toggle Dropdown</span>
           </button>
           <div class="dropdown-menu">
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 0)" ><div class="badge badge-info w-100"   >' . translate("deleted") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 1)" ><div class="badge badge-danger w-100"   >' . translate("deactive") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 5)" ><div class="badge badge-primary w-100" >' . translate("non_accepted") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 3)" ><div class="badge badge-warning w-100"   >' . translate("under_inspection") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 4)" ><div class="badge badge-dark w-100"   >' . translate("expired") . '</div></a>
             <div role="separator" class="dropdown-divider"></div>
           </div>
         </div>
       </div>';
    } elseif ($bax['ads_status'] == 3) {
      $status = '<div class="input-group mb-3 ">
         <div class="  input-group-prepend min-width-full">
         <a class="dropdown-item"  href="#"   ><div class="badge badge-warning w-100">' . translate("under_inspection") . '</div></a>
           <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span class="sr-only">Toggle Dropdown</span>
           </button>
           <div class="dropdown-menu">
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 0)"><div class="badge badge-info w-100"   >' . translate("deleted") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 1)"><div class="badge badge-danger w-100"   >' . translate("deactive") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 2)"><div class="badge badge-success w-100"   >' . translate("active") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 5)"><div class="badge badge-primary w-100" >' . translate("non_accepted") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 4)"><div class="badge badge-dark w-100"   >' . translate("expired") . '</div></a>
             <div role="separator" class="dropdown-divider"></div>
           </div>
         </div>
       </div>';
    } elseif ($bax['ads_status'] == 4) {
      $status = '<div class="input-group mb-3 ">
         <div class="  input-group-prepend min-width-full">
         <a class="dropdown-item"  href="#"   ><div class="badge badge-dark w-100">' . translate("expired") . '</div></a>
           <button type="button" class="btn btn-outline-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span class="sr-only">Toggle Dropdown</span>
           </button>
           <div class="dropdown-menu">
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 0)"><div class="badge badge-info w-100"   >' . translate("deleted") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 1)"><div class="badge badge-danger w-100"   >' . translate("deactive") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 2)"><div class="badge badge-success w-100"   >' . translate("active") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 3)"><div class="badge badge-warning w-100"   >' . translate("under_inspection") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 5)"><div class="badge badge-primary w-100" >' . translate("non_accepted") . '</div></a>
             <div role="separator" class="dropdown-divider"></div>
           </div>
         </div>
       </div>';
    } elseif ($bax['ads_status'] == 5) {
      $status = '<div class="input-group mb-3 ">
         <div class="  input-group-prepend min-width-full">
         <a class="dropdown-item"  href="#"   ><div class="badge badge-primary w-100">' . translate("non_accepted") . '</div></a>
           <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span class="sr-only">Toggle Dropdown</span>
           </button>
           <div class="dropdown-menu">
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 0)"><div class="badge badge-info w-100" >' . translate("deleted") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 1)"><div class="badge badge-danger w-100"   >' . translate("deactive") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 2)"><div class="badge badge-success w-100"   >' . translate("active") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 3)"><div class="badge badge-warning w-100"   >' . translate("under_inspection") . '</div></a>
             <a class="dropdown-item" onclick="status_control(' . $bax['ads_id'] . ', 4)"><div class="badge badge-dark w-100"   >' . translate("expired") . '</div></a>
             <div role="separator" class="dropdown-divider"></div>
           </div>
         </div>
       </div>';
    }


    $updater = ($bax['ads_updated_at']) ? $bax['ads_updated_at'] : translate('not_edited_yet');
    $val     = ($bax['ads_kind_id'] == 1) ? 'satılır' : 'kirayə verilir';
    $up_date = ($bax['ads_updated_at']) ? explode(" ", $bax['ads_updated_at']) : $bax['ads_updated_at'];
    $cre_ate = ($bax['ads_created_at']) ? explode(" ", $bax['ads_created_at']) : $bax['ads_created_at'];
    $update  = ($bax['ads_updated_at']) ? config_date($up_date[0]) . ' ' . $up_date[1] : $bax['ads_updated_at'];
    $created = ($bax['ads_created_at']) ? config_date($cre_ate[0]) . ' ' . $cre_ate[1] : $bax['ads_created_at'];
    $sub_array = array();
    $sub_array[] = '<div class="form-check mb-0 mt-0"><label class="form-check-label"><input type="checkbox" name="id[]" value="' . $bax['ads_id'] . '" class="form-check-input checkbox"><i class="input-helper"></i></label></div>';
    $sub_array[] = $bax['ads_id'];
    $sub_array[] = '<a href="">' . $bax['city_name'] . ' şəhərində, ' . $bax["ads_area"] . ' m² - ' . $bax['type_name'] . ' ' . $val . '</a>';
    $sub_array[] = $bax['ads_price'] . ' ₼';
    $sub_array[] = $bax['au_name'] . ' ' . $bax['au_surname'];
    $sub_array[] = '<div class="btn btn-inverse-warning btn-sm">' . ($bax['ads_updated_at']) ? $update : '---' . ' </div>';
    $sub_array[] = @$status;
    $sub_array[] = '<a href="' . base_url() . '/edit_cities/' . $bax['ads_id'] . '" class="btn btn-inverse-primary btn-sm"><i class="ti-pencil-alt" title="' . translate('edit') . '"></i></a>
				<a href="del_advertisement/' . $bax['ads_id'] . '" class="btn btn-inverse-danger btn-sm popconfirm" title="' . translate('delete') . '"><i class="ti-trash"></i></a>';

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
