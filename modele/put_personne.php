<?php
include  "../config.php";
include  $bdd;

function put_personne($mail,$mdp){


$token="KEY:";
for($i=0;$i<25;$i++){
    $token=$token.rand(0,9);
}
$token=$token."END";
$query = "INSERT INTO personne(mail,xp,mdp,token) VALUES('".$mail."',0,'".$mdp."','".$token."')";
//$query = "INSERT INTO personne(mail,pseudo) VALUES(mail, pseudo)";
$result = pg_query($query);

return $token;
}
?>
