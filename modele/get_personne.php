<?php /*
function get_personne($mail)
{
    //include'connexion_sql.php';
    include'connexion_postgre.php';

    $reponse = $bdd->prepare('SELECT Id,Xp FROM personne WHERE Mail= :index');
    $reponse -> execute(array(
		'index' => $mail
		));
	$bieres = $reponse->fetch();
	return $bieres;
}
*/

function get_personne($mail)
{
    include'connexion_postgre.php';
$query = "SELECT id,xp FROM personne WHERE mail= '".$mail."'";
$result = pg_query($query);
return pg_fetch_row($result);
}
?>