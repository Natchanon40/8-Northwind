<body>
<form action="s6suppliers.php">
<input name="supplierid" value="Number">
<input name="companyname" value="Name">
<input name="contactname" value="Name">
<input type="submit" value="s4suppliers.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['supplierid'])) { exit; }
require("s1suppliers.php");
$sql="update $tb set ";
$sql.="supplierid='". $_GET['supplierid'] ."', ";
$sql.="companyname='". $_GET['companyname'] ."', ";
$sql.="contactname='". $_GET['contactname'] ."' ";
$sql.="where supplierid='". $_GET['supplierid'] ."' ";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0suppliers.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0suppliers.php'/>";
	mysql_close($connect);
}
?>
</body>