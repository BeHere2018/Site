<?php

if( isset($_POST['mail']) && isset($_POST['idbiere']) && isset($_POST['Note']) )
{
    include 'put_rate.php';
    if($_POST['mail']=="Anonymous"){
        put_rate(0,$_POST['idbiere'],$_POST['Arome'],$_POST['Gout'],$_POST['Apparence'],$_POST['Note']);
        include 'Anonyme.php';
    }else{
        include 'get_personne.php';
        $idP=get_personne($_POST['mail'])[0];
        if($idP==""){
            include 'put_personne.php';
            put_personne($_POST['mail']);
        }
        $P=get_personne($_POST['mail']);    
        include_once 'update_Xp.php';
        update_Xp($_POST['mail']);
        put_rate($P[0],$_POST['idbiere'],$_POST['Arome'],$_POST['Gout'],$_POST['Apparence'],$_POST['Note']);
        include 'Connexion.php';
    }
}
else{
    include 'Index.php';
}
?>