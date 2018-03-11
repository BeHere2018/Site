<?php 
include  "../config.php";

include  $bdd;
function test(){
pg_dump($bdd,'biere.sql');
}
test();

?>