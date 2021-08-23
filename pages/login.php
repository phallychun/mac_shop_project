
<?php 
    require_once('../partial/header.php');
    require_once('../database/database.php');

    $mess_error = "";
    $mess_sucess ="";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['sign_in'])){
            if(!empty($_POST['username']) && !empty($_POST['password'])){
                
                $isUserFound = login_set($_POST);
                if($isUserFound){
                    header('Location: http://localhost/php_db_project/mac_shop_project/index.php?page=home#');
                    $mess_sucess = "Your password and username are verify sucessfuly";
                }else{
                    $mess_error = "password or username incorrect! Please try again";
                }
            }else{
                $mess_error = "Please completed all fields";
            }
        }
    }
?>

<div class="h-100 d-flex justify-content-center" style='background: linear-gradient(90deg,#141769 0%, #851470 40%, #335e33 80%); opacity: 0.9;'>
    <div class="col-md-6 col-xl-5 mb-5 p-5 " >
        <!--Form-->
        <a href="../index.php" class='btn btn-success float-left'><=Back to register</a>
        <h2 class='display-5 text-white text-center p-4'>Are you exist your account? Please Login</h2>
        <form action="#" method="post">
            <div class="card" data-wow-delay="0.3s">
            <div class="card-body" style="background: linear-gradient(90deg,#7e23eb 0%, #e3e316 40%, #ad24b8 80%); opacity: 0.9;">
                <!--Header-->
                <div class="text-center">
                <h3 class="text-light">
                <i class="fa fa-user-circle text-primary" aria-hidden="true"></i> Login User</h3>
                <hr class="bg-light">
                </div>
                <!--Body-->
                <div class="md-form ">
                <label for="form3" class="active text-white">Your name</label>
                <input type="text" id="form3" class="form-control" name='username' require>
                </div>
                
                <div class="md-form">
                    <label for="form4" class="text-white" >Your password</label>
                    <input type="password" id="form4" class=" form-control" name='password' require>
                   
                </div>
                <div class="text-center mt-4">
                    <button class="btn btn-primary text-light" name='sign_in'>Sign In</button>
                </div>
                <strong class='text-danger'> <?=$mess_error ?> </strong>
                <strong class='text-danger'> <?=$mess_sucess ?> </strong>

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
</div>

