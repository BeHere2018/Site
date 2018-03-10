<?php 

function get_personne($mail)
{
    include'connexion_postgre.php';
$query = "SELECT id,xp FROM personne WHERE mail= '".$mail."'";
$result = pg_query($query);
return pg_fetch_row($result);
}
?>