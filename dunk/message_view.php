


<?php
require 'dashboard/dash_header.php';
 ?>


<?php



// require 'cookie.php';

if(isset($_GET['search'])){
  $search = $_GET['search'];
  $select_query = "SELECT * FROM contact_message where email like '%$search%' or name like '%$search%'";
  $return_db = mysqli_query($db_connection,$select_query);
}

else{
  $select_query = "SELECT * FROM contact_message";
  $return_db = mysqli_query($db_connection,$select_query);
}
?>


            <section class="text-white has-overlay blue4 responsive">
                <div class="container">
                    <div class="p-t-b-50 ">
                        <h2> MESSAGE <small>Control Panel</small></h2></div>
                </div>
            </section>



 <div class="col-lg-12 m-auto">
         
         <table class="table" id="table_id">
           <thead class="">
             <tr>
               <th>ID</th>
               <th>NAME</th>
               <th>EMAIL</th>
               <th>MESSAGE</th>
               <th>PHOTO</th>
               <th>ACTION</th>
             </tr>
           </thead>
           <tbody>
           <?php
           foreach ($return_db as $value) {

            ?>
           <tr class="">
             <td><?php echo  $value['id'];?></td>
             <td><?php echo  $value['name'];?></td>
             <td><?php echo  $value['email'];?></td>
             <td><?php echo  $value['message'];?></td>
             <td> <img src="uploads/<?php echo  $value['photo'];?>" alt="" width="50"> </td>
             <td>
               <a href="single_view.php?id=<?php echo  $value['id']; ?>" class="btn btn-primary">View</a>
               //<?php
                //if($_SESSION['role']==2 || $_SESSION['role']==1){
               // ?>
               <a href="edit.php?id=<?php echo  $value['id']; ?>" class="btn btn-success">Edit</a>
             //<?php //} ?>
               //<?php
                //if($_SESSION['role']==1 || $_SESSION['role']==2){
               // ?>
               <a href="del.php?id=<?php echo  $value['id']; ?>" class="btn btn-danger">Delete</a>
              // <?php //}  ?>
             </td>

           </tr>
           <?php
               }

               if(empty($value)){
                 echo '<tr><td colspan="6" class="text-center">no data available</td></tr>';
               }
            ?>
          </tbody>
         </table>

       </div>






 <?php
?>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script>

    $(function(){
      $('#search_btn').click(function(){
        var search_data = $('#search_data').val();
        var base_url = window.location.pathname;
        var search_url = base_url+'?search='+search_data;
        window.location.href = search_url;
      });

      $('#table_id').DataTable();
    });

    </script>

