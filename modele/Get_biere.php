<?php 

function get_biere($mail)
{

    include'connexion_postgre.php';
    $query = "SELECT * FROM biere";
    $result = pg_query($query);
    return pg_fetch_row($result);
}

function get_x_biere($id,$nb){
    include'connexion_postgre.php';
    $query = "SELECT * FROM biere ORDER BY id";
    $result = pg_query($query);
    $elem=array();
    for($i = 1; $i <= $nb; $i++){
        $temp=array();
        $tampon = pg_fetch_row($result);
        $temp=array($tampon[0],$tampon[1],$tampon[2]);
        array_push($elem,$temp);
    }
    return $elem;
}


?>