<?php
/* updated for php7 and php 5 on 2560-09-13 */
/* Section 1 : include */
if(file_exists("s1shippers.php")) 
  require("s1shippers.php"); 
else
  die("File not found");

/* Section 2 : main activity */
if ($dbstatus == 0) dbWork("create database $db");
qWork("create table $tb (shipperid int(4),companyname varchar(40),phone int (40))");
qWork("insert into $tb values(6001,'Rama','0988584823')");
qWork("insert into $tb values(6002,'Sayam','0815236378')");
qWork("insert into $tb values(6003,'Weed','0942528946')");
if((int)phpversion() >= 7) $connect->close(); else mysql_close($connect);
echo '<a href="s0shippers.php">back</a>';

/* Section 3 : function */
function dbWork($sql) {
	global $db,$host,$uname,$upass,$connect;	
	if((int)phpversion() >= 7) {
		if ($connect->query($sql) === FALSE) 
			echo "$sql : failed ". $conn->error . "<br/>";
		else {
			echo "$sql : succeeded<br/>";
			$connect = new mysqli($host, $uname, $upass, $db);
		}
	} else { 
		if (!$result=mysql_query($sql,$connect))
			echo "$sql : failed<br/>"; 
		else 
			echo "$sql : succeeded<br/>";  
	}
}	
function qWork($sql) {
	global $connect,$db;
	if((int)phpversion() >= 7) {
		if ($connect->query($sql) === FALSE) 
			echo "$sql : failed ". $conn->error . "<br/>";
		else 
			echo "$sql : succeeded<br/>";
	} else {   
		if (!$result=mysql_db_query($db,$sql))
			echo "$sql : failed<br/>"; 
		else 
			echo "$sql : succeeded<br/>";  
	}
}	
?>