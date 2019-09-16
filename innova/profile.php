
<?php 

require 'dashboard/dash_header.php';

?>




<?php 


$user_id  = $_GET['id'];
// $user_email  = $_GET['email'];
// $user_message  = $_GET['message'];
// $user_photo  = $_GET['photo'];

$select_query = "SELECT * FROM innova_table WHERE id=$user_id";
$return_db  = mysqli_query($db_connection,$select_query);
$after_assoc  = mysqli_fetch_assoc($return_db);

$id = $after_assoc['id'];
$name = $after_assoc['name'];
$email = $after_assoc['email'];
$message = $after_assoc['message'];
$photo  =  $after_assoc['photo'];


 ?>








<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
<div class="container" style="margin:100px 0 0 0";>
  <div class="row">
    <div class="col-md-12">

<h2>User Message</h2>

<table class="table">
  <tr>
    <td>ID</td>
    <td><?php echo $id; ?></td>
  </tr> 
  <tr>
    <td>Name</td>
    <td><?php echo $name; ?></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><?php echo $email; ?></td>
  </tr>
  <tr>
    <td>Message</td>
    <td><?php echo $message; ?></td>
  </tr>
  <tr>
    <td>Photo</td>
    <td> <img src="uploads/<?php echo $photo; ?>" alt="" width="100"> </td>
  </tr>
</table>








</div>
</div>
</div>
</div>

<?php 

require 'dashboard/dash_footer.php';

?>
