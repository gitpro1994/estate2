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

        $select_ads_user_id = "SELECT user_id FROM ads WHERE id='" . $listing_id . "' ";
        $run_user_id = mysqli_query($conn, $select_ads_user_id);
        $bax_ads = mysqli_fetch_array($run_user_id);

        $select_user_status = "SELECT status FROM ads_users WHERE id='" . $bax_ads['user_id'] . "' ";
        $run_user_status = mysqli_query($conn, $select_user_status);
        $bax_user = mysqli_fetch_array($run_user_status);

        if ($bax_user['status'] == 0) {
            $data = [
                'icon'             => 'error',
                'status'           => 204,
                'message'          => 'Elan sahibinin hesabı silindiyi üçün elan statusu dəyişdirilə bilməz.'
            ];
        } elseif ($bax_user['status'] == 1) {
            $data = [
                'icon'             => 'error',
                'status'           => 204,
                'message'          => 'Elan sahibinin hesabı deaktiv olduğu üçün elan statusu dəyişdirilə bilməz.'
            ];
        } elseif ($bax_user['status'] == 3) {
            $data = [
                'icon'             => 'error',
                'status'           => 204,
                'message'          => 'Elan sahibinin hesabı dondurulduğu üçün elan statusu dəyişdirilə bilməz.'
            ];
        } elseif ($bax_user['status'] == 2) {

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
    }

    echo json_encode($data);
} else {
    include_once "index.html";
}
