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
      $searchQuery = " AND (name LIKE '%" . $searchValue . "%' )";
      $searchQuery .= " OR (surname LIKE '%" . $searchValue . "%' )";
      $searchQuery .= " OR (email LIKE '%" . $searchValue . "%' )";
      $searchQuery .= " OR (username LIKE '%" . $searchValue . "%' )";
      $searchQuery .= " OR (phone_number LIKE '%" . $searchValue . "%' )";
   }

   ## Filtersiz umumi netice sayi
   $sel                    = mysqli_query($conn, "SELECT COUNT(*) AS allcount FROM ads_users");
   $records                = mysqli_fetch_assoc($sel);
   $totalRecords           = $records['allcount'];

   ## Filterli umumi netice sayi
   $sel                    = mysqli_query($conn, "SELECT COUNT(*) as allcount FROM ads_users WHERE 1 " . $searchQuery);
   $records                = mysqli_fetch_assoc($sel);
   $totalRecordwithFilter  = $records['allcount'];

   ## Cixan neticeler
   $empQuery      = "SELECT * FROM ads_users  WHERE 1 " . $searchQuery . " ORDER BY " . $columnName . " " . $columnSortOrder . " LIMIT " . $row . "," . $rowperpage;
   $empRecords    = mysqli_query($conn, $empQuery);

   $data          = array();


   while ($bax = mysqli_fetch_assoc($empRecords)) {

      $select_users  = "SELECT * FROM ads WHERE user_id = '" . $bax['id'] . "' ";
      $run_query     = mysqli_query($conn, $select_users);
      $count_listing = mysqli_num_rows($run_query);

      if ($bax['status'] == 0) {

         $status = '<div class="input-group mb-3 ">
            <div class="  input-group-prepend min-width-full">
            <a class="dropdown-item"  href="#"   ><div class="badge badge-info w-100">' . translate("deleted") . '</div></a>
              <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" onclick="user_status_control(' . $bax['id'] . ', 1)" ><div class="badge badge-danger w-100">' . translate("deactive") . '</div></a>
                <a class="dropdown-item" onclick="user_status_control(' . $bax['id'] . ', 2)" ><div class="badge badge-success w-100">' . translate("active") . '</div></a>
                <a class="dropdown-item" onclick="user_status_control(' . $bax['id'] . ', 3)" ><div class="badge badge-warning w-100">' . translate("froozen") . '</div></a>
                <div role="separator" class="dropdown-divider"></div>
              </div>
            </div>
          </div>';
      } elseif ($bax['status'] == 1) {
         $status = '<div class="input-group mb-3 ">
            <div class="  input-group-prepend min-width-full">
            <a class="dropdown-item"  href="#"    ><div class="badge badge-danger w-100">' . translate("deactive") . '</div></a>
              <button type="button" class="btn btn-outline-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" onclick="user_status_control(' . $bax['id'] . ',  0)"><div class="badge badge-info w-100"   >' . translate("deleted") . '</div></a>
                <a class="dropdown-item" onclick="user_status_control(' . $bax['id'] . ',  2)"><div class="badge badge-success w-100"   >' . translate("active") . '</div></a>
                <a class="dropdown-item" onclick="user_status_control(' . $bax['id'] . ', 3)" ><div class="badge badge-warning w-100">' . translate("froozen") . '</div></a>
                <div role="separator" class="dropdown-divider"></div>
              </div>
            </div>
          </div>';
      } elseif ($bax['status'] == 2) {
         $status = '<div class="input-group mb-3 ">
            <div class="  input-group-prepend min-width-full">
            <a class="dropdown-item"  href="#"   ><div class="badge badge-success w-100">' . translate("active") . '</div></a>
              <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" onclick="user_status_control(' . $bax['id'] . ', 0)" ><div class="badge badge-info w-100"   >' . translate("deleted") . '</div></a>
                <a class="dropdown-item" onclick="user_status_control(' . $bax['id'] . ', 1)" ><div class="badge badge-danger w-100"   >' . translate("deactive") . '</div></a>
                <a class="dropdown-item" onclick="user_status_control(' . $bax['id'] . ', 3)" ><div class="badge badge-warning w-100">' . translate("froozen") . '</div></a>
                <div role="separator" class="dropdown-divider"></div>
              </div>
            </div>
          </div>';
      } elseif ($bax['status'] == 3) {
         $status = '<div class="input-group mb-3 ">
            <div class="  input-group-prepend min-width-full">
            <a class="dropdown-item"  href="#"   ><div class="badge badge-warning w-100">' . translate("froozen") . '</div></a>
              <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" onclick="user_status_control(' . $bax['id'] . ', 0)"><div class="badge badge-info w-100"   >' . translate("deleted") . '</div></a>
                <a class="dropdown-item" onclick="user_status_control(' . $bax['id'] . ', 1)"><div class="badge badge-danger w-100"   >' . translate("deactive") . '</div></a>
                <a class="dropdown-item" onclick="user_status_control(' . $bax['id'] . ', 2)"><div class="badge badge-success w-100"   >' . translate("active") . '</div></a>
                <div role="separator" class="dropdown-divider"></div>
              </div>
            </div>
          </div>';
      }

      $sub_array = array();
      $sub_array[] = '<div class="form-check mb-0 mt-0"><label class="form-check-label"><input type="checkbox" name="id[]" value="' . $bax['id'] . '" class="form-check-input checkbox"><i class="input-helper"></i></label></div>';
      $sub_array[] = $bax['id'];
      $sub_array[] = '<a href="' . base_url() . '/edit_users/' . $bax['id'] . '" class="renk_baslik" title="' . translate('edit') . '">' . $bax['name'] . ' ' . $bax['surname'] . '</a>';
      $sub_array[] = '<div class="btn btn-inverse-success btn-sm"> ' . ($bax['user_type'] == 0) ? 'Əmlak sahibi' : 'Vasitəçi' . '  </div>';
      $sub_array[] = '<div class="btn btn-inverse-success btn-sm">  ' . $bax['phone_number'] . '  </div>';
      $sub_array[] = '<div class="btn btn-inverse-dark btn-sm">' . $count_listing . ' elan </div>';
      $sub_array[] = $status;
      $sub_array[] = '<a href="' . base_url() . '/edit_users/' . $bax['id'] . '" class="btn btn-inverse-primary btn-sm"><i class="ti-pencil-alt" title="' . translate('edit') . '"></i></a>
				<a href="del_users/' . $bax['id'] . '" class="btn btn-inverse-danger btn-sm popconfirm" title="' . translate('delete') . '"><i class="ti-trash"></i></a>';

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
