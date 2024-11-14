<?php 

	if(session_status()== PHP_SESSION_NONE){
		session_start();
	}

	if($_SESSION['user_id']==""){
		header("Location:login.php");
	}

?>

