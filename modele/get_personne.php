<?php 
include  "../config.php";
include  $bdd;
function get_personne($mail)
{
    $mail = mysql_real_escape_string($mail);
    $mail=htmlspecialchars($mail);

$query = "SELECT id,xp FROM personne WHERE mail= '".$mail."'";
$result = pg_query($query);
return pg_fetch_row($result);
}

function get_personne_byToken($token)
{
    $mail = mysql_real_escape_string($token);
    $mail=htmlspecialchars($token);
$query = "SELECT id,xp FROM personne WHERE token= '".$token."'";
$result = pg_query($query);
return pg_fetch_row($result);
}
?>