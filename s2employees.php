<?php
/* updated for php7 and php 5 on 2560-09-13 */
/* Section 1 : include */
if(file_exists("s1employees.php")) 
  require("s1employees.php"); 
else
  die("File not found");

/* Section 2 : main activity */
if ($dbstatus == 0) dbWork("create database $db");
qWork("create table $tb (employeeid int(4),firstname varchar(40),lastname varchar (40))");
qWork("insert into $tb values(4001,'jah','pig')");
qWork("insert into $tb values(4002,'nut','crazy')");
qWork("insert into $tb values(4003,'sun','view')");
if((int)phpversion() >= 7) $connect->close(); else mysql_close($connect);
echo '<a href="s0employees.php">back</a>';

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