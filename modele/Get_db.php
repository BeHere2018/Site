<?php 
function test(){
include'connexion_postgre.php';
pg_dump($bdd,'biere.sql');
}
test();

?>