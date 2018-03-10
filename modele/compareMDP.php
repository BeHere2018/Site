<?php 

function compareMDP_getToken($mail,$mdp)
{
    include'connexion_postgre.php';
    $query = "SELECT token FROM personne WHERE mail='".$mail."',mdp='".$mdp."'";
    $result = pg_query($query);
    $token=pg_fetch_row($result);
    if (count($token)==0){
        return "false";
    }
    else {
        return $token;
    }
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