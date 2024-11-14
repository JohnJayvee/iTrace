<?php
include "perfect_function.php";

$submit = $_POST['submit'];
if ($submit=='cancel') {
	header("Location: docu_manage.php");
}

$table_name = "documents";

//get user ID from URL
$id = $_GET['id'];

delete($id, $table_name);

header("Location: docu_manage.php");

?>