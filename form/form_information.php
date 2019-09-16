<?php
	require 'session.php';
	require 'db.php';


$name		=	$_POST['name'];
$email		=	$_POST['email'];
$password	=	$_POST['password'];
$phone		=	$_POST['phone'];


$insert_query	=	"INSERT INTO form_info(name, email, password, phone) VALUES ('$name','$email','$password','$phone')";

$result			=	mysqli_query($db_connecttion,$insert_query);

if ($result) {
	echo "Thank you";
}


?>