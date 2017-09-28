<?php
/* updated for php7 and php 5 on 2560-09-13 */
$myForm = '<body>
<form action="s5employees.php">
<input name="delid" value="1001">
<input type="submit" value="s5employees.php">
</form>';
if (!isset($_GET['delid'])) { 
  echo $myForm;
  exit;
}
require("s1employees.php");
$sql="delete from $tb ";
$sql.="where employeeid ='".$_GET['delid']."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		header("location: s0employees.php");	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		header("location: s0employees.php");
	mysql_close($connect);
}
?>
</body>