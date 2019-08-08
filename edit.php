<?php
error_reporting(0);
$connection=@mysql_connect("localhost","root","");
$db=mysql_select_db("hms");
$sql= "select * from patient where pat_id='$_GET[id]'";
$result=@mysql_query($sql) or die (mysql_error());
$row=mysql_fetch_array($result);
$id=$row[''];
$name=$row['pat_name'];
$add=$row['pat_add'];
$tell=$row['pat_tell'];
//echo "$ id is : $id <br>name is : $name<br>marks is: $marks"; 
$form = "<center><form method='POST' action='update.php' name='myform'>
<input type='hidden' name='pat_id' value='$id'>
<h1>RECORD UpDATION</h1>
<table border=3 cellpadding=3>
<tr><th>ID </th><td><input type='int' name='pat_id' value='$id'></td></tr>
<tr><th>NAME </th><td><input type='text' name='pat_name' value='$name'></td></tr>
<tr><th>Address </th><td><input type='text' name='pat_add' value='$add'></td></tr>
<tr><th>Tell </th><td><input type='int' name='pat_tell' value='$tell'></td></tr>
<tr><td colspan=2><center><input type='submit' value='update record'></center></td></tr></center>
</form>";
 echo "$form";
?>