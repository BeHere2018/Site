<?php
function put_biere($nom,$degree,$url){
    include'connexion_postgre.php';
	
$query = "INSERT INTO biere(nom,degree,url) VALUES('".$nom."', '".$degree."', '".$url."')";
$result = pg_query($query);

}

$lines = file('images_forDB.txt');
foreach ($lines as $line)
{
    $elem=explode(';',$line);
    put_biere($elem[0],$elem[1],$elem[2]);
}

?>