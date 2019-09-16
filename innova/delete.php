<?php require 'session.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>


<?php 

$user_id  = $_GET['id'];

$delete_query	=	"DELETE FROM innova_table WHERE id='$user_id'";
$result		=	mysqli_query($db_connection,$delete_query);
header('location:message_view.php');

?>


<?php require 'footer.php'; ?>