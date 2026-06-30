<!DOCTYPE html>
<html>
<head>

<title>Gallery</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<?php include 'navbar.php'; ?>

<div class="container py-5">

<h1 class="text-center mb-5">

Photo Gallery

</h1>

<div class="row">

<?php

$images=glob("uploads/gallery/*");

foreach($images as $image){

?>

<div class="col-md-4 mb-4">

<img src="<?php echo $image; ?>" class="img-fluid rounded shadow">

</div>

<?php } ?>

</div>

</div>

</body>
</html>