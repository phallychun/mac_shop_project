

<?php 
    require_once('./partial/header.php');
    require_once('./partial/navbar.php'); 
?>
<div class='container d-flex justify-content-between  pt-5 mt-5 '>
    <h2>Please check for your favorite. Which iphon is right for you?</h2>
    <a href="./process_phone_page/create_phone_html.php" class="btn btn-primary">Add Cart+</a>
</div>
<div class='container d-flex justify-content-around pt-5 flex-wrap'>
    <?php 
        require_once('./database/database.php');
        $phones = selectAllPhone();
        foreach($phones as $phone):
    ?>
    <div class="card mb-3 border border-primary" style="max-width: 18rem;">
        <div class="card-header">
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