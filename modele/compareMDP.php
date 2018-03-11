<?php 

include  "../config.php";
include  $bdd;

function compareMDP_getToken($mail,$mdp)
{
    $mail = mysql_real_escape_string($mail);
    $mail=htmlspecialchars($mail);
    $mdp = mysql_real_escape_string($mdp);
    $mdp=htmlspecialchars($mdp);
    
    $query = "SELECT token FROM personne WHERE mail='".$mail."' AND mdp='".$mdp."'";
    $result = pg_query($query);
    if (pg_num_rows($result)==0){
        return "false";
    }
    else {
        return pg_fetch_row($result);
    }
}


?>