
<?php 
    require_once("../database/database.php"); 
    require_once('../partial/header.php'); 

    $product_post = $_GET['product_id'];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $isUpdate_Cam = updateProduct($_POST);

        if($isUpdate_Cam){
            header('Location: http://localhost/php_db_project/mac_shop_project/pages/system.php');
        }
    }

    $products = selectOneProduct($product_post);
    foreach($products as $product):
?>
<div class='bg-warning'>
    <h2 class='text-center pt-5 text-primary'>Edit the Prodcut</h2>
    <form action="#" method="POST" class="p-5 container w-50" enctype="multipart/form-data">
        <input type="hidden"  name='pro_id' value="<?=$product['productId']?>">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Profile" name="profile" value="./assets/post_images/<?= $product['profile'] ?>">
        </div>
        <div class="form-group d-flex">
            <input type="text" class="form-control" placeholder="Name" name="name" value="<?=$product['productName']?>">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Year" name="year" value="<?=$product['year']?>">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Price" name="price" value="<?=$product['price']?>">
        </div>
        <div class="form-group text-primary">
            <label for="age1" class='pr-3'><strong>Category: </strong></label>
            <input type="radio"  name="category" value="1"> <strong class="pr-3">Computer</strong> 
            <input type="radio"  name="category" value="2"> <strong class="pr-3">Smart_Phone</strong> 
            <input type="radio"  name="category" value="3"> <strong class="pr-3">Camera</strong> 
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Add Cart</button>
        </div>
    </form>
</div>
<?php endforeach; ?>