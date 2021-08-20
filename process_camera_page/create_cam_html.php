<?php require_once('../partial/header.php'); ?>

    <div class='d-flex justify-content-between' style="background-color: #d5d6eb; height:100vh">
        <div class='w-50' style="background: linear-gradient(107deg,#085728 0%, #082a57 80%); height:100%;" >
            <div class='d-flex p-3'>
                <img src="../assets/images/logo.png" alt="" style="width:55px; height:65px;">
                <strong class=' mt-3' style="color:#decd14;" >*MAC <br> SHOP*</strong>
            </div>
            <div class='container pl-4 text-center'>
                <h2 class='text-light pb-3'>Create post Of Products</h2>
                <img src="../assets/images/group1pc.png" alt="" style="width:280px; height:150px;" >
                <img src="../assets/images/group2pc.png" alt="" style="width:450px; height:250px;" >
            </div>
            
        </div>

        <div class="container p-5 w-50">
            <a href="../index.php?page=camera" class='btn btn-danger float-right'> Cancel</a>
            <img src="../assets/images/logo_lerg.png" alt="" style="width:170px; height:190px;  margin-left: 180px;">

            <form action="create_cam_model.php" method="post" class="p-2">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Profile" name="profile">
                </div>
                <div class="form-group d-flex">
                    <input type="text" class="form-control " placeholder="Name" name="name">
                    <!-- <input type="text" class="form-control " placeholder="Category" name="category"> -->
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Year" name="year">
                </div>
                <div class="form-group">
                    <input type="number"  min="0.000" max="10000.000" step="0.01" class="form-control" placeholder="Price" name="price">
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

    </div>
    
<?php require_once('../partial/footer.php'); ?>