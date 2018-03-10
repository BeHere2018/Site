<?php
if(!isset($_COOKIE['id'])){
    // personne n'ayant pas de token sur sa session
    if (isset($_POST['mail']) && isset($_POST['mdp'])  ){
        // on regarde si les posts existent bien 
        $_POST['mail']=htmlspecialchars($_POST['mail']);
        if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            // on regarde si c'est une adresse mail valide 
            $erreur="Votre adresse mail n'est pas valide, merci d'en indiquée une autre";
            include '../vue/Index.php';
            
        }else{

            $_POST['mdp']=htmlspecialchars($_POST['mdp']);
            if(strlen('mdp')<8){
                $erreur="taille du mot de passe inférieur à 8 charactères";
                include 'index.php';


            }
            $mdp = hash("SHA-512",$_POST['mdp']);
            include '../modele/get_personne.php';
            if(count(get_personne($_POST['mail']))==0){
                // on regarde si le mail est présent dans la base de données
                $erreur="mail inconnue merci de vous inscrire";
                include 'index.php';
            }else{
                include '../modele/compareMDP.php';
                $token=compareMDP_getToken($_POST['mail'],$mdp);
                if($token!="false")){
                    // on renvoie le token d'authentification connexion terminée
                    setcookie('id',$token);
                    include '../vue/connexion.php';

                }else{
                    // mauvais mdp ou id
                $erreur="Mot de passe ou identifiant incorrecte";
                include 'index.php';
                }
            }
        }

    }else{

        include '../vue/Index.php';
    }
}else{
    include '../vue/connexion.php';
}

?>