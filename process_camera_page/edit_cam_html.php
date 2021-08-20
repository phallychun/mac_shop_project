<?php require_once('../partial/header.php'); ?>
    <div class='d-flex justify-content-between' style="background-color: #d5d6eb; height:100vh">
        <div class='w-50' style="background-color: #484ba1; height:100%;" >
            <div class='d-flex p-3 mt-5'>
                <img src="../assets/images/logo.png" alt="" style="width:55px; height:65px;">
                <strong class=' mt-3' style="color:#decd14;" >*MAC <br> SHOP*</strong>
            </div>
            <div class='container pl-4 text-center'>
                <h2 class='text-light pb-3'>Create post Of Products</h2>
                <img src="../assets/images/group1pc.png" alt="" style="width:280px; height:150px;" >
                <img src="../assets/images/group2pc.png" alt="" style="width:450px; height:250px;" >
            </div>
            
        </div>

        <div class="container p-5 mt-3 w-50">
            <a href="../pages/phone.php" class='btn btn-danger float-right'> Cancel</a>
            <img src="../assets/images/logo_lerg.png" alt="" style="width:170px; height:190px;  margin-left: 180px;" >
            <?php 
                require_once('../database/database.php');

                $cam_id = $_GET['cam_id'];

                $cam_data = selectOneProduct($cam_id);
                foreach($cam_data as $camera):
            ?>
            <form action="edit_cam_model.php" method="post" class="p-2">
                <input type="hidden"  name="cam_id" value="<?=$camera['productId']?>">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Profile" name="profile" value="<?=$camera['profile']?>">
                </div>
                <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Name" name="name" value="<?=$camera['productName']?>">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Year" name="year" value="<?=$camera['year']?>">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Price" name="price" value="<?=$camera['price']?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Add Cart</button>
                </div>
            </form>

            <?php endforeach; ?>
        </div>

    </div>
    
<?php require_once('../partial/footer.php'); ?>