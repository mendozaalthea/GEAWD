<?php
session_start();
include("../config/database.php");

if(!isset($_SESSION['admin'])){
    header("Location: ../admin-login.php");
    exit;
}

$result = mysqli_query($conn,"SELECT * FROM messages ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Customer Messages</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

<h2>Customer Messages</h2>

<table class="table table-bordered">

<tr>

<th>Name</th>

<th>Email</th>

<th>Subject</th>

<th>Message</th>

</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?= $row['name']; ?></td>

<td><?= $row['email']; ?></td>

<td><?= $row['subject']; ?></td>

<td><?= $row['message']; ?></td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>