<?php

require_once('../database/database.php');

$camera_id = $_GET['cam_id'];
$isDeleted_Cam = deleteProduct($camera_id);

if($isDeleted_Cam){
    header('Location: ../index.php?page=camera');
}