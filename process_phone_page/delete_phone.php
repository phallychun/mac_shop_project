<?php

    require_once('../database/database.php');

    $phone_id = $_GET['phone_id'];
    $isDeleted_phone = deleteProduct($phone_id);

    if($isDeleted_phone){
        header('Location: ../index.php?page=phone');
    }