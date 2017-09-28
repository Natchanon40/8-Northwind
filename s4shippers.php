<body>
<form action="s4shippers.php">
<input name="shipperid" value="Number">
<input name="companyname" value="Name">
<input name="phone" value="Number">
<input type="submit" value="s4shippers.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['shipperid']) || !isset($_GET['companyname']) || !isset($_GET['phone'])) exit;
require("s1shippers.php");
$sql="insert into $tb values('".$_GET['shipperid']."','".$_GET['companyname']."' , '".$_GET['phone']."')";
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