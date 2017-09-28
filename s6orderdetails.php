<body>
<form action="s6orderdetails.php">
<input name="orderid" value="Number">
<input name="productid" value="Number">
<input name="unitprice" value="Name">
<input type="submit" value="s4orderdetails.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['orderid'])) { exit; }
require("s1orderdetails.php");
$sql="update $tb set ";
$sql.="orderid='". $_GET['orderid'] ."', ";
$sql.="productid='". $_GET['productid'] ."', ";
$sql.="unitprice='". $_GET['unitprice'] ."' ";
$sql.="where orderid='". $_GET['orderid'] ."' ";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0orderdetails.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0orderdetails.php'/>";
	mysql_close($connect);
}
?>
</body>