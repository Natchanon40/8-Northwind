<body>
<form action="s6costomers.php">
<input name="customerid" value="Number">
<input name="companyname" value="Name">
<input name="contactname" value="Name">
<input type="submit" value="s4costomers.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['customerid'])) { exit; }
require("s1costomers.php");
$sql="update $tb set ";
$sql.="customerid='". $_GET['customerid'] ."', ";
$sql.="companyname='". $_GET['companyname'] ."', ";
$sql.="contactname='". $_GET['contactname'] ."' ";
$sql.="where customerid='". $_GET['customerid'] ."' ";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0costomers.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0costomers.php'/>";
	mysql_close($connect);
}
?>
</body>