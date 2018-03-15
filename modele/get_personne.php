<?php 
include  "../config.php";
include  $bdd;
function get_personne($mail)
{
    $mail=htmlspecialchars($mail);

$query = "SELECT id,xp FROM personne WHERE mail= '".$mail."'";
$result = pg_query($query);
return pg_fetch_row($result);
}

function get_personne_byToken($token)
{
    $token=htmlspecialchars($token);
$query = "SELECT id,xp FROM personne WHERE token= '".$token."'";
$result = pg_query($query);
return pg_fetch_row($result);
}
function get_personne_bool($mail){
    $mail=htmlspecialchars($mail);
    $query = "SELECT id,xp FROM personne WHERE mail= '".$mail."'";
    $result = pg_query($query);
    if(pg_num_rows($result)>0){
        return false;
    }else{
        return true;
    }

}

?>