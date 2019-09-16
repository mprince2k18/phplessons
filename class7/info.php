<?php

// cus_name
// cus_email
// cus_pass
// cus_cnfrm_pass
// cus_gender
// cus_hbd
// cus_fav
// cus_sports
// cus_msg


function br(){
	echo "<br>";
}




$blank_name	=	'';
$blank_email	=	'';
$blank_password	=	'';
$blank_cnfrm_password	=	'';
$blank_date	=	'';
$blank_gender	=	'';
$blank_subject	=	'';
$blank_fav	=	'';
$blank_sports	=	'';
$blank_msg	=	'';
$preg_pass	=	'/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/';
$pass_not_matched	=	$_POST['cus_pass'];



if(empty($_POST['cus_name']))
{
	$blank_name	=	'Please write your name';
	header('location:index.php?cus_name='.$blank_name);
}
elseif (empty($_POST['cus_email'])) {
	$blank_email =	'Please write your email address';
	header('location:index.php?cus_email='.$blank_email);
}
elseif (!filter_var($_POST['cus_email'],FILTER_VALIDATE_EMAIL)) {
	$blank_email =	'Please write your email address';
	header('location:index.php?cus_email='.$blank_email);
}
elseif (!filter_var($_POST['cus_email'],FILTER_SANITIZE_EMAIL)) {
	$blank_email =	'Please write your email address';
	header('location:index.php?cus_email='.$blank_email);
}
elseif(empty($_POST['cus_pass'])){
	$blank_password = 'Please write a strong password';
	header('location:index.php?cus_pass='.$blank_password);
}
elseif(!preg_match($preg_pass, $_POST['cus_pass'])) {
    $preg_pass = 'The password does not meet the requirements!';
    header('location:index.php?cus_pass='.$preg_pass);
  	
}
elseif(empty($_POST['cus_cnfrm_pass'])){
	$blank_cnfrm_password = 'Please confirm your password';
	header('location:index.php?cus_cnfrm_pass='.$blank_cnfrm_password);
}
elseif($_POST['cus_cnfrm_pass'] != $_POST['cus_pass']){
	$pass_not_matched = 'Password do not match';
	header('location:index.php?cus_cnfrm_pass='.$pass_not_matched);
}
elseif(empty($_POST['cus_hbd'])){
	$blank_date = 'Please pick your birth-date';
	header('location:index.php?cus_hbd='.$blank_date);
}
elseif(empty($_POST['cus_gender'])){
	$blank_gender = 'Please select your gender';
	header('location:index.php?cus_gender='.$blank_gender);
}
elseif(empty($_POST['cus_fav'])){
	$blank_fav = 'Please select your Role';
	header('location:index.php?cus_fav='.$blank_fav);
}
elseif(empty($_POST['cus_sports'])){
	$blank_sports = 'Please select your loving Sports';
	header('location:index.php?cus_sports='.$blank_sports);
}
elseif(empty($_POST['cus_msg'])){
	$blank_msg = 'Please write your message';
	header('location:index.php?cus_msg='.$blank_msg);
}
else{
	// echo $_POST['cus_name'];
	// br();
	// echo $_POST['cus_email'];
	// br();
	// echo $_POST['cus_pass'];
	// br();
	// echo $_POST['cus_cnfrm_pass'];
	// br();
	// echo $_POST['cus_hbd'];
	// br();
	// echo $_POST['cus_gender'];
	// br();
	// echo $_POST['cus_fav'];
	// foreach ($_POST['cus_sports'] as $sports) {
	// 	echo $sports . br();
	// }
	// br();
	// echo $_POST['cus_msg'];



	
    
}










?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.0/css/mdb.min.css" rel="stylesheet">
</head>
<body>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Gender</th>
      <th scope="col">DOB</th>
      <th scope="col">Favourites</th>
      <th scope="col">Sports</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $_POST['cus_name'] ?></td>
      <td><?php echo $_POST['cus_email'] ?></td>
      <td><?php echo md5($_POST['cus_pass']) ?></td>
      <td><?php echo $_POST['cus_hbd'] ?></td>
      <td><?php echo $_POST['cus_gender'] ?></td>
      <td><?php echo $_POST['cus_fav'] ?></td>
      <td><?php foreach ($_POST['cus_sports'] as $sports)
      		{
				echo $sports;
				br();
			} 
			?>
		
	</td>
      <td><?php echo $_POST['cus_msg'] ?></td>
      
    </tr>


  </tbody>
</table>
</body>
</html>