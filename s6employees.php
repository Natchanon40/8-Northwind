<body>
<form action="s6employees.php">
<input name="employeeid" value="Number">
<input name="firstname" value="Name">
<input name="lastname" value="Name">
<input type="submit" value="s4employees.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['employeeid'])) { exit; }
require("s1employees.php");
$sql="update $tb set ";
$sql.="employeeid='". $_GET['employeeid'] ."', ";
$sql.="firstname='". $_GET['firstname'] ."', ";
$sql.="lastname='". $_GET['lastname'] ."' ";
$sql.="where employeeid='". $_GET['employeeid'] ."' ";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0employees.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0employees.php'/>";
	mysql_close($connect);
}
?>
</body>