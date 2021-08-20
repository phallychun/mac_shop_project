<?php 


    require_once('../database/database.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $isUpdate_Pc = updatePC($_POST);

        if($isUpdate_Pc){
            header('Location: ../index.php?page=computer');
        }
    }