<?php

function getConnection()
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "itrace";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection Failed: ".$conn->connect_error);
	}

	return $conn;
}

function get($table_name)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name";
	$result = $conn->query($sql);
	return $result;
}

function get_where($table_name, $id)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where id=$id";
	$result = $conn->query($sql);
	return $result;
}

function get_where_custom($table_name, $column, $value)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where ".$column."='".$value."'";
	$result = $conn->query($sql);
	return $result;
}

function insert($data, $table_name) 
{
	$conn = getConnection();
	$fields = ""; $values = "";

	foreach ($data as $key => $value) {
		$fields = $fields."$key".",";
		$values = $values."'".$value."',";
	}

	$cnt_fields = strlen($fields);
	$cnt_values = strlen($values);

	$fields = substr($fields, 0, $cnt_fields-1);
	$values = substr($values, 0, $cnt_values-1);

	$sql = "INSERT INTO $table_name (".$fields.") values (".$values.")";

	if ($conn->query($sql) === TRUE) {
    	$result =  "Record created successfully";
	} else {
	    $result = "Error: " . $sql . "<br>" . $conn->error;
	}
	return $result;
}

function update($data, $id, $table_name) 
{
	$conn = getConnection();
	$str="";

	foreach ($data as $key => $value) {
		$str = $str.$key."='".$value."',";
	}

	$cnt_str = strlen($str);

	$str = substr($str, 0, $cnt_str-1);

	$sql = "UPDATE $table_name set ".$str." where id='".$id."'";

	if ($conn->query($sql) === TRUE) {
    	$result =  " ";
	} else {
	    $result = "Error: " . $sql . "<br>" . $conn->error;
	}
	return $result;
}

function delete($id, $table_name)
{
	$conn = getConnection();
	$sql = "DELETE FROM $table_name where id=$id";
	if ($conn->query($sql) == TRUE) {
		$result = "Record deleted successfully";
	} else {
		$result = "Error: " . $sql . "<br>" . $conn->error;	
	}
	return $result;
}

function custom_query($mysql_query)
{
	//for select statements only
	$conn = getConnection();
	$sql = $mysql_query;
	$result = $conn->query($sql);	
	return $result;
}

function base_url()
{
	$project_name = "itrace";
	return "http://" . $_SERVER['SERVER_NAME'].'/'.$project_name.'/'; 
}

function get_where_double($col1, $value1, $col2, $value2)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where $col1=$value1 and $col2=$value2";
	$result = $conn->query($sql);
	return $result;
}

function _hash_string($str)
{
	$hashed_string = password_hash($str, PASSWORD_BCRYPT, array('cost'=>11));
	return $hashed_string;
}

function _verify_hash($plain_text_str, $hashed_string)
{
	$result = password_verify($plain_text_str, $hashed_string);
	return $result; //[1]TRUE or [0]FALSE
}

function _get_pword_from_username($username, $table_name) 
{
	$user_data = get_where_custom($table_name, "username", $username);
	foreach ($user_data as $key => $row) {
		return $password = $row['password'];
	}
	
}

function generate_random_string($length)
{
	$characters = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';
	$randomString = '';
	for ($i=0;$i< $length; $i++){
		$randomString .= $characters[rand(0, strlen($characters) - 1)];
	}
	return $randomString;
}

function _get_photo_from_id($table_name, $id) {
	$user_data = get_where($table_name, $id);
	foreach ($user_data as $key => $row) {
		return $photo = $row['photo'];
	}
}

function _get_sliderpic_from_id($table_name, $id) {
	$sliderpic_data = get_where($table_name, $id);
	foreach ($sliderpic_data as $key => $row) {
		return $picture = $row['picture'];
	}
}

function count_rows($table_name)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name";
	$result = $conn->query($sql);
	$rowcount=mysqli_num_rows($result);
	return $rowcount;
}

function _fire_email($target_email, $subject, $msg)
{
    $to = $target_email;
    $subject = $subject;
    $message = $msg;
    $headers = "From: cbabaranjr@gmail.com\r\n";
    $headers .= "Content-type: text/html; charset=\"UTF-8\"; format=flowed \r\n";
    mail($to, $subject, $message, $headers);
}

function get_max($table_name)
{
	$mysql_query = "SELECT MAX(id) as id FROM users";
	$result = custom_query($mysql_query);
	foreach ($result as $key => $row) {
		return $row['id'];
	}
}

function _get_id_from_token($token) {
	$result = get_where_custom("tokens", "token", $token);
	foreach ($result as $key => $row) {
		return $row['user_id'];
	}
}
function _get_id_from_username($username) {
	$result = get_where_custom("users", "username", $username);
	foreach ($result as $key => $row) {
		return $row['id'];
	}
}

function _get_fullname_from_id( $id) {
	$user_data = get_where("users", $id);
	foreach ($user_data as $key => $row) {
		return $row['firstname']." ".$row['lastname'];
	}
}

function _get_firstname_from_id( $id) {
	$user_data = get_where("users", $id);
	foreach ($user_data as $key => $row) {
		return $row['firstname'];
	}
}

function _get_id_from_firstname( $firstname) {
	$user_data = get_where("users", "firstname",$firstname);
	foreach ($user_data as $key => $row) {
		return $row['id'];
	}
}

function _get_status_from_id( $id) {
	$user_data = get_where("users", $id);
	foreach ($user_data as $key => $row) {
		return $row['status'];
	}
}
function save_logs ($text)
{
	$log_data = array(

		"text" => $text,
		"datetime" => time()
		);
	insert($log_data, "logs");

}

function _get_username_from_id( $id) {
	$user_data = get_where("users", $id);
	foreach ($user_data as $key => $row) {
		return $row['username'];
	}
}



function get_docuid_from_id($table_name, $id){
	$user_data = get_where($table_name, $id);
	foreach ($user_data as $key => $row) {
		return $docu_type= $row['docu_type'];
}
}

function get_statid_from_id($table_name, $id){
	$user_data = get_where($table_name, $id);
	foreach ($user_data as $key => $row) {
		return $status = $row['status'];
}
}


function _get_type_from_id( $id) {
	$user_data = get_where("users", $id);
	foreach ($user_data as $key => $row) {
		return $row['acct_type'];
	}
}




//created by
//Carlos L. Babaran Jr.
//02-15-2018
//...to be continued
?>