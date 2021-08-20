<?php

    require_once('../database/database.php');
    
    $computer_id = $_GET['pc_id'];
    $isDeleted_pc = deleteProduct($computer_id);

    if($isDeleted_pc){
        header('Location: ../index.php?page=computer');
    }
