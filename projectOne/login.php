<?php

session_start();
require 'header.php';


?>

<div class="container">
  <div class="row">
    <div class="col-md-6 m-auto">
      <h1>Log In</h1>
          <form action="login_done.php" method="POST">


      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
      </div>


      <button type="submit" class="btn btn-primary">log In</button>
</form>
    </div>
  </div>
</div>

















<?php

require 'footer.php';

?>