<?php
session_start();

if(!isset($_SESSION['admin'])){
header("Location: ../admin-login.php");
exit;
}

if(isset($_POST['upload'])){

$file=$_FILES['image']['name'];

$tmp=$_FILES['image']['tmp_name'];

move_uploaded_file($tmp,"../uploads/gallery/".$file);

echo "<script>alert('Image Uploaded Successfully');</script>";

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Gallery</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Upload Gallery Image</h2>

<form method="POST" enctype="multipart/form-data">

<input type="file" name="image" class="form-control mb-3" required>

<button class="btn btn-primary" name="upload">

Upload

</button>

</form>

</div>

</body>
</html>