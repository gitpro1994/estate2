<?php

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    define('BASEPATH', true);
    include_once "../../core/config/database.php";
    include_once "../../core/helpers/general_helper.php";

    $id             = clean($_POST['id']);

    $error         = false;

    foreach ($_POST as $key => $field) {
        if (empty($_POST[$key])) {
            $error = true;
        } else {
            $error = false;
        }
    }

    if ($error) {
        $data = [
            'status'     => 204,
            'icon'       => 'error',
            'title'      => translate('error'),
            'message'    => translate('please_select_item_for_delete'),
            'sorguNtc'   => true
        ];
    } else {

        $sql = "DELETE FROM wishlists WHERE data_id='" . $id . "' AND session_id='" . $_SESSION['unique_session'] . "'";
        $execute = mysqli_query($conn, $sql);
        $ran = "SELECT * FROM wishlists WHERE session_id='" . $_SESSION['unique_session'] . "'";
        $run = mysqli_query($conn, $ran);
        $cn = mysqli_num_rows($run);
        $data = [
            'status'     => 200,
            'icon'       => 'success',
            'title'      => translate('success'),
            'message'    => translate('successfully_removed'),
            'count'      => ($cn != 0) ? $cn : 0,
            'sorguNtc'   => true
        ];
    }
    echo json_encode($data);
} else {
    include_once("index.html");
}
