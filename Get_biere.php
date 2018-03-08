<?php /*
function get_biere($mail)
{
    include'connexion_sql.php';
    
    $reponse = $bdd->query('SELECT MAX(Id) as max FROM biere');
    $max = $reponse->fetch();
    $Index=rand(1,$max['max']);
    

	if($mail=='Anonymous')
	{
    $reponse = $bdd->prepare('SELECT * FROM biere WHERE Id= :index');
    $reponse -> execute(array(
		'index' => $Index
		));
	$bieres = $reponse->fetch();
	return $bieres;
	}
	else
	{
    $reponse = $bdd->prepare('SELECT * FROM biere WHERE Id= :index');
    $reponse -> execute(array(
        'index' => $Index
        ));
    $bieres = $reponse->fetch();
	return $bieres;
	}
}*/


function get_biere($mail)
{

    include'connexion_postgre.php';
	
   // $query = "SELECT MAX(id) as max FROM biere";
   // $max = pg_query($query);
   // $Index=rand(1,pg_fetch_result($max,0,0));
    
    /*
	if($mail=='Anonymous')
	{
    $query = "SELECT * FROM biere WHERE Id= '".$Index."'";
    $result = pg_query($query);
    return pg_fetch_row($result);
    
	}
	else
	{
    $query = "SELECT * FROM biere WHERE Id= '".$Index."'";
    $result = pg_query($query);
    return pg_fetch_row($result);
    }
    */

    if($mail=='Anonymous')
	{
    $query = "SELECT * FROM biere";
    $result = pg_query($query);
    return pg_fetch_row($result);
    
	}
	else
	{
    $query = "SELECT * FROM biere";
    $result = pg_query($query);
    return pg_fetch_row($result);
	}
}
?>