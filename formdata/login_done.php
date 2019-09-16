<?php

session_start();
require 'db.php';

require 'header.php';



$email			=	$_POST['email'];
$password		=	$_POST['password'];

$select_query	=	"SELECT COUNT(*) as user_details FROM registration_data WHERE email='$email' and password='$password'";

$result			=	mysqli_query($db_connection,$select_query);

$after_assoc	=	mysqli_fetch_assoc($result);

if($after_assoc['user_details']==1){
	$_SESSION['customer_ID'];
	header('location:profile.php');
}
else{
	echo "Register Please";
	header('location:index.php');
}



?>

<?php

require 'footer.php';

?>