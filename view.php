<?php
error_reporting(0);
//include "authenticate.php";
//echo "<h2><center>welcom <b> Mr. '$_POST[name]'</b></center></h2>;

//<a href='logout.php'> Logout</a>";
$connect = @mysql_connect ("localhost","root","") or die(mysql_error());

$select=@mysql_select_db("hms") or die(mysql_error());
$query="select * from patient";

$result=@mysql_query($query);

//if(isset($_SESSION['user1']))

//{
//	echo"<h2><center>$_GET[msg]</center></h2>";
//	if(isset($_SESSION['user1']))
	{
		

echo "<table cellpadding='15' cellspacing='10' border=4 bordercolor='#0000FF' align='center' bgcolor='#CCCCFF'>
		<tr> <th>ID </th> <th>NAME </th> <th> ADDRESS</th> <th>Tell</th><th>EDIT</th><th>DELETE</th></tr>";
while($row=mysql_fetch_array($result)) {
	$id = $row['pat_id'];
	$name= $row['pat_name'];
	$add= $row['pat_add'];
	$tell=$row['pat_tell'];
	echo"<tr><td>$id</td>
		<td> $name </td>
		<td> $add </td><td>$tell</td><td align='center'><a href='edit.php?id=$id'>edit
		</a></td><td align='center'><a href='del.php?id=$id'>delete</a></td></tr>";
	}


	}
echo "</table><br>
    <center><b><a href='HMS(project).html'>Home</a></center>";
?>