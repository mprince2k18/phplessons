<?php

require 'dashboard/dash_header.php';

?>


      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
<div class="container">
  <div class="row">
    <div class="col-md-8 m-auto">
          <form action="user.php" method="POST" style="margin:50px 0 0 0"; enctype="multipart/form-data">

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
        <label for="file"><a href="#" class="btn btn-primary">Insert photo</a></label>
        <input type="file" id="file" class="form-control"required="required" name="photo">
        <p class="help-block text-danger"></p>
      </div>



      <button type="submit" class="btn btn-primary">Register</button>
</form>
    </div>
  </div>
</div>
</div>






<?php 
require 'dashboard/dash_footer.php';
?>