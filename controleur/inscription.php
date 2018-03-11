<?php
if(isset($_COOKIE['id'])){
    include 'connexion.php';
}else{
    if(isset($_POST['mail']) && isset($_POST['mdp'])){
        $_POST['mail']=htmlspecialchars($_POST['mail']);
        $_POST['mdp']=htmlspecialchars($_POST['mdp']);
        $mdp = hash("sha512",$_POST['mdp']);

        if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            // on regarde si c'est une adresse mail valide 
            $erreur="Votre adresse mail n'est pas valide, merci d'en indiquée une autre";
            include '../vue/Index.php';
        }else{
            if(strlen($_POST['mdp'])<8){
                $erreur="taille du mot de passe inférieur à 8 charactères";
                include '../vue/index.php';
            }else{
                include '../modele/put_personne.php';
                $token=put_personne($_POST['mail'],$mdp);
                setcookie('id',$token, time() + (86400 * 2000), "/");
                include 'connexion.php';
            }
        }
    }else{
        include '../vue/inscription.php';
    }
}


?>

