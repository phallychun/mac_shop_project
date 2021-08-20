<?php 


    require_once('../database/database.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $isUpdate_Cam = updateCam($_POST);

        if($isUpdate_Cam){
            header('Location: ../index.php?page=camera');
        }
    }