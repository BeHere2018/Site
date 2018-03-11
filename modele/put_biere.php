<?php
include  "../config.php";

include  $bdd;
function put_biere($nom,$degree,$url){
	
$query = "INSERT INTO biere(nom,degree,url) VALUES('".$nom."', '".$degree."', '".$url."')";
$result = pg_query($query);

}

$lines = file('../images_forDB.txt');
foreach ($lines as $line)
{
    $elem=explode(';',$line);
    put_biere($elem[0],$elem[1],$elem[2]);
}

?>