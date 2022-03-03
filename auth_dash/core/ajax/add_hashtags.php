<?php

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	define('BASEPATH', true);
	include_once("../../../core/config/database.php");
	include_once("../../../core/helpers/general_helper.php");

	$hashtag_name   = clean($_POST['hashtag_name']);
	$region    	  	= clean($_POST['region']);
	$status    	  	= (isset($_POST['status'])) ? clean($_POST['status']) : 0;

	$sel = "SELECT * FROM regions WHERE id='" . $region . "'";
	$run = mysqli_query($conn, $sel);
	$say = mysqli_num_rows($run);

	$sel_hashtag = "SELECT * FROM hashtags WHERE region_id='" . $region . "'";
	$run_hashtag = mysqli_query($conn, $sel_hashtag);
	$cnt_hashtag = mysqli_num_rows($run_hashtag);

	// Loop over field names, make sure each one exists and is not empty
	$error 		= false;
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
	}

	if ($say == 0) {
		$data = [
			'status'     => 204,
			'title'      => translate('error'),
			'message'    => translate('selected_region_not_find'),
			'sorguNtc'   => true
		];
	} else {

		$sql 		= "INSERT INTO hashtags (region_id,hashtag_name,seo_link,status,created_at) 
		VALUES('" . $region . "', '" . $hashtag_name . "', '" . seo($hashtag_name) . "', '" . $status . "', '" . $now . "')";
		$execute 	= mysqli_query($conn, $sql);

		if ($execute) {
			$data = [
				'status'     => 200,
				'title'      => translate('success'),
				'message'    => translate('successfully_inserted'),
				'sorguNtc'   => true
			];
		} else {
			$data = [
				'status'     => 204,
				'title'      => translate('error'),
				'message'    => word_to_trans_seo('An error occurred while adding the news'),
				'sorguNtc'   => true
			];
		}
	}
	echo json_encode($data);
} else {
	include_once("index.html");
}
