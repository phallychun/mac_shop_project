<?php 
    require_once('./partial/header.php');
    require_once('./partial/navbar.php'); 
?>
<div class='container d-flex justify-content-between  pt-5 mt-5 '>
    <h2>Please check for your favorite. Which Web-Cam is right for you?</h2>
    <a href="./process_camera_page/create_cam_html.php" class="btn btn-primary">Add Cart+</a>
</div>
<div class='container d-flex justify-content-around pt-5 flex-wrap'>
    <?php 
        require_once('./database/database.php');
        $cameras = selectAllCam();
        foreach($cameras as $camera):
    ?>
    <div class="card mb-3 border border-primary" style="max-width: 18rem;">
        <div class="card-header">
            <a href="./process_camera_page/edit_cam_html.php?cam_id=<?=$camera['productId']?>" class="rounded btn btn-primary "><small>Edit</small></a>
            <a  href="./process_camera_page/delete_cam.php?cam_id=<?=$camera['productId']?>" class="rounded btn btn-danger "><small>Remove</small> </a>
        </div>
        <div class="card-body text-center">
            <div class='pb-5'>
                <img class="card-img-top" src="<?=$camera['profile']?>" alt="Card image cap">
            </div>
            <h5 class="card-title text-primary"><?=$camera['productName']?></h5>
            <p class="card-text text-primary">Year:  <strong><?=$camera['year']?></strong> </p>
            <p class="card-text text-danger">Price:  <strong>$<?=$camera['price']?></strong> </p>
            <button class="btn btn-primary">Buy Now </button>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php require_once('./partial/footer.php'); ?>