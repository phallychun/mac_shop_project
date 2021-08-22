

<?php


// CALL DATABASE FUNCTION===========================================================================================================
function database(){
    return new mysqli('localhost', 'root', '', 'computer_inventory');

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
    $category = $product_value['category'];

    // image------------------------------------------------------------------------------------------------
    $imageName = $_FILES['profile']['name'];
    $imagTmp = $_FILES['profile']['tmp_name'];
    $imageSize = $_FILES['profile']['size'];
    $error = $_FILES['profile']['error'];

   
    if($imageSize > 1250000){
        header('location: ../index.php?page=home');
        $_SESSION['message'] = "Big size";
        
    }else{
            $extension = pathinfo($imageName, PATHINFO_EXTENSION);
            $extensionLocal = strtolower($extension);

            $allowExtension = array('jpg', 'jpeg', 'png');
            if(in_array($extensionLocal, $allowExtension)) {
                $newImageName = uniqid('post-', true) . '.' . $extensionLocal;
                $folderImage = '../assets/post_images/'. $newImageName;
                move_uploaded_file($imagTmp, $folderImage);
    
                return database()->query("INSERT INTO products(productName,year,price,profile,categoryId) VALUES('$name','$year','$price','$newImageName', $category)");
            }else {
                header('location: ../index.php?page=home');
            }
    }
    
   
}

//  SELECT PRODUCT =============================================================================================================

function selectOneProduct($product_id){
    return database()->query("SELECT * FROM products WHERE productId = $product_id");
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

function user_register($users){
   
    $user_not_found = true;
    $username = strtolower($users['username']);
    $email = $users['email'];
    $password = password_hash($users['password_1'], PASSWORD_DEFAULT);
    $roleId = 2;

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
   
    $new_username = strtolower($user_value['username']);
    $new_password = $user_value['password'];

    // put the username into login_username to manag user
    session_start();
    $_SESSION["user_login"] = $new_username;

    //variable to checked
    $checkFound = false;
    $userSet = database()->query("SELECT * FROM users");
    
    foreach($userSet as $user){

        $username_log = $user['username'];
        $verified = (password_verify($new_password, $user['password']) && $username_log === $new_username);
        if($verified){
            $checkFound = true;
        } 
    }

    return $checkFound;
}


// INFORMATION SYSTEM ADMINISTRATION USER======================================================================================

function system_manager(){

}

function selectTableProduct(){
    return database()->query("SELECT * FROM products ORDER BY productId DESC");
}

function slectTableCategory(){
    return database()->query("SELECT * FROM categories ORDER BY categoryId DESC");
}

function slectTableUser(){
    return database()->query("SELECT * FROM users ORDER BY userId DESC");
}

// UPDATE PRODUCTS IN SYSTEM------------------------------
function updateProduct($product_value){
    $name = $product_value['name'];
    $year = $product_value['year'];
    $price = $product_value['price'];
    $profile = $product_value['profile'];
    $productId =$product_value['pro_id'];
    $category = $product_value['category'];

    return database()->query("UPDATE products SET productName='$name',year='$year',price='$price',profile='$profile',categoryId=$category WHERE productId = $productId");
}  




