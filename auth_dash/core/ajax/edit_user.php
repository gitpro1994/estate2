<?php

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");

    $user_id                = clean($_POST['user_id']);
    $name                   = clean($_POST['name']);
    $surname                = clean($_POST['surname']);
    $email                  = clean($_POST['email']);
    $phone_number           = clean($_POST['phone_number']);
    $username               = clean($_POST['username']);
    $user_type              = clean($_POST['user_type']);
    $old_password           = clean($_POST['old_password']);
    $new_password           = clean($_POST['new_password']);
    $confirm_new_password   = clean($_POST['confirm_new_password']);

    $select_user_password   = mysqli_query($conn, "SELECT password FROM ads_users WHERE id='" . $user_id . "' ");

    // Loop over field names, make sure each one exists and is not empty
    $error         = false;
    foreach ($_POST as $key => $field) {
        if (empty($_POST[$key])) {
            $error = true;
        }
    }

    if ($error) {
        $data = [
            'status'     => 204,
            'title'      => translate('error'),
            'message'    => translate('all_area_is_required'),
            'sorguNtc'   => true
        ];
    } elseif ($new_password != $confirm_new_password) {
        $data = [
            'status'     => 204,
            'title'      => translate('error'),
            'message'    => translate('passwords_are_not_same'),
            'sorguNtc'   => true
        ];
    } elseif (hash_password($new_password) === $select_user_password) {
        $data = [
            'status'     => 204,
            'title'      => translate('error'),
            'message'    => translate('passwords_are_already_same'),
            'sorguNtc'   => true
        ];
    } else {

        $sql      = "UPDATE ads_users SET   name='" . $name . "', 
                                            surname='" . $surname . "', 
                                            username='" . $username . "', 
                                            phone_number='" . $phone_number . "',
                                            password='" . hash_password($new_password) . "',
                                            email='" . $email . "' WHERE id='" . $user_id . "'";
        $execute = mysqli_query($conn, $sql);

        if ($execute) {
            $data = [
                'status'     => 200,
                'title'      => translate('success'),
                'message'    => translate('successfully_inserted'),
                'sorguNtc'   => true
            ];
        }
    }
    echo json_encode($data);
} else {
    include_once("index.html");
}
