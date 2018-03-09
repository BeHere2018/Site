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
    $query = "SELECT * FROM biere";
    $result = pg_query($query);
    return pg_fetch_row($result);
}
function get_x_biere($nb){
    include'connexion_postgre.php';
    $query = "SELECT * FROM biere";
    $result = pg_query($query);
    $elem=array();
    for($i = 1; $i <= $nb; $i++){
        $temp=array();
        //$elem=array_push(array(pg_fetch_row($result)));
        $temp=array(pg_fetch_row($result)[0],pg_fetch_row($result)[1],pg_fetch_row($result)[2]);
        array_push($elem,$temp);

    }
    return $elem;
}
$test=get_x_biere(3);
foreach( $test as $i){
    foreach($i as $t){
        echo $t;
    }
}

?>