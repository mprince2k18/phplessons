<?php

	require 'db.php';

	$username	=	$_POST['cus_name'];
	$email		=	$_POST['cus_email'];
	$password	=	$_POST['cus_cnfrm_pass'];
	$phone		=	$_POST['cus_phone'];
	$dob		=	$_POST['cus_hbd'];
	$gender		=	$_POST['cus_gender'];
	$hobbies	=	$_POST['cus_fav'];
	$fav		=	$_POST['cus_sports'];
	$message	=	$_POST['cus_msg'];



	$insert_query	=	"INSERT INTO cit_table(name, email, password, Phone, DOB, Gender, Hobbies, Favourites, Message) VALUES ('$username','$email','$password','$phone','$dob','$gender','$hobbies','$fav','$message')";
	
	$result	=	mysqli_query($db_connection,$insert_query);

?>