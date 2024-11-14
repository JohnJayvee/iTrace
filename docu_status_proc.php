<?php
	include "perfect_function.php";

	$table_name = 'documents';

	//get user ID from URL
	$id = $_GET['id'];

	$status = $_POST['status'];
	$tracking_id =  $_POST['tracking_id'];
	$doc_details =  $_POST['doc_details'];
	$doc_title = $_POST['doc_title'];
	$doc_send_date = $_POST['doc_send_date'];
	$docu_type = $_POST['docu_type'];

	$user_editedvalues = array (
			"tracking_id" => $tracking_id,
			"doc_title" => $doc_title,
			"doc_details" => $doc_details,
			"doc_send_date" => $doc_send_date,
			"docu_type" => $docu_type,
			"status" => $status

	);

	update($user_editedvalues, $id, $table_name);
	header("Location: docu_manage.php");
?>