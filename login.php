<?php

$hn='localhost'; //hostname
$db='shrouze_hospital'; //database
$un='shrouze_hospital';
$pw='test1234';

$connection=@mysql_connect($hn, $un, $pw, $db) or die("unable to connect");
$db=@mysql_select_db("shrouze_hospital") or die(mysql_error());

$sql="select * from Physician";
$result=@mysql_query($sql) or die(mysql_error());


?>