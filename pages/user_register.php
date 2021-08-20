

<?php include_once('partial/header.php'); ?>

<div style='background: linear-gradient(90deg,#1b3e8f 0%, #0c0e4d 80%); opacity: 0.9;'>
  <!-- Full Page Intro -->
  <div style='background: linear-gradient(90deg,#1b3e8f 0%, #0c0e4d 80%); opacity: 0.9;'>
    <nav class="navbar navbar-expand-lg border-bottom " style="opacity: 0.9;">
      <div class="container">
        <a class="navbar-brand" href="#">
          <strong>MAC SHOP</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
          <form class="ml-auto">
            <div class="md-form ">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </div>
      </div>
    </nav>
    
    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row mt-5">
          <!--Grid column-->
          <div class="col-md-6 mt-5 text-primary text-center text-md-left ">
            <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Sign up right now! </h1>
            <hr class="bg-light" data-wow-delay="0.3s">
            <h6 class="mb-3 text-light" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga
            nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea
            dolor molestiae, quisquam iste, maiores. Nulla.</h6>
            <a href="http://localhost/php_db_project/mac_shop_project/index.php?page=logout" class="btn btn-primary" data-wow-delay="0.3s" class="btn btn-primary">Signin</a>
            <img src="../assets/images/logo_lerg.png" alt="" class='w-25 ml-5' >
          </div>

          <!-- CACULATE USER REGISTER========================================================================= -->

          <?php

          require_once('./database/database.php');
          $msg = "";
          $isRegister = "";
          $error_pass = "";
          $error_match = "";
          $user_error ="";
          $sucess = "";
          $regex = "/^[a-zA-Z0-9\!@#$%&*()_+-=]+$/";
          $regex_error = "";

          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['sign_up'])){
              
              // verify all the required form data was entered
              if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password_2'])){
                // get all of the form data 
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password_1 = $_POST['password_1'];
                $password_2 = $_POST['password_2'];

                if(preg_match($regex, $password_1)){
                  if($password_1 === $password_2){
                    // make sure the password meets the min strength requirements
                    if (strlen($password_1) >= 6){
                      // add datas of register to database
                      $isRegister = user_register($_POST);
                      if($isRegister){
                        header("Location: ./index.php?page=home");
                        $msg = "Sucessfuly";
                      }else{
                        $msg = "Your account already exist. Please Login";
                      }

                    }else{
                      $error_pass = 'Your password is not strong enough. Please use another.';
                    }
                  }else{
                    $error_match = 'Your passwords did not match.';
                  }
                }else{
                  $regex_error = "Your password must be contain regex";
                }
              }else{
                // make sure the two passwords match
                $user_error = 'Please fill out all required fields.';
              }
            }
          }

          ?>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-5 " style='opacity: 0.8;'>
            <!--Form-->
            <form action="#" method="post">
              <div class="card" data-wow-delay="0.3s">
                <div class="card-body" style="background: linear-gradient(90deg,#7e23eb 0%, #e3e316 40%, #ad24b8 80%); opacity: 0.9;">
                  <!--Header-->
                  <div class="text-center">
                    <h3 class="text-light">
                    <i class="fa fa-user-circle text-primary" aria-hidden="true"></i> Register</h3>
                    <hr class="bg-light">
                  </div>
                  <!--Body-->
                  <div class="md-form ">
                    <strong  class='text-danger'><?= $user_error ?></strong>
                    <input type="text" id="form3" class="form-control" name='username' require>
                    <label for="form3" class="active text-white">Your name</label>
                  </div>
                  <div class="md-form">
                    <input type="email" id="form2" class=" form-control" name='email'  require>
                    <label for="form2" class="active text-white">Your email</label>
                  </div>
                  <div class="md-form">
                    <strong class='text-danger'><?= $error_pass ?></strong>
                    <input type="password" id="form4" class=" form-control" name='password_1' require>
                    <label for="form4" class="text-white" >Your password</label>
                  </div>
                  <div class="md-form">
                    <input type="password" id="form4" class=" form-control" name='password_2'  require>
                    <label for="form4" class="text-white">Confirm password</label> <p class='text-danger'><?= $error_match ?></p>

                  </div>
                  <div class="text-center mt-4">
                    <button class="btn btn-primary text-light" name='sign_up'>Sign up</button>
                    <strong  class='text-danger'><?= $msg ?></strong>
                    <hr class="bg-light mb-3 mt-4">
                    <div class="inline-ul text-center">
                      <a class="p-2 m-2 tw-ic">
                      <i class="fa fa-instagram text-danger" aria-hidden="true"></i>
                      </a>
                      <a class="p-2 m-2 li-ic">
                      <i class="fa fa-twitter text-primary" aria-hidden="true"></i> </i>
                      </a>
                      <a class="p-2 m-2 ins-ic">
                        <i class="fa fa-facebook-official text-primary" aria-hidden="true"></i></i>
                      </a>
                    </div>
                  </div>
              </div>
            </form>
            <!--/.Form-->
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
</div>
