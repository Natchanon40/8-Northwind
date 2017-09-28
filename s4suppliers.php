<body>
<form action="s4suppliers.php">
<input name="supplierid" value="Number">
<input name="companyname" value="Name">
<input name="contactname" value="Name">
<input type="submit" value="s4suppliers.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['supplierid']) || !isset($_GET['companyname']) || !isset($_GET['contactname'])) exit;
require("s1suppliers.php");
$sql="insert into $tb values('".$_GET['supplierid']."','".$_GET['companyname']."' , '".$_GET['contactname']."')";
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