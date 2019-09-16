<?php require 'header.php'; ?>
<?php require 'menu.php' ?>



<div class="container">
  <div class="row">
    <div class="col-md-6 m-auto">
          <form action="register_db.php" method="POST" style="margin:150px 0 0 0";  enctype="multipart/form-data">

      <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="username">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Confirm password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="confirm_password">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Phone Number</label>
        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone Number" name="phone">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Date of Birth</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name="dob">
      </div>

      <div class="form-group">
                <input type="file" id="file" class="form-control"required="required" name="photo">
                <p class="help-block text-danger"></p>
          </div>


      <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </div>
</div>






<?php require 'footer.php'; ?>