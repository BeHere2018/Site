<?php
$bdd = pg_connect("host=localhost dbname=biere user=postgres port=5432 password=mdpBeHere")
or die("Can't connect to database".pg_last_error());

$secret="6Lcd-ksUAAAAABtZgHcerOvuqe2waHg8LtJIMon_";
//$conn_string = "host=localhost port=5432 dbname=biere user=postgres password=01081995";
//$dbconn4 = pg_connect($conn_string);
?>