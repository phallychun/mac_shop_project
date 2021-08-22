

<?php 
  session_start();
  require_once('./database/database.php');
  $username = '';
  if(isset($_SESSION['user_login'])){
    $username = strtoupper($_SESSION['user_login']);
  }

?>
  <ul class="nav p-1 fixed-top d-flex justify-content-between" style='background: linear-gradient(107deg,#407555 0%, #012b52 80%); opacity: 0.8;'>
    <div class='d-flex '>
      <a href="http://localhost/php_db_project/mac_shop_project/pages/login.php" class='btn btn-danger ml-2'>Logout</a>
      <a href="index.php" class='btn btn-success mr-5 ml-3'>New+</a>
      <div class='mr-4 mt-2'>
      <strong class='text-warning'><?=$username?></strong>
      </div>
    </div>
    <div class='d-flex'>
      <li class="nav-item">
        <a class="nav-link" href="?page=home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=computer">Computer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=phone">Smart Phone</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=camera">Camera</a>
      </li>
    </div>
    
  </ul>

