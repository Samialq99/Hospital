<?php
error_reporting(0);
session_start();


$hn='localhost'; //hostname
$db='shrouze_hospital'; //database
$un='shrouze_hospital';
$pw='test1234';


if ((!$_POST[user]) || (!$_POST[pass]))
{
header("Location:HMS(project).html");
exit;
}

//SESSION_start();

$connection=@mysql_connect($hn, $un, $pw, $db) or die("unable to connect");
$db=@mysql_select_db("shrouze_hospital") or die(mysql_error());
$sql="select * from users where user_name='$_POST[user]' && user_pass='$_POST[pass]'";

$result=@mysql_query($sql) or die(mysql_error());
$row=mysql_fetch_array($result);
if(mysql_num_rows($result)!=0)
{
	header('Location: admin.html');



    exit();
}
else
{
	echo"<h2>Not authorized</h2>";
}
?>