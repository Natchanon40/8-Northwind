<body>
<form action="s4orders.php">
<input name="orderid" value="Number">
<input name="customerid" value="Number">
<input name="employeeid" value="Number">
<input name="orderdate" value="Name">
<input type="submit" value="s4orders.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['orderid']) || !isset($_GET['customerid']) || !isset($_GET['employeeid']) || !isset($_GET['orderdate'])) exit;
require("s1orders.php");
$sql="insert into $tb values('".$_GET['orderid']."','".$_GET['customerid']."' , '".$_GET['employeeid']."', '".$_GET['orderdate']."')";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	mysql_close($connect);
}
?>
</body>