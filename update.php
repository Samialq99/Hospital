<?php
error_reporting(0);
$connection=mysql_connect("localhost","root","");
$db=@mysql_select_db("hms");
$sql="UPDATE patient set pat_name='$_POST[pat_name]', pat_add='$_POST[pat_add]',pat_tell='$_POST[pat_tell]' WHERE pat_id='$_POST[pat_id]'";
$result=@mysql_query($sql) or die(mysql_error());
if($result)
 {
	echo "Record Updated Successfully";
	header("Location: view.php ?msg=Rec update sucessfully");
	exit;
	}
else
 {
	echo "Cannot Update Record";
}
?>