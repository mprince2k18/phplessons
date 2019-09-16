
<?php

require 'session.php';
require 'db.php';

?>

<?php



$username   =   $_POST['username'];
$usermail   =   $_POST['email'];
$password   =   $_POST['confirm_password'];
$phone  =       $_POST['phone'];
$dob    =       $_POST['dob'];

$uploaded_file = $_FILES['photo'];
$after_explode = explode('.',$uploaded_file['name']);
$extention = end($after_explode);
$allowed_extention = array('jpg','jpeg','png','gif');
if(in_array($extention, $allowed_extention)){
  if($uploaded_file['size'] <= 2000000){
    $insert_query = "INSERT INTO innova_registration(name,email,password ,phone,dob,photo) VALUES ('$username ','$usermail','$password','$phone ','$dob','$uploaded_file')";
    $result = mysqli_query($db_connection,$insert_query);
    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extention;
    $new_location = 'uploads/'.$file_name;
    move_uploaded_file($uploaded_file['tmp_name'], $new_location);
    $name_to_save_db = $file_name;
    $update = "UPDATE innova_registration SET photo='$file_name' WHERE id=$last_id";
    $photo_uploaded = mysqli_query($db_connection,$update);
    header('location:message_view.php');



  }
  else{
    echo "file is too large";
  }
}
else{
  $register_query =   "INSERT INTO innova_registration(name,email,password ,phone,dob,photo) VALUES ('$username ','$usermail','$password','$phone ','$dob','$uploaded_file')";
$result =   mysqli_query($db_connection,$register_query);
}





?>




