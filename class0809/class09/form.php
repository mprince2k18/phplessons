<body>

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">

      <!-- 

      $blank_name
      $blank_email
      $blank_password
      $blank_cnfrm_password
      $blank_date 
      $blank_subject
      $blank_fav  
      $blank_msg
      $blank_copy 
      
      -->


      <!--

      // cus_name
      // cus_email
      // cus_pass
      // cus_cnfrm_pass
      // cus_gender
      // cus_hbd
      // cus_fav
      // cus_sports
      // cus_msg

      -->

      <!-- Default form contact -->
<form class="text-center border border-light p-5" action="register.php" method="POST">

    <p class="h4 mb-4">Form Validation</p>

    <!-- Name -->
    <div class="error_msg">
        <?php

          if(!empty($_GET['cus_name'])){
            echo $_GET['cus_name'];
          }

        ?>
    </div>
    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name" name="cus_name">


    <!-- Email -->
    <div class="error_msg">
    <?php

      if(!empty($_GET['cus_email'])){
        echo $_GET['cus_email'];
      }

    ?>    
    </div>
    <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail" name="cus_email">

     <!-- password -->
    <div class="pass_area">
      
         <div class="error_msg">
          <?php

            if(!empty($_GET['cus_pass'])){
              echo $_GET['cus_pass'];
            }

          ?>
        </div>
    <input type="password" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Password" name="cus_pass">
        <ul class="pass_ins">
          <li>at least one letter [A-Z][a-z]</li>
          <li>a letter or one of the following: [!@#$%]</li>
          <li>there have to be 8-12 characters</li>
          <li>@ex : Prince2019!</li>
          </ul>



    </div>


     <!-- re-password -->
     <div class="error_msg">
      <?php

        if(!empty($_GET['cus_cnfrm_pass'])){
          echo $_GET['cus_cnfrm_pass'];
        }

      ?>
     </div>
    <input type="password" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Confirm Password" name="cus_cnfrm_pass">

    <!-- Phone Number -->
    <div class="error_msg">
    <?php

      if(!empty($_GET['cus_phone'])){
        echo $_GET['cus_phone'];
      }

    ?>    
    </div>
    <input type="number" id="defaultContactFormPhone" class="form-control mb-4" placeholder="Phone Number" name="cus_phone">

    <!-- HBD -->
    <div class="error_msg">
        <?php

          if(!empty($_GET['cus_hbd'])){
            echo $_GET['cus_hbd'];
          }

        ?>
    </div>
    <div class="label">
      <label>Your Date Of Birth</label>
    </div>
    
    <input type="date" id="defaultContactFormEmail" class="form-control mb-4" name="cus_hbd">


    <!-- gender-->
    <div class="gender">
      <div class="error_msg">
        <?php

          if(!empty($_GET['cus_gender'])){
            echo $_GET['cus_gender'];
          }

        ?>
      </div>
      <div class="gender_area label">
        <label>Gender</label>
      </div>
      <div class="left">
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="defaultInline1" name="cus_gender" value="Male">
          <label class="custom-control-label normal" for="defaultInline1">Male</label>
      </div>

    <!-- Default inline 2-->
      <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="defaultInline2" name="cus_gender" value="Female">
          <label class="custom-control-label normal" for="defaultInline2">Female</label>
      </div>
      </div>
      
        
    </div>

  

    <!-- Subject -->
    <div class="error-msg">
      <?php

        if(!empty($_GET['cus_fav'])){
          echo $_GET['cus_fav'];
        }

      ?>
    </div>
    <div class="label">
      <label>Your Favourite Hobbies</label>
    </div>
    
    <select class="browser-default custom-select mb-4" name="cus_fav">
        <option value="" disabled selected>Choose option</option>
        <option value="Reading">Reading</option>
        <option value="Playing">Playing</option>
        <option value="Traveling">Traveling</option>
        <option value="Sleeping">Sleeping</option>
    </select>


  <!-- Default unchecked -->
   <div class="error-msg">
      <?php

        if(!empty($_GET['cus_sports'])){
          echo $_GET['cus_sports'];
        }

      ?>
    </div>
<div class="label">
  <label>Your Loving Sports</label>
</div>

<div class="left">
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="defaultUnchecked1" name="cus_sports[]" value="Football">
      <label class="custom-control-label normal" for="defaultUnchecked1">Football</label>
  </div>

  <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="cus_sports[]" value="Cricket">
      <label class="custom-control-label normal" for="defaultUnchecked">Cricket</label>
  </div>

  <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="defaultUnchecked2" name="cus_sports[]" value="Basketball">
      <label class="custom-control-label normal" for="defaultUnchecked2">Basketball</label>
  </div>

  <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="defaultUnchecked3" name="cus_sports[]" value="Hockey">
      <label class="custom-control-label normal" for="defaultUnchecked3">Hockey</label>
  </div>
</div>



    <!-- Message -->
    <div class="error-msg">
      <?php

        if(!empty($_GET['cus_msg'])){
          echo $_GET['cus_msg'];
        }

      ?>
    </div>
    <div class="form-group">
      <div class="label">
        <label>Write Your Message</label>
      </div>
      
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message" name="cus_msg"></textarea>
    </div>

    <!-- Send button -->
    <button class="btn btn-info btn-block" type="submit">Send</button>

</form>
<!-- Default form contact -->
    </div>
  </div>
</div>
</body>
</html>