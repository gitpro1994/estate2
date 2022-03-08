<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");

    $user_id     = clean($_POST['user_id']);
    $status_code    = clean($_POST['status_code']);

    if (empty($user_id) || (empty($status_code) and $status_code != 0)) {
        $data = [
            'icon'             => 'warning',
            'status'           => 204,
            'message'          => 'Istifadəçi məlumatları yaxud status kodu seçilməyib'
        ];
    } else {
        $update_advertisement = "UPDATE ads_users SET status='" . $status_code . "' WHERE id='" . $user_id . "' ";
        $run                  = mysqli_query($conn, $update_advertisement);

        $change_ads_status = mysqli_query($conn, "UPDATE ads SET status='" . $status_code . "' WHERE user_id='" . $user_id . "' ");

        if ($change_ads_status) {
            $data = [
                'icon'             => 'success',
                'status'           => 200,
                'message'          => 'İstifadəçi statusu dəyişdirildi.'
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
