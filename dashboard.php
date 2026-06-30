<?php
session_start();

if(!isset($_SESSION['admin'])){
header("Location: ../admin-login.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-dark bg-primary">

<div class="container">

<span class="navbar-brand">

GEAWD Admin Dashboard

</span>

<a href="logout.php" class="btn btn-light">

Logout

</a>

</div>

</nav>

<div class="container mt-5">

<div class="row">

<div class="col-md-3">

<div class="card shadow">

<div class="card-body text-center">

<h3>📢</h3>

<a href="announcements.php">Manage Announcements</a>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card shadow">

<div class="card-body text-center">

<h3>🖼️</h3>

<a href="gallery.php">

Manage Gallery

</a>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card shadow">

<div class="card-body text-center">

<h3>📂</h3>

<a href="downloads.php">

Manage Downloads

</a>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card shadow">

<div class="card-body text-center">

<h3>📬</h3>

<a href="messages.php">

Customer Messages

</a>

</div>

</div>

</div>

</div>

</div>

</body>
</html>