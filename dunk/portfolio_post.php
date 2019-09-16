<?php
require 'db.php';
$status = $_POST['status'];

$uploaded_file = $_FILES['portfolio'];
$after_explode = explode('.',$uploaded_file['name']);
$extention = end($after_explode);
$allowed_extention = array('jpg','jpeg','png','gif');
if(in_array($extention, $allowed_extention)){
  if($uploaded_file['size'] <= 2000000){

    if($status==1){
      $update_status = "UPDATE portfolio SET status=0";
      $update_query = mysqli_query($db_connection,$update_status);

      $update = "INSERT INTO portfolio (status) VALUES ('$status')";
      $photo_uploaded = mysqli_query($db_connection,$update);
      $last_id = mysqli_insert_id($db_connection);
      $file_name = $last_id.'.'.$extention;
      $new_location = 'uploads/portfolio/'.$file_name;
      move_uploaded_file($uploaded_file['tmp_name'], $new_location);
      $name_to_save_db = $file_name;
      $update = "UPDATE portfolio SET portfolio='$file_name' WHERE id='$last_id'";
      $photo_uploaded = mysqli_query($db_connection,$update);
      header('location:add_portfolio.php');
    }
    else{
      $update = "INSERT INTO portfolio (status) VALUES ('$status')";
      $photo_uploaded = mysqli_query($db_connection,$update);
      $last_id = mysqli_insert_id($db_connection);
      $file_name = $last_id.'.'.$extention;
      $new_location = 'uploads/portfolio/'.$file_name;
      move_uploaded_file($uploaded_file['tmp_name'], $new_location);
      $name_to_save_db = $file_name;
      $update = "UPDATE portfolio SET portfolio='$file_name' WHERE id='$last_id'";
      $photo_uploaded = mysqli_query($db_connection,$update);
      header('location:add_portfolio.php');
    }
  }
  else{
    echo "file is too large";
  }
}
else{
  echo "Invalid File Format";
}

?>
