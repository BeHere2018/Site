<?php
include '../config.php';
if(isset($_COOKIE['id'])){
    include $controleur.'connexion.php';
}else{
    if(isset($_POST['mail']) && isset($_POST['mdp']) && isset($_POST['confirm_pass'])){
        sleep(1);
        if(!isset($_POST['g-recaptcha-response'])){
            $erreur="Captcha non rempli";
            include $vue.'inscription.php';
        }else{
            $url="https://www.google.com/recaptcha/api/siteverify";
            $response=$_POST["g-recaptcha-response"];

            $data = array('secret' => $secret, 'response' => $response); 

            // use key 'http' even if you send the request to https://...
            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data)
                )
            );
            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);

            $json=json_decode($result);
            if(!$json->{"success"}){
                $erreur="Captcha non valide";
                include $vue.'inscription.php';
            }
            else{
                $_POST['mail']=htmlspecialchars($_POST['mail']);
                $_POST['mdp']=htmlspecialchars($_POST['mdp']);
                $_POST['confirm_pass']=htmlspecialchars($_POST['confirm_pass']);
                if(!$_POST['mdp']==$_POST['confirm_pass']){
                    $erreur="Confirmation différente du mot de passe";
                    include $vue.'inscription.php';
                }else{
                    $mdp = hash("sha512",$_POST['mdp']);

                    if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                        // on regarde si c'est une adresse mail valide 
                        $erreur="Votre adresse mail n'est pas valide, merci d'en indiquée une autre";
                        include $vue.'inscription.php';
                    }else{
                        if(strlen($_POST['mdp'])<8){
                            $erreur="Taille du mot de passe inférieur à 8 charactères";
                            include $vue.'inscription.php';
                        }else{
                            include $modele.'get_personne.php';
                            if(!get_personne_bool($_POST['mail'])){
                                $erreur="Cette adresse mail est déjà utilisée";
                                include $vue.'inscription.php';
                            }else{
                                include $modele.'put_personne.php';
                                $token=put_personne($_POST['mail'],$mdp);
                                setcookie('id',$token, time() + (86400 * 2000), "/");
                                include $controleur.'connexion.php';
                            }
                        }
                    }
                }
            }
        }
    }else{
        include $vue.'inscription.php';
    }
}


?>

