<?php

$bdd = pg_connect("host=localhost dbname=test user=postgres port=5432 password=MDP")
or die("Can't connect to database".pg_last_error());

$query = "CREATE TABLE biere (
    id bigserial PRIMARY KEY NOT NULL,
    nom text,
    url text,
    degree numeric

)";
$result = pg_query($query);
$query = "CREATE TABLE personne (
    id bigint,
    mail text PRIMARY KEY,
    pseudo text,
    xp bigint,
    mdp text

)";
$result = pg_query($query);
$query = "CREATE TABLE personne_biere (
    index_personne bigint,
    index_biere bigint,
    arome smallint,
    gout smallint,
    apparence smallint,
    note smallint

    )";
    $result = pg_query($query);
    
$lines = file('images_forDB.txt');
foreach ($lines as $line)
{
    $elem=explode(';',$line);
    put_biere($elem[0],$elem[1],$elem[2]);
}
function put_biere($nom,$degree,$url){
$query = "INSERT INTO biere(nom,degree,url) VALUES('".$nom."', '".$degree."', '".$url."')";
$result = pg_query($query);

}
?>