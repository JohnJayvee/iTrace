<?php
	include "perfect_function.php";

	$table_name = 'users';

	//get user ID from URL
	$id = $_GET['id'];

	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];

	$user_editedvalues = array (
			"username" => $username, 
			"firstname" => $firstname,
			"lastname" => $lastname
	);

	update($user_editedvalues, $id, $table_name);
	header("Location: user_manage.php");
?>