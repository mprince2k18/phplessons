<?php


require 'header.php';


?>

<div class="container">
  <div class="row">
    <div class="col-md-6 m-auto">
          <form action="register.php" method="POST">

      <div class="form-group">
        <label for="exampleInputName">Email address</label>
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
        <input type="date" class="form-control" id="exampleInputPassword1" name="dof">
      </div>

      <div class="form-group">
        <label>Gender</label>
      </div>
<div class="container">
      
    <div class="row">
              <!-- Default checked -->
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="defaultChecked" name="gender" value="male">
              <label class="custom-control-label" for="defaultChecked">Male</label>
            </div>

            <!-- Default checked -->
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="defaultChecked" name="gender" value="female">
              <label class="custom-control-label" for="defaultChecked">Female</label>
            </div>
      </div>
</div>
      


<div class="form-group">
        <label >Message</label>
        <textarea placeholder="Write your message" rows="4" name="message"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </div>
</div>


<?php

require 'footer.php';

?>