<?php 
    require_once('../database/database.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $isCreatePhone = createProduct($_POST);

        if($isCreatePhone){
            header('Location: ../index.php?page=phone');
        }
    }