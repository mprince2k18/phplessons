<?php require 'session.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>


<?php 

$user_id  		= $_POST['id'];
$user_name		= $_POST['username'];
$user_email  	= $_POST['email'];
$user_message 	= $_POST['message'];




$uploaded_file = $_FILES['photo'];
$after_explode = explode('.',$uploaded_file['name']);
$extention = end($after_explode);
$allowed_extention = array('jpg','jpeg','png','gif');
if(in_array($extention, $allowed_extention)){
  if($uploaded_file['size'] <= 2000000){
    $insert_query = "INSERT INTO innova_table(name,email,message) VALUES('$user_name','$user_email','$user_message')";
    $result = mysqli_query($db_connection,$insert_query);
    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extention;
    $new_location = 'uploads/'.$file_name;
    move_uploaded_file($uploaded_file['tmp_name'], $new_location);
    $name_to_save_db = $file_name;
    $update_query	=	"UPDATE innova_table SET name='$user_name' ,email='$user_email' ,message= '$user_message' WHERE id='$user_id'";
 $result		=	mysqli_query($db_connection,$update_query);
 header('location:message_view.php');



  }
  else{
    echo "file is too large";
  }
}
else{
 $update_query	=	"UPDATE innova_table SET name='$user_name' ,email='$user_email' ,message= '$user_message' WHERE id='$user_id'";
 $result		=	mysqli_query($db_connection,$update_query);
 header('location:message_view.php');
}



















?>


<?php require 'footer.php'; ?>