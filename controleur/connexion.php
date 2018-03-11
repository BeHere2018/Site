<?php
if(!isset($_COOKIE['id'])){
    // personne n'ayant pas de token sur sa session
    if (isset($_POST['mail']) && isset($_POST['mdp'])  ){
        // on regarde si les posts existent bien 
        $_POST['mail']=htmlspecialchars($_POST['mail']);
        $_POST['mdp']=htmlspecialchars($_POST['mdp']);
        $mdp = hash("sha512",$_POST['mdp']);
        include '../modele/compareMDP.php';
        $token=compareMDP_getToken($_POST['mail'],$mdp);
        if($token!="false"){
            // on renvoie le token d'authentification connexion terminée
            setcookie('id',$token[0], time() + (86400 * 2000), "/");
            include '../vue/connexion.php';
        }else{
            // mauvais mdp ou id
            $erreur="Mot de passe ou identifiant incorrecte";
            include 'index.php';
        }
    }else{
        include '../vue/Index.php';
    }
}else{
    include '../vue/connexion.php';
}

?>