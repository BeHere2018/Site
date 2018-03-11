<?php 

include  "../config.php";
include  $bdd;

function compareMDP_getToken($mail,$mdp)
{
    
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