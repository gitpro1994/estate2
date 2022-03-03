<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");

    $listing_id     = clean($_POST['listing_id']);
    $status_code    = clean($_POST['status_code']);

    if (empty($listing_id) || (empty($status_code) and $status_code != 0)) {
        $data = [
            'icon'             => 'warning',
            'status'           => 204,
            'message'          => 'Elan məlumatları yaxud status kodu seçilməyib'
        ];
    } else {
        $update_advertisement = "UPDATE ads SET status='" . $status_code . "' WHERE id='" . $listing_id . "' ";
        $run                  = mysqli_query($conn, $update_advertisement);

        if ($run) {
            $data = [
                'icon'             => 'success',
                'status'           => 200,
                'message'          => 'Elan statusu dəyişdirildi.'
            ];
        } else {
            $data = [
                'icon'             => 'error',
                'status'           => 204,
                'message'          => 'Xəta baş verdi.'
            ];
        }
    }

    echo json_encode($data);
} else {
    include_once "index.html";
}
