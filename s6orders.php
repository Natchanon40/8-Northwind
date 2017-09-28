<body>
<form action="s6orders.php">
<input name="orderid" value="Number">
<input name="customerid" value="Number">
<input name="employeeid" value="Number">
<input name="orderdate" value="Name">
<input type="submit" value="s4orders.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['orderid'])) { exit; }
require("s1orders.php");
$sql="update $tb set ";
$sql.="orderid='". $_GET['orderid'] ."', ";
$sql.="customerid='". $_GET['customerid'] ."', ";
$sql.="employeeid='". $_GET['employeeid'] ."' ";
$sql.="orderdate='". $_GET['orderdate'] ."' ";
$sql.="where orderid='". $_GET['orderid'] ."' ";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0orders.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0orders.php'/>";
	mysql_close($connect);
}
?>
</body>