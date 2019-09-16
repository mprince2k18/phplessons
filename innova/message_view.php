
<?php

require 'dashboard/dash_header.php';

?>

<?php

$select_query	=	"SELECT * FROM innova_table";
$return_db	=	mysqli_query($db_connection,$select_query);

?>



      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
<div class="container" style="margin:50px 0 0 0";>
	<div class="row">
		<div class="col-md-12">
	<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
      <th scope="col">Photo</th>
    </tr>
  </thead>

<?php foreach ($return_db as $value) {
	
 ?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $value['id']; ?></th>
      <td><?php echo $value['name']; ?></td>
      <td><?php echo $value['email']; ?></td>
      <td><?php echo $value['message']; ?></td>
      <td> 
        <a href="single_view.php?id= <?php echo $value['id']; ?>" class="btn btn-primary">View</a> 
        <a href="edit.php?id= <?php echo $value['id']; ?>" class="btn btn-primary">Edit</a> 
        <a href="delete.php?id= <?php echo $value['id']; ?>" class="btn btn-primary">Delete</a>
      </td>
      <td><img src="uploads/<?php echo $value['photo']; ?>" alt="" width="100"></td>

      

      
    </tr>
  </tbody>

<?php } ?>

</table>
		</div>
	</div>
</div>
</div>

<?php 
require 'dashboard/dash_footer.php';
?>