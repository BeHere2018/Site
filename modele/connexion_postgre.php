<?php
$bdd = pg_connect("host=localhost dbname=biere user=postgres port=5433 password=mdpBeHere")
or die("Can't connect to database".pg_last_error());
//$conn_string = "host=localhost port=5432 dbname=biere user=postgres password=01081995";
//$dbconn4 = pg_connect($conn_string);
?>