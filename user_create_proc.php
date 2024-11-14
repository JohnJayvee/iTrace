<?php

include "perfect_function.php";

$table_name = "users";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashed_password = _hash_string($password);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$acct_type = $_POST['acct_type'];

$user_data = array(
			"username" => $username, 
			"password" => $hashed_password, 
			"firstname" => $firstname,
			"lastname" => $lastname,
			"acct_type" => $acct_type,
			"status" => 1
);

//add record to users table
insert($user_data, $table_name);

header("Location: user_manage.php");
?>