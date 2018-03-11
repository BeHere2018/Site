<?php
include '../config.php'; 
include  $bdd;
function delete_biere()
{

    
    $query = "DELETE FROM biere";
    $result = pg_query($query);
}
function delete_personne()
{

    $query = "DELETE FROM personne";
    $result = pg_query($query);
}
function delete_personne_biere()
{
    $query = "DELETE FROM personne_biere";
    $result = pg_query($query);
}
delete_biere();
?>