<?php 
	
	$host='localhost';
	$username='root';
	$pass='';
	$db='ecomarket';

	$conn=mysqli_connect($host,$username,$pass,$db);

	if(!$conn) die("Connection refused").mysql_connect_error();
 ?>