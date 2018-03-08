<?php
/*
function put_rate($idP,$idB,$arome,$gout,$palais,$apparence){
	$idP=htmlspecialchars($idP);
	$idB=htmlspecialchars($idB);
	$arome=htmlspecialchars($arome);
    $gout=htmlspecialchars($gout);
    $palais=htmlspecialchars($palais);
    $apparence=htmlspecialchars($apparence);
	
	include'connexion_sql.php';
	$req = $bdd->prepare('INSERT INTO personne_biere(Index_personne,Index_Biere,Arome,Gout,Palais,Apparence) 
		VALUES(:Index_personne,:Index_Biere,:Arome,:Gout,:Palais,:Apparence)');
$req->execute(array(
	'Index_personne' => $idP,
	'Index_Biere' => $idB,
	'Arome' => $arome,
	'Gout' => $gout,
	'Palais'=>$palais,
	'Apparence'=>$apparence
	));
}
*/
function put_rate($idP,$idB,$arome,$gout,$palais,$apparence,$note){
	$idP=htmlspecialchars($idP);
	$idB=htmlspecialchars($idB);
	$arome=htmlspecialchars($arome);
    $gout=htmlspecialchars($gout);
    $palais=htmlspecialchars($palais);
	$apparence=htmlspecialchars($apparence);
	$note=htmlspecialchars($note);
	
	include'connexion_postgre.php';
	
	$query = "INSERT INTO personne_biere(index_personne,index_biere,arome,gout,palais,apparence,note) 
	VALUES('".$idP."','".$idB."','".$arome."','".$gout."','".$palais."','".$apparence."','".$note."')";
	$result = pg_query($query);

	return $result;
}
?>