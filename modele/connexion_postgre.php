<?php
$base = pg_connect("host=localhost dbname=biere user=postgres port=5432 password=01081995")
or die("Can't connect to database".pg_last_error());
?>