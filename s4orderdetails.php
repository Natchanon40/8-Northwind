<body>
<form action="s4orderdetails.php">
<input name="orderid" value="Number">
<input name="productid" value="Number">
<input name="unitprice" value="Name">
<input type="submit" value="s4orderdetails.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['orderid']) || !isset($_GET['productid']) || !isset($_GET['unitprice'])) exit;
require("s1orderdetails.php");
$sql="insert into $tb values('".$_GET['orderid']."','".$_GET['productid']."' , '".$_GET['unitprice']."')";
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