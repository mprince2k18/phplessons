<?php require 'header.php'; ?>
<?php require 'menu.php' ?>

<!-- <div class="section" style="margin: 100px 0";>
    <div class="container">
        <div class="row">
            <div class="alert alert-primary text-center" role="alert" style="background-color: #CCE5FF";>
                Message Sent Successfully.
            </div>
            <div class="back_button text-center"><a href="index.php" class="btn btn-primary">BACK TO HOMEPAGE</a></div>
        </div>
    </div>
</div>
 -->



<?php require 'footer.php'; ?>

<?php

$username   	=   $_POST['name'];
$usermail   	=   $_POST['email'];
$usermessage    =   $_POST['message'];





$uploaded_file = $_FILES['photo'];
$after_explode = explode('.',$uploaded_file['name']);
$extention = end($after_explode);
$allowed_extention = array('jpg','jpeg','png','gif');
if(in_array($extention, $allowed_extention)){
  if($uploaded_file['size'] <= 2000000){
    $insert_query = "INSERT INTO innova_table(name,email,message) VALUES('$username','$usermail','$usermessage')";
    $result = mysqli_query($db_connection,$insert_query);
    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extention;
    $new_location = 'uploads/'.$file_name;
    move_uploaded_file($uploaded_file['tmp_name'], $new_location);
    $name_to_save_db = $file_name;
    $update = "UPDATE innova_table SET photo='$file_name' WHERE id=$last_id";
    $photo_uploaded = mysqli_query($db_connection,$update);
    $_SESSION['success']='your Message sent successfully';
    header('location:index.php#contact');



  }
  else{
    echo "file is too large";
  }
}
else{
  echo "Invalid File Format";
}


// $insert_query   = "INSERT INTO innova_table(name,email,message) VALUES ('$username','$usermail','$usermessage')";
// $result =   mysqli_query($db_connection,$insert_query);



?>
