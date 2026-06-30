<?php
session_start();
include("../config/database.php");

if(!isset($_SESSION['admin'])){
header("Location: ../admin-login.php");
exit;
}

if(isset($_POST['upload'])){

$title=$_POST['title'];

$file=$_FILES['file']['name'];

$tmp=$_FILES['file']['tmp_name'];

move_uploaded_file($tmp,"../uploads/files/".$file);

mysqli_query($conn,"INSERT INTO downloads(title,file)

VALUES('$title','$file')");

echo "<script>alert('File Uploaded');</script>";

}
?>

<!DOCTYPE html>

<html>

<head>

<title>Downloads</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Upload Downloadable File</h2>

<form method="POST" enctype="multipart/form-data">

<input

type="text"

name="title"

class="form-control mb-3"

placeholder="Document Title"

required>

<input

type="file"

name="file"

class="form-control mb-3"

required>

<button

class="btn btn-success"

name="upload">

Upload

</button>

</form>

</div>

</body>

</html>