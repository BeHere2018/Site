<?php
function delete_biere()
{

    include'connexion_postgre.php';
    $query = "DELETE FROM biere";
    $result = pg_query($query);
}
function delete_personne()
{

    include'connexion_postgre.php';
    $query = "DELETE FROM personne";
    $result = pg_query($query);
}
function delete_personne_biere()
{

    include'connexion_postgre.php';
    $query = "DELETE FROM personne_biere";
    $result = pg_query($query);
}
delete_biere();
?>