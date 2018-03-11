<?php
include '../config.php';

include  $bdd;

function put_rate($idP,$idB,$arome,$gout,$apparence,$note){
	$idP=intval($idP);
	$idP=htmlspecialchars($idP);
	$idB=intval($idB)
	$idB=htmlspecialchars($idB);
	$arome=htmlspecialchars($arome);
    $gout=htmlspecialchars($gout);
	$apparence=htmlspecialchars($apparence);
	$note=htmlspecialchars($note);
	
	
	$query = "INSERT INTO personne_biere(index_personne,index_biere,arome,gout,apparence,note) 
	VALUES('".$idP."','".$idB."','".$arome."','".$gout."','".$apparence."','".$note."')";
	$result = pg_query($query);

	return $result;
}
?>