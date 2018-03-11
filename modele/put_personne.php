<?php
include  "../config.php";
include  $bdd;

function put_personne($mail,$mdp){

    $mail=htmlspecialchars($mail);
    $mdp=htmlspecialchars($mdp);

/*
$token="KEY:";
for($i=0;$i<25;$i++){
    $token=$token.rand(0,9);
}
$token=$token."END";
*/
$token=bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
$query = "INSERT INTO personne(mail,xp,mdp,token) VALUES('".$mail."',0,'".$mdp."','".$token."')";
$result = pg_query($query);

return $token;
}
?>
