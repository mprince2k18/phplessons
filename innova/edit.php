<?php 

require 'dashboard/dash_header.php';

?>

<?php 


$user_id  = $_GET['id'];


$select_query = "SELECT * FROM innova_table WHERE id=$user_id";
$return_db  = mysqli_query($db_connection,$select_query);
$after_assoc  = mysqli_fetch_assoc($return_db);

$name = $after_assoc['name'];
$email = $after_assoc['email'];
$message = $after_assoc['message'];
$photo = $after_assoc['photo'];


 ?>
<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
<div class="container">
  <div class="row">
    <div class="col-md-6 m-auto">
          <form action="update.php" method="POST" style="margin: 50px 0 0 0";>

      <div class="form-group">
        <label for="exampleInputName">Name</label>

        <input type="hidden" class="form-control" id="exampleInputName" placeholder="Enter Name" name="id" value=" <?php echo $user_id; ?> ">

        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="username" value=" <?php echo $name; ?> ">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value=" <?php echo $email; ?> ">
      </div>

 <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required name="message"> <?php echo $message; ?></textarea>
            <p class="help-block text-danger"></p>
          </div>

        <div class="col-lg-12 form-group">
        <label for="">Photo</label>
          <input type="file" name="photo">
          <br>
          <br>
          <img src="uploads/<?php echo $photo; ?>" alt="">
      </div>


      <button type="submit" class="btn btn-primary">Update</button>
</form>
    </div>
  </div>
</div>

</div>



<?php 

require 'dashboard/dash_footer.php';

?>