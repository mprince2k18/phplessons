<?php

require 'db.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 m-auto">
				<form action="login_post.php" method="POST">


					<!-- <div class="form-group">
					   <label for="name">Name</label>
					   <input type="text" class="form-control" id="name" placeholder="Name" name="name">
					</div> -->


					<div class="form-group">
					   <label for="exampleInputEmail1">Email address</label>
					   <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">					   
					</div>

					<div class="form-group">
					   <label for="exampleInputPassword1">Password</label>
					   <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
					</div>


					<!-- <div class="form-group">
					   <label for="phone">Phone</label>
					   <input type="number" class="form-control" id="phone" placeholder="Phone" name="phone">
					</div> -->

					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>