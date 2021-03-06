<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	define('BASEPATH', true);
	include_once("../../core/config/database.php");
	include_once("../../core/helpers/general_helper.php");
	$error = [];
	$res   = [];

	if (empty($_POST['username']) || empty($_POST['password'])) {

		$error[] = translate("username_or_password_is_empty");
	}

	if (count($error) > 0) {
		$resp['message']    = $error;
		$resp['status']     = 404;
		$resp['icon']       = 'error';
		echo json_encode($resp);
		exit;
	}


	$username       = clean($_POST['username']);
	$password       = clean($_POST['password']);
	$pass           = hash_password($password);


	$statement  	= "UPDATE ads_users SET status=2 WHERE (username= '" . $username . "' OR email='" . $username . "' OR phone_number='" . $username . "') AND password = '" . $pass . "'";
	$execute_sql    = mysqli_query($conn, $statement);

	$statement_user = "SELECT * FROM ads_users WHERE (username= '" . $username . "' OR email='" . $username . "' OR phone_number='" . $username . "') AND password = '" . $pass . "'";
	$execute		= mysqli_query($conn, $statement_user);
	$count 			= mysqli_num_rows($execute);
	$bax        	= mysqli_fetch_array($execute);

	if ($count === 1) {

		$sessionData = [
			'id'                => $bax['id'],
			'set_lang'          => settings('translation'),
			'name'              => $bax['name'],
			'surname'           => $bax['surname'],
			'status'            => $bax['status'],
			'kadi'              => $bax['username'],
			'mail'              => $bax['email'],
			'logged_in'         => true,
		];
		set_userdata($sessionData);
		$data = [
			'status'     => 200,
			'icon'       => 'success',
			'title'      => translate("success"),
			'message'    => translate("account_activated"),
			'sorguNtc'   => true
		];
		echo json_encode($data);

		exit;
	} else {
		$data = [
			'status'     => 204,
			'icon'       => 'error',
			'title'      => translate("error"),
			'message'    => translate("unexpected_error"),
			'sorguNtc'   => true
		];
		echo json_encode($data);
		exit;
	}
} else {
	include_once("index.html");
}
