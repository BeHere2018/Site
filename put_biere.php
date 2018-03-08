<?php
function put_biere($nom,$degree,$description){
    include'connexion_postgre.php';
	
$query = "INSERT INTO biere(nom,degree,description) VALUES('".$nom."', '".$degree."', '".$description."')";
$result = pg_query($query);

}
/*
put_biere("1664","4","");
put_biere("86","4","");
*/
?>