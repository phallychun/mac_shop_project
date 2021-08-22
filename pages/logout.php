
<?php 

    session_start();
    session_destroy();

    header('Location: http://localhost/php_db_project/mac_shop_project/pages/login.php');
        
    