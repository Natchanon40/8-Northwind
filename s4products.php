<body>
<form action="s4products.php">
<input name="productid" value="Number">
<input name="productname" value="Name">
<input name="supplierid" value="Number">
<input type="submit" value="s4products.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['productid']) || !isset($_GET['productname']) || !isset($_GET['supplierid'])) exit;
require("s1products.php");
$sql="insert into $tb values('".$_GET['productid']."','".$_GET['productname']."' , '".$_GET['supplierid']."')";
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