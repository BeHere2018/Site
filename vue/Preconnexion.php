<?php
if(!isset($_COOKIE['id'])){
if (isset($_POST['mail']) && isset($_POST['mdp'])  ){
    $_POST['mail']=htmlspecialchars($_POST['mail']);
    $_POST['mdp']=htmlspecialchars($_POST['mdp']);
    $mdp = hash("SHA-512",$_POST['mdp']);
    if(!get_user($_POST['mail'],$mdp)){
        put_user_get_token($_POST['mail'],$mdp);
    }

    if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $erreur="Votre adresse mail n'est pas valide, merci d'en indiquée une autre";
        include'Index.php';
    }else{
        include'Connexion.php';
    }

}else{
include 'Index.php';
}
}else{
    include 'connexion.php';
}

?>