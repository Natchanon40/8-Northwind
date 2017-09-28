<body>
<form action="s6shippers.php">
<input name="shipperid" value="Number">
<input name="companyname" value="Name">
<input name="phone" value="Number">
<input type="submit" value="s4shippers.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['shipperid'])) { exit; }
require("s1shippers.php");
$sql="update $tb set ";
$sql.="shipperid='". $_GET['shipperid'] ."', ";
$sql.="companyname='". $_GET['companyname'] ."', ";
$sql.="phone='". $_GET['phone'] ."' ";
$sql.="where shipperid='". $_GET['shipperid'] ."' ";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0shippers.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0shippers.php'/>";
	mysql_close($connect);
}
?>
</body>