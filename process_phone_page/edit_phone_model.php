<?php 


    require_once('../database/database.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $isUpdate_phone = updatePhone($_POST);

        if($isUpdate_phone){
            header('Location: ../index.php?page=phone');
        }
    }