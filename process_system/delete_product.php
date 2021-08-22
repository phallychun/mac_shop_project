<?php 

    require_once('../database/database.php');

    $product_id = $_GET['product_id'];
    $isDeleted_Product = deleteProduct($product_id);

    if($isDeleted_Product){
        header('Location: http://localhost/php_db_project/mac_shop_project/pages/system.php');
    }