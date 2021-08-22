<?php

    // $logout_found = false;
    if(isset($_GET['page'])){ /// ask page = which one of pages has on browser
        
        if($_GET['page'] == "home"){
            include_once('pages/home.php');
        }elseif($_GET['page'] == "computer"){
            include_once('pages/computer.php');
        }elseif($_GET['page'] == "phone"){
            include_once('pages/phone.php');
        }elseif($_GET['page'] == "camera"){
            include_once('pages/camera.php');
        }else{
            include_once('pages/404.php');
        }
    }else{
        include_once('pages/user_register.php');
    }

?>