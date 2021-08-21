

<?php 
    require_once('./partial/header.php');
    require_once('./partial/navbar.php'); 
    require_once('./database/database.php');

    //check to set style if admin show if not hide
    $divStyle=''; 
    $adminFound = admin_user();
    // add condition
    if($adminFound){
        $divStyle='style="display:block;"';
    }else{ 
        $divStyle='style="display:none;"';
    }

?>
<div class='container d-flex justify-content-between  pt-5 mt-5 float-right'>
    <h2>Please check for your favorite.Which one is right for you?</h2>
    <a href="./process_phone_page/create_phone_html.php" class="btn btn-primary" <?=$divStyle ?>>Add Cart+</a>
    <a href="http://localhost/php_db_project/mac_shop_project/pages/admin_user.php" class="btn btn-success" <?=$divStyle ?>>System=></a>
</div>
<div class='container d-flex justify-content-around pt-5 flex-wrap'>
    <?php 
        
        // select all computers
        $phones = selectAllPhone();
        foreach($phones as $phone):
    ?>
    <div class="card mb-3 border border-primary" style="max-width: 18rem;">
        <!-- Set style to manage user admin -->
        <div class="card-header"  <?=$divStyle ?>>
            <a href="./process_phone_page/edit_phone_html.php?phone_id=<?=$phone['productId']?>" class="rounded btn btn-primary"><small>Edit</small></a>
            <a href="./process_phone_page/delete_phone.php?phone_id=<?=$phone['productId']?>" class="rounded btn btn-danger "><small>Remove</small></a>
        </div>
        <div class="card-body text-center">
            <div class='pb-5'>
                <img class="card-img-top" src="<?=$phone['profile']?>" alt="Card image cap">
            </div>
            <h5 class="card-title text-primary"><?=$phone['productName']?></h5> 
            <p class="card-text text-primary">Version: <?=$phone['year']?></p>
            <p class="card-text text-danger">Price: $<?=$phone['price']?></p>
            <button class="btn btn-primary">Buy Now </button>
        </div>
    </div>

    <?php endforeach; ?>
</div>
<?php require_once('./partial/footer.php'); ?>