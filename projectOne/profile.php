<?php 

	session_start();
	if ($_SESSION['park']) {
		echo 'welcome to profile';
	}else{
		header('location:login.php');
	}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<a href="<?php login.php; ?>" class="btn btn-primary">LOGOUT</a>
 </body>
 </html>