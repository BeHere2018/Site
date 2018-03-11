<?php

$bdd = pg_connect("host=localhost dbname=biere user=postgres port=5432 password=01081995")
or die("Can't connect to database".pg_last_error());

$query = "CREATE TABLE biere (
    id bigserial PRIMARY KEY NOT NULL,
    nom text,
    url text,
    degree numeric

)";
$result = pg_query($query);
$query = "CREATE TABLE personne (
    id bigserial PRIMARY KEY NOT NULL,
    mail text PRIMARY KEY,
    xp bigint,
    mdp text,
    token text

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
    
$lines = file('../images_forDB.txt');
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