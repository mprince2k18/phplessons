<?php


require 'db.php';
require 'header.php';



$name			=	$_POST['username'];
$email			=	$_POST['email'];
$password		=	$_POST['confirm_password'];
$mobile			=	$_POST['phone'];
$dob			=	$_POST['dof'];
$gender			=	$_POST['gender'];
$message		=	$_POST['message'];


$select_query	=	"INSERT INTO registration_data(name, email, password, phone, dof, gender, message) VALUES ('$name','$email','$password','$mobile','$dob','$gender','$message')";

$result			=	mysqli_query($db_connection,$select_query);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Data recorded</title>
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>

<h1 class="text-center">Thank you</h1>
<div class="container">
	<div class="row">
		<a href="index.php" class="btn btn-primary m-auto">Back to Homepage</a>
	</div>
</div>


</body>
</html>