<?php




$hn='localhost'; //hostname
$db='shrouze_hospital'; //database
$un='shrouze_hospital';
$pw='test1234';

$connection=@mysql_connect($hn, $un, $pw, $db) or die("unable to connect");
$db=@mysql_select_db("shrouze_hospital") or die(mysql_error());




$sql=@mysql_select_db("shrouze_hospital") or die(mysql_error());

$new="insert into Patient(SSN,Name,Phone,PCP) values ('$_POST[SSN]','$_POST[Name]','$_POST[Phone]','$_POST[PCP]')";

$result=mysql_query($new) or die(mysql_error());
if ($result)
{
echo "<h1> YOUR DATA IS INSERTED INTO Patients TABLE</h1><br></br>";
}
else
{
	echo "<h1>YOUR DATA IS NOT INSERTED</h1>";
	}
?>


<!DOCTYPE html>
<html>
<body>
<h1>Click <a href="http://shrouze.myweb.cs.uwindsor.ca/60334/project/html/displaypatient.php?">Here</a>
to see Patients table</h1>

<h1>Click <a href="http://shrouze.myweb.cs.uwindsor.ca/60334/project/html/admin.html">Here</a>
to go back</h1>

</body>
</html>