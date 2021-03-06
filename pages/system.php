
<?php 
    require_once('../partial/header.php');
    require_once("../database/database.php");

    $category = slectTableCategory();
    $product = selectTableProduct();
    $user = slectTableUser(); 
    $selected = '';
     
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST["table"])){
            $selected = $_POST['table'];
        }
    }

?>
<div class='p-5'>
    
    <a href="http://localhost/php_db_project/mac_shop_project/pages/login.php" class='btn btn-danger  text-white mr-2 float-right'>Logout=></a>
    <a href="../index.php?page=home" class='btn btn-primary  text-white mr-2 float-left'><=Back</a>
    <form method="POST" action="" class="form-group col-md-4 mt-2">
        <select name="table" onchange="this.form.submit()">
            <option value="#" disabled selected>--Select Table--</option>
            <option value="user">User</option>
            <option value="category">Category</option>
            <option value="product">Product</option>
        </select>
    </form>
        
        
    <div class='text-center' >
        <h2 class='text-primary'><strong>System Manager</strong> </h2>
    </div>
    <?php if($selected === 'product'): ?>
        <table class="table table-bordered" style=''>
            <thead class='text-center'>
                <tr>
                    <th scope="col">product Id</th>
                    <th scope="col">product name</th>
                    <th scope="col">year</th>
                    <th scope="col">price</th>
                    <th scope="col">profile</th>
                    <th scope="col">category Id</th>
                    <th scope="col">options</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($product as $product_row): ?>
                <tr>
                   
                    <td><?= $product_row['productId'] ?></td>
                    <td><?= $product_row['productName'] ?></td>
                    <td><?= $product_row['year'] ?></td>
                    <td><?= $product_row['price'] ?></td>
                    <td><?= $product_row['profile'] ?></td>
                    <td><?= $product_row['categoryId'] ?></td>
                    <td>
                    <div class='d-flex float-right'>
                        <a href="../process_system/edit_product.php?product_id=<?=$product_row['productId']?>" class='btn btn-success mr-2'>Edit</a>
                        <a href="../process_system/delete_product.php?product_id=<?=$product_row['productId']?>" class='btn btn-danger'>Remove</a>
                    </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php elseif($selected === 'user'): ?>
        <div class='float-right p-4'>
            <a href="" class='btn btn-primary mr-2'>Add Product</a>
        </div>
        <table class="table table-bordered">
            <thead class='text-center'>
                <tr>
                <th scope="col">user Id</th>
                <th scope="col">username</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">roleId</th>
               
                </tr>
            </thead>
            <tbody>
            <?php foreach($user as $user_row): ?>
                <tr>
                    <td><?= $user_row['userId'] ?></td>
                    <td><?= $user_row['username'] ?></td>
                    <td><?= $user_row['email'] ?></td>
                    <td><?= $user_row['password'] ?></td>
                    <td><?= $user_row['roleId'] ?></td>
                   
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <table class="table table-bordered">
            <thead class='text-center'>
                <tr>
                <th scope="col">category Id</th>
                <th scope="col">category Name</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($category as $cate_row): ?>
                <tr>
                    <td><?= $cate_row['categoryId'] ?></td>
                    <td><?= $cate_row['categoryName'] ?></td>
                </tr>
                
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
