<?php
require_once 'dashboard/dash_header.php';

?>
<?php
$user_id = $_GET['id'];
$select_query = "SELECT * FROM portfolio WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($db_return);
?>




<section class="text-white has-overlay blue4 responsive">
                <div class="container">
                    <div class="p-t-b-50 ">
                        <h2> ACTIVE PORTFOLIO <small>Control Panel</small></h2></div>
                </div>
            </section>


<div class="col-lg-12">

  <div class="col-lg-12">
    <form action="update_portfolio.php" method="post" enctype="multipart/form-data">
      <div class="col-lg-12">
        <input type="hidden" name="id" value="<?php echo $after_assoc['id']; ?>">
      </div>
      <div class="col-lg-12">
        <label for="">select status</label>
        <select name="status" class="form-control">
          <option value="1">Active</option>
          <option value="0">Deactive</option>
        </select>
      </div>
      <div class="col-lg-12">
        <button type="submit" class="btn btn-primary">submit</button>
      </div>
    </form>
  </div>
</div>

