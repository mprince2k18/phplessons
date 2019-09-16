
<?php require 'header.php'; ?>
<?php require 'menu.php' ?>

<div class="section" style="margin: 100px 0";>
    <div class="container">
        <div class="row">
            <div class="alert alert-primary text-center" role="alert" style="background-color: #CCE5FF";>
                Registration Sent Successfully.
            </div>
            <div class="back_button text-center"><a href="index.php" class="btn btn-primary">BACK TO HOMEPAGE</a></div>
        </div>
    </div>
</div>




<?php require 'footer.php'; ?>
<?php



$username   =   $_POST['username'];
$usermail   =   $_POST['email'];
$password   =   $_POST['confirm_password'];
$phone  =       $_POST['phone'];
$dob    =       $_POST['dob'];

$register_query =   "INSERT INTO innova_registration(name,email,password ,phone,dob) VALUES ('$username ','$usermail','$password','$phone ','$dob')";
$result =   mysqli_query($db_connection,$register_query);

?>


