<?php 
include '../config.php';
setcookie('id',"", time() - 100, "/");
include $vue."index.php";
?>