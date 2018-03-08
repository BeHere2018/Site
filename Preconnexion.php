<?php
if (isset($_POST['mail'])){
    $_POST['mail']=htmlspecialchars($_POST['mail']);
    if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $erreur="Votre adresse mail n'est pas valide, merci d'en indiquée une autre";
        include'Index.php';
    }else{
        include'Connexion.php';
    }

}else{
include'Index.php';
}

?>