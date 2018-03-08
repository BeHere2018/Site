<?php

include'connexion_postgre.php';

function get_xp($mail){
    $query = "SELECT xp FROM personne WHERE mail= '".$mail."'";
    $result = pg_query($query);
    return pg_fetch_row($result);
}



function update_Xp($mail){
    $xp=get_xp($mail)[0];
    $xp=$xp+20;
    $query = "UPDATE personne SET xp='".$xp."' WHERE mail= '".$mail."'";
    $result = pg_query($query);
    $lvl=floor($xp/100);
    $left=$xp-$lvl*100;
    $tab=[$lvl,$left];
    return($tab);
}

?>