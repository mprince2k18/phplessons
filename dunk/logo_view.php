<?php
require_once 'dashboard/dash_header.php';
 ?>

<?php
require 'db.php';

$select_logo = "SELECT * FROM logo";
$logo_result = mysqli_query($db_connection,$select_logo);

?>

<section class="text-white has-overlay blue4 responsive">
                <div class="container">
                    <div class="p-t-b-50 ">
                        <h2> LOGOS <small>Control Panel</small></h2></div>
                </div>
            </section>


<div class="col-lg-12">

  <div class="col-lg-12">
    <table class="table table-bordered">
      <tr>
        <td>ID</td>
        <td>LOGO</td>
        <td>STATUS</td>
        <td>Action</td>
      </tr>
      <?php
      foreach ($logo_result as $value) {
      ?>
      <tr>
        <td><?php echo $value['id']; ?></td>
        <td> <img src="uploads/logo/<?php echo $value['logo']; ?>" alt="" width="80"> </td>
        <td>
          <?php
          if($value['status']==1){
            echo "Active";
          }
          else{
            echo "Deactive";
          }
         ?>
       </td>
       <td>
         <a href="edit_logo.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-success">Edit</button> </a>
       </td>
      </tr>
      <?php   } ?>



    </table>

  </div>


  <div class="col-lg-12">
    
    <a href="add_logo.php"><button type="button" class="btn btn-primary">Add Logo</button></a>
  </div>

  
</div>


