<?php
include 'config/database.php';

$result=mysqli_query($conn,"SELECT * FROM downloads");
?>

<!DOCTYPE html>
<html>

<head>

<title>Downloads</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<?php include 'navbar.php'; ?>

<div class="container py-5">

<h1 class="text-center">

Download Center

</h1>

<table class="table table-bordered mt-5">

<tr>

<th>Document</th>

<th>Download</th>

</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['title']; ?></td>

<td>

<a href="uploads/files/<?php echo $row['file']; ?>" class="btn btn-primary">

Download

</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>

</html>