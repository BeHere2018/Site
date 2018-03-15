<?php 
include 'config.php';
setcookie('id',"", time() - 100, "/");
//include $controleur."index.php";
header("Refresh:0; url=".$controleur."index.php");
?>