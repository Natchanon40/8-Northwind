<body>
<form action="s6categorys.php">
<input name="categoryid" value="Number">
<input name="categoryname" value="Name">
<input name="description" value="Name">
<input type="submit" value="s4categorys.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['categoryid'])) { exit; }
require("s1categorys.php");
$sql="update $tb set ";
$sql.="categoryid='". $_GET['categoryid'] ."', ";
$sql.="categoryname='". $_GET['categoryname'] ."', ";
$sql.="description='". $_GET['description'] ."' ";
$sql.="where categoryid='". $_GET['categoryid'] ."' ";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0categorys.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0categorys.php'/>";
	mysql_close($connect);
}
?>
</body>