<?php

include 'config/database.php';

if(isset($_POST['send'])){

$name=$_POST['name'];

$email=$_POST['email'];

$subject=$_POST['subject'];

$message=$_POST['message'];

mysqli_query($conn,"INSERT INTO messages(name,email,subject,message)

VALUES('$name','$email','$subject','$message')");

echo "<script>alert('Message Sent Successfully');</script>";

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Contact Us</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<?php include 'navbar.php'; ?>

<div class="container py-5">

<h1 class="text-center">

Contact Us

</h1>

<form method="POST">

<input type="text" name="name" class="form-control mb-3"

placeholder="Full Name" required>

<input type="email" name="email"

class="form-control mb-3"

placeholder="Email Address" required>

<input type="text" name="subject"

class="form-control mb-3"

placeholder="Subject" required>

<textarea name="message"

class="form-control mb-3"

rows="6"

placeholder="Your Message"

required>

</textarea>

<button class="btn btn-primary"

name="send">

Send Message

</button>

</form>

</div>

</body>

</html>