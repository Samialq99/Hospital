<?php

$connention=@mysql_connect("localhost","root","") or die(mysql_error());


$sql=@mysql_select_db("hms") or die(mysql_error());

$new="delete from patient where pat_id='$_GET[id]'";

//echo "$sql";
//exit();


$result=mysql_query($new) or die(mysql_error());
if($result)
header("location:view.php");
else 
echo "error found";

?>