<?php
//include '../config.php';
include  $bdd;

function get_xp($id){

    $id=intval($id);
    $id=htmlspecialchars($id);
    
    $query = "SELECT xp FROM personne WHERE id= '".$id."'";
    $result = pg_query($query);
    return pg_fetch_row($result);
}
function get_xp_fromToken($token){

    $token=htmlspecialchars($token);
    
    $query = "SELECT xp FROM personne WHERE token= '".$token."'";
    $result = pg_query($query);
    return pg_fetch_row($result);
}



function update_Xp($id){

    $id = intval($id);
    $id=htmlspecialchars($id);
    $xp=get_xp($id)[0];
    $xp=$xp+20;
    $query = "UPDATE personne SET xp='".$xp."' WHERE id= '".$id."'";
    $result = pg_query($query);
    $lvl=floor($xp/100);
    $left=$xp-$lvl*100;
    $tab=[$lvl,$left];
    return($tab);
}

?>