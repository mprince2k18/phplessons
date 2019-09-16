
<?php
require 'dashboard/dash_header.php';
 ?>



<?php





$user_id = $_GET['id'];
$select_query = "SELECT * FROM contact_message WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);

$after_assoc = mysqli_fetch_assoc($db_return);

$name = $after_assoc['name'];
$email = $after_assoc['email'];
$message = $after_assoc['message'];
$photo = $after_assoc['photo'];

?>



            <section class="text-white has-overlay blue4 responsive">
                <div class="container">
                    <div class="p-t-b-50 ">
                        <h2><?php echo $name; ?>'s MESSAGE <small>Control Panel</small></h2></div>
                </div>
            </section>







<div class="col-md-4 m-auto">
    <div class="text-center py-3">
      <h2>Message Area</h2>
    </div>
    <div class="m-auto text-center">
      <!-- <table class="table table-bordered">
          <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
          </tr>
          <tr>
            <td>Eamil</td>
            <td><?php echo $email; ?></td>
          </tr>
          <tr>
            <td>Mesaage</td>
            <td><?php echo $message;?></td>
          </tr>
          <tr>
            <td>Photo</td>
            <td> <img src="uploads/<?php echo $photo;?>" alt="" width="100"> </td>
          </tr>
      </table> -->
      <div class="card" style="width: 21rem;">
        <img class="card-img-top" src="uploads/<?php echo $photo;?>" alt="Card image cap" style="max-width:50%;margin: 0 auto;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $name; ?></h5>
          <h4 class="card-title"><?php echo $email; ?></h4>
          <p class="card-text"><?php echo $message;?></p>
          <a href="message_view.php" class="btn btn-primary">Go Back</a>
        </div>
      </div>

    </div>
</div>



