<?php 

require_once('database/database.php');
// MANAGER USER ADMIN ============================================================================================================


function admin_user(){
    $role_set = database()->query("SELECT username FROM users WHERE roleId = 1");
    $user_found = false;
        // print_r($role_set); 
    // session_start();

    foreach($role_set as $role){
        if($role['username'] === $_SESSION["user_login"]){
            $user_found = true;
        }
    }
    return $user_found ;
}




