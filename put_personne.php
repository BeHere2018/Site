<?php
/*
function put_personne($mail){
	$mail=htmlspecialchars($mail);
	include'connexion_sql.php';
	$req = $bdd->prepare('INSERT INTO personne(Mail,Pseudo) VALUES(:mail, :Pseudo)');
$req->execute(array(
    'mail' => "test",
    'Pseudo'=>"coucou"
    ));
}
*/
//put_personne();
function put_personne($mail,$Pseudo=""){
    
$mail=htmlspecialchars($mail);
include'connexion_postgre.php';
	
$query = "INSERT INTO personne(mail,pseudo,xp) VALUES('".$mail."', '".$Pseudo."',0)";
//$query = "INSERT INTO personne(mail,pseudo) VALUES(mail, pseudo)";
$result = pg_query($query);

return $result;
}
?>
