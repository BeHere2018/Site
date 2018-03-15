<?php
include 'config.php';
if(isset($_COOKIE['id'])){
    include $controleur.'connexion.php';
}else{
    include $vue.'index.php';
}


?>

