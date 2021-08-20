
<?php

require_once('../database/database.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $isCreateCam = createProduct($_POST);

    if($isCreateCam){
        header('Location: ../index.php?page=camera');
    }
}