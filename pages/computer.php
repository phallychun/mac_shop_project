

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
    <h2>Please check for your favorite. Which Mac is right for you?</h2>
    <a href="./process_pc_page/create_pc_html.php" class="btn btn-primary" <?=$divStyle ?>>Add Cart+</a>
    <a href="http://localhost/php_db_project/mac_shop_project/pages/admin_user.php" class="btn btn-success" <?=$divStyle ?>>System=></a>
</div>
<div class='container d-flex justify-content-around pt-5 flex-wrap'>
    <?php 
        // select all computers
        $computers = selectAllPC();
        foreach($computers as $pc):
    ?>
    <div class="card mb-3 border border-primary" style="max-width: 18rem;">

        <!-- Add style to manage user admin -->
        <div class="card-header" <?=$divStyle ?>>
            <a  href="./process_pc_page/edit_pc_html.php?pc_id=<?=$pc['productId']?>" class="rounded btn btn-primary"><small>Edit</small></a>
            <a  href="./process_pc_page/delete_pc.php?pc_id=<?=$pc['productId']?>" class="rounded btn btn-danger "><small>Remove</small></a>
        </div>
        <div class="card-body text-center">
            <div class='pb-5'>
                <img class="card-img-top" src="assets/post_images/<?= $pc['profile'] ?>" alt="Card image cap">
            </div>
            <h5 class="card-title text-primary"><?=$pc['productName']?></h5>
            <p class="card-text text-primary">Version: <?=$pc['year']?></p>
            <p class="card-text text-danger">Price: <strong>$<?=$pc['price']?></strong> </p>
            <button class="btn btn-primary">Buy Now </button>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php require_once('./partial/footer.php'); ?>
