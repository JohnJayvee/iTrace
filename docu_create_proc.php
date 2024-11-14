<?php

include "perfect_function.php";

$table_name = "documents";

$doc_title = $_POST['doc_title'];
$doc_details = $_POST['doc_details'];
$doc_send_date = $_POST['doc_send_date'];
$doc = $_POST['doc'];
$docu_type = $_POST['docu_type'];
$status = $_POST['status'];
$user_id = $_POST['user_id'];
$tracking_id = $_POST['tracking_id'];


$user_data = array(
			"doc_title" => $doc_title, 
			"doc_details" => $doc_details, 
			"doc_send_date" => $doc_send_date,
			"doc" => $doc,
			"docu_type" => $docu_type,
			"status" => 1,
			"user_id" => $user_id,
			"tracking_id" => $tracking_id

);

//add record to users table
insert($user_data, $table_name);

header("Location: docu_manage.php");
?>