<?php

    require_once('../database/database.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $isCreatePC = createProduct($_POST);

        if($isCreatePC){
            header('Location: ../index.php?page=computer');
        }
    }