<?php
$connection=@mysql_connect("localhost","root","") or die("unable to connect");
$db=@mysql_select_db("hms") or die(mysql_error());
$sql="INSERT INTO users(user,pass) VALUES
	  ('$_POST[user]', '$_POST[pass]') ";
$result=mysql_query($sql,$connection);
if($result)
{
	echo "Registered Successfully;
	
    <a href='HMS(project).html'>Home</a>";	
	}
else
 {
	echo "Cannot Add Record";
}

?>