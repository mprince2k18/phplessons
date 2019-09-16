<?php require 'db.php'; ?>
<?php require 'session.php'; ?>


<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Get In Touch</h2>
          <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
         


          <?php
          if(!empty($_SESSION['success'])){
           ?>
          <div class="alert alert-danger" role="alert">
              <?php
              echo $_SESSION['success'];
              unset($_SESSION['success']);
              ?>
          </div>
          <?php } ?>


        <form name="sentMessage" id="contactForm" action="sentMessage.php" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">


              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required" name="name">
                <p class="help-block text-danger"></p>
              </div>



            </div>


            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required" name="email">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>


          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required name="message"></textarea>
            <p class="help-block text-danger"></p>
          </div>

          <div class="form-group">
                <input type="file" id="file" class="form-control"required="required" name="photo">
                <p class="help-block text-danger"></p>
          </div>


          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>













      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h4>Contact Info</h4>
        <p><span>Address</span>4321 California St,<br>
          San Francisco, CA 12345</p>
      </div>
      <div class="contact-item">
        <p><span>Phone</span> +1 123 456 1234</p>
      </div>
      <div class="contact-item">
        <p><span>Email</span> info@company.com</p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="social">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>