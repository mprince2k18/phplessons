<?php
require 'session.php';
require 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$select_query = "SELECT COUNT(*) as innova_details,name FROM innova_registration WHERE email='$email' and password='$password'";

$result = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result);

if($after_assoc['innova_details']==1){
	$_SESSION['name']	=	$after_assoc['name'];
	$_SESSION['photo']	=	$after_assoc['photo'];

  header('location:message_view.php');
}
else {
  echo "invalid email or password";
}

 ?>
