<?php 
//include  "../config.php";
include  $bdd;
function get_biere($mail)
{
    $mail=htmlspecialchars($mail);

    $query = "SELECT * FROM biere";
    $result = pg_query($query);
    return pg_fetch_row($result);
}

function get_x_biere($nb){
    $nb=intval($nb);
    $req="SELECT MAX(id) FROM biere";
    $max=pg_fetch_row(pg_query($req))[0];
    $elem=array();
    for($i = 1; $i <= $nb; $i++){
        $temp=array();
        $randID=rand(1,$max);
        $query = "SELECT * FROM biere WHERE id = '".$randID."'";
        $result = pg_query($query);
        $tampon = pg_fetch_row($result);
        $temp=array($tampon[0],$tampon[1],$tampon[2]);
        array_push($elem,$temp);
    }
    return $elem;
}


?>