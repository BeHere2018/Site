<?php

if( isset($_COOKIE['id']) && isset($_POST['idbiere']) && isset($_POST['Note']) )
{
    include '../modele/put_rate.php';
        include '../modele/get_personne.php';
        $idP=get_personne_byToken($_COOKIE['id'])[0];  

        include_once '../modele/update_Xp.php';
        update_Xp($idP);
        put_rate($idP[0],$_POST['idbiere'],$_POST['Arome'],$_POST['Gout'],$_POST['Apparence'],$_POST['Note']);
        include 'Connexion.php';
}
else{
    include 'Index.php';
}
?>