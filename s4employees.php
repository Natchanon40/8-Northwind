<body>
<form action="s4employees.php">
<input name="employeeid" value="Number">
<input name="firstname" value="Name">
<input name="lastname" value="Name">
<input type="submit" value="s4employees.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['employeeid']) || !isset($_GET['firstname']) || !isset($_GET['lastname'])) exit;
require("s1employees.php");
$sql="insert into $tb values('".$_GET['employeeid']."','".$_GET['firstname']."' , '".$_GET['lastname']."')";
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