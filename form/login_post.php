<?php
	require 'session.php';
	require 'db.php';



$email 	=	$_POST['email'];
$password 	=	$_POST['password'];

$select_query	=	"SELECT COUNT(*) as prince FROM form_info WHERE email='$email' and password='$password'";

$result			=	mysqli_query($db_connecttion,$select_query);

$after_assoc	=	mysqli_fetch_assoc($result);


if ($after_assoc['prince'] == 1 ) {
	
	header('location:profile.php');
}
else{
	
	header('location:login.php');
}









?>


