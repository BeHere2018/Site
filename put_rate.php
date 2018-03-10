<?php
function put_rate($idP,$idB,$arome,$gout,$apparence,$note){
	$idP=htmlspecialchars($idP);
	$idB=htmlspecialchars($idB);
	$arome=htmlspecialchars($arome);
    $gout=htmlspecialchars($gout);
	$apparence=htmlspecialchars($apparence);
	$note=htmlspecialchars($note);
	
	include'connexion_postgre.php';
	
	$query = "INSERT INTO personne_biere(index_personne,index_biere,arome,gout,apparence,note) 
	VALUES('".$idP."','".$idB."','".$arome."','".$gout."','".$apparence."','".$note."')";
	$result = pg_query($query);

	return $result;
}
?>