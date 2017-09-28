<body>
<form action="s6products.php">
<input name="productid" value="Number">
<input name="productname" value="Name">
<input name="supplierid" value="Number">
<input type="submit" value="s4products.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['productid'])) { exit; }
require("s1products.php");
$sql="update $tb set ";
$sql.="productid='". $_GET['productid'] ."', ";
$sql.="productname='". $_GET['productname'] ."', ";
$sql.="supplierid='". $_GET['supplierid'] ."' ";
$sql.="where productid='". $_GET['productid'] ."' ";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0products.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0products.php'/>";
	mysql_close($connect);
}
?>
</body>