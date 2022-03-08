<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    define('BASEPATH', true);
    include_once("../../../core/config/database.php");
    include_once("../../../core/helpers/general_helper.php");

    $data                   = [];
    $name                   = clean($_POST['name']);
    $surname                = clean($_POST['surname']);
    $email                  = clean($_POST['email']);
    $phone_number           = clean($_POST['phone_number']);
    $user_type              = $_POST['user_type'];
    $password               = $_POST['password'];
    $confirm_password       = $_POST['confirm_password'];

    // Loop over field names, make sure each one exists and is not empty
    $error         = false;
    foreach ($_POST as $key => $field) {
        if (empty($_POST[$key]) and !is_numeric($user_type)) {
            $error = true;
        } else {
            $error = false;
        }
    }

    if ($error) {
        $data = [
            'status'     => 204,
            'title'      => translate('error'),
            'message'    => translate('all_area_is_required'),
            'sorguNtc'   => true
        ];
        echo json_encode($data);
    } elseif ($password != $confirm_password) {
        $data = [
            'status'     => 204,
            'title'      => translate('error'),
            'message'    => translate('passwords_are_not_same'),
            'sorguNtc'   => true
        ];
        echo json_encode($data);
    } else {

        $hash       = hash_password($password);
        $username   = current(explode('@', $email));
        $avatar     = 'default.png';
        $status     = (int)2;


        $insert_user = "INSERT INTO ads_users (name,surname,email,phone_number,user_type,avatar,username,password,status)
	    	VALUES ('" . $name . "' , '" . $surname . "' , '" . $email . "','" . $phone_number . "', $user_type ,'" . $avatar . "','" . $username . "','" . $hash . "',  $status) ";

        $run = mysqli_query($conn, $insert_user);

        if ($run) {
            $data = [
                'status'     => 200,
                'title'      => translate('success'),
                'message'    => translate('successfully_inserted'),
                'sorguNtc'   => true
            ];
            echo json_encode($data);
        } else {
            $data = [
                'status'     => 200,
                'title'      => translate('success'),
                'message'    => translate('ERROR_IN_INSERT'),
                'sorguNtc'   => true
            ];
            echo json_encode($data);
        }
    }
} else {
    include_once("index.html");
}
