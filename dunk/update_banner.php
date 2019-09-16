<?php
require 'db.php';
$user_id = $_POST['id'];
$status = $_POST['status'];

if($status==1){
  $update_query = "UPDATE banner SET status=0";
  $result = mysqli_query($db_connection, $update_query);

  $update_query = "UPDATE banner SET status=$status WHERE id=$user_id";
  $result = mysqli_query($db_connection, $update_query);
  header("location:banner_view.php");
}
else{
  $update_query = "UPDATE banner SET status=$status WHERE id=$user_id";
  $result = mysqli_query($db_connection, $update_query);
}
 
?>
