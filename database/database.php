

<?php

// CALL DATABASE FUNCTION===========================================================================================================
function database(){
    return new mysqli('localhost', 'root', '', 'computer_inventory');

}

//  SELECT PRODUCT =============================================================================================================

function selectOneProduct($product_id){
    return database()->query("SELECT * FROM products WHERE productId = $product_id");
}

//  DELTE PRODUCTS FUNCTION========================================================================================================

function deleteProduct($product_id){
    return database()->query("DELETE FROM products WHERE productId = $product_id");
}

// CREATE PRODUCTS FUNCTION============================================================================================================

function createProduct($product_value){
    $name = $product_value['name'];
    $year = $product_value['year'];
    $price = $product_value['price'];
    $profile = $product_value['profile'];
    $category = $product_value['category'];
    return database()->query("INSERT INTO products(productName,year,price,profile,categoryId) VALUES('$name','$year','$price','$profile', $category)");
   
}

//  COMPUTER FUNCTIONS =============================================================================================================

// Select All Computer function-----------------------------------------------------------------------
function selectAllPC(){
    return database()->query("SELECT * FROM products WHERE categoryId = 1 ORDER BY productId DESC");
}

// Update PC funciton------------------------------------------------------------------------------------
function updatePC($pc_value){
    $name = $pc_value['name'];
    $year = $pc_value['year'];
    $price = $pc_value['price'];
    $profile = $pc_value['profile'];
    $pC_Id = $pc_value['pc_id'];
    $category = 1;

    return database()->query("UPDATE products SET productName='$name',year='$year',price='$price',profile='$profile',categoryId=$category WHERE productId = $pC_Id");
}  


// PHONE FUNCTIONS===================================================================================================================

// Select All Phones function------------------------------------------------------------------------
function selectAllPhone(){
    return database()->query("SELECT * FROM products WHERE categoryId = 2 ORDER BY productId DESC");
}

// Update Phone Cart-------------------------------------------------------------------------------------------------
function updatePhone($phone_value){
    $name = $phone_value['name'];
    $year = $phone_value['year'];
    $price = $phone_value['price'];
    $profile = $phone_value['profile'];
    $phoneId = $phone_value['phone_id'];
    $category = 2;

    return database()->query("UPDATE products SET productName='$name',year='$year',price='$price',profile='$profile',categoryId=$category WHERE productId = $phoneId");
}   


// CAMERA FUNCTIONS =========================================================================================================================================

// Select All Cameras function----------------------------------------------------------
function selectAllCam(){
    return database()->query("SELECT * FROM products WHERE categoryId = 3 ORDER BY productId DESC");
}

// Update Camera function----------------------------------------------------------------
function updateCam($cam_value){
    $name = $cam_value['name'];
    $year = $cam_value['year'];
    $price = $cam_value['price'];
    $profile = $cam_value['profile'];
    $cameraId = $cam_value['cam_id'];
    $category = 3;

    return database()->query("UPDATE products SET productName='$name',year='$year',price='$price',profile='$profile',categoryId=$category WHERE productId = $cameraId");
}



// // INFORMATION FUNCTIONS USER REGISTER AND LOGIN=============================================================================================

// Register......
function user_register($users){
    
    $user_not_found = true;
    $username = $users['username'];
    $email = $users['email'];
    $password_1 = $users['password_1'];
    $roleId = 2;
    $password = password_hash( $password_1,PASSWORD_DEFAULT);
    // select data from table users make sure the user already exist
    $query_in_table = database()->query("SELECT * FROM users");
    
    foreach($query_in_table as $user_exit){
        if($user_exit['username'] === $username && $user_exit['email'] === $email){
            $user_not_found = false;
        }
    }

    if($user_not_found){
        return database()->query("INSERT INTO users(username,email,password,roleId) 
        VALUES('$username','$email','$password',$roleId)");
    }else{
        return $user_not_found;
    }
}

// User login.....
function login_set($user_value){

    $username = $user_value['username'];
    $password = $user_value['password'];
    $checkFound = false;

    $userSet = database()->query("SELECT * FROM users");
    
    foreach($userSet as $user){
        $hash = $user['password'];
        $username_log = $user['username'];
        $verify = password_verify($password,$hash && $username_log === $username);
        if($verify) {
            $checkFound = true;
        } 
    }

    return $checkFound;
}
