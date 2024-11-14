<?php
include "perfect_function.php";
$target_dir = "doc_files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$docuFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = filesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $error_msg1 = "File is not Compatible";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($docuFileType != "pdf" && $docuFileType != "docx") {
    echo "Sorry, only PDF & Word Document files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $table_name = "documents";
        $doc_title = $_POST['doc_title'];
        $doc_details = $_POST['doc_details'];
        $doc_send_date = $_POST['doc_send_date'];
        $doc = basename($_FILES["fileToUpload"]["name"]);
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

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>