<?php


require "link.php";

$username	=	$_POST['name'];
$email	=	$_POST['email'];
$password	=	$_POST['password'];

$insert_query	= 	"INSERT INTO cit_table(name, email, password) VALUES ('$username','$email','$password')";
$result	=	mysqli_query($db_connection,$insert_query);


?>