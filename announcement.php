<?php
session_start();
include 'config/database.php';

if(isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];

$query=mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password='$password'");

if(mysqli_num_rows($query)>0){

$_SESSION['admin']=$username;

header("Location: admin/dashboard.php");

}else{

echo "<script>alert('Invalid Username or Password');</script>";

}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<title>Admin Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

</head>

<body class="bg-light">

<div class="container">

<div class="row justify-content-center">

<div class="col-md-4">

<div class="card shadow mt-5">

<div class="card-body">

<h2 class="text-center mb-4">Administrator Login</h2>

<form method="POST">

<input type="text" name="username" class="form-control mb-3" placeholder="Username" required>

<input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

<button class="btn btn-primary w-100" name="login">

Login

</button>

</form>

</div>

</div>

</div>

</div>

</div>

</body>
</html>