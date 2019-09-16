<?php
require 'dashboard/dash_header.php';
 ?>


<?php

$select_query	=	"SELECT * FROM user_info";
$return_db	=	mysqli_query($db_connection,$select_query);

?>

            <section class="text-white has-overlay blue4 responsive">
                <div class="container">
                    <div class="p-t-b-50 ">
                        <h2>USER <small>Control Panel</small></h2></div>
                </div>
            </section>

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
      <th scope="col">Photo</th>
      <th scope="col">Role</th>
    </tr>
  </thead>

<?php foreach ($return_db as $value) {
	
 ?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $value['id']; ?></th>
      <td><?php echo $value['username']; ?></td>
      <td><?php echo $value['email']; ?></td>

      <td><img src="uploads/user/<?php echo $value['profile_photo']; ?>" alt="" width="100"></td>





      <td>
          <?php
          if($value['role']==1){
            echo "Admin";
          }
            elseif ($value['role']==2) {
              echo "Moderator";
            }
          else{
            echo "Subscriber";
          }
         ?>
       </td>

   

      

      
    </tr>
  </tbody>

<?php } ?>

</table>
		</div>
	</div>
</div>
</div>