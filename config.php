<?php 
	//localhost dengan database db_gd_fri.sql
	//$host = "localhost"; 
	//$user = "root";
	//$pass = "";
	//$db = "db_gd_fri";

	//for openshift
	$host = getenv("MYSQL_SERVICE_HOST");
	$port = getenv("MYSQL_SERVICE_PORT");
	$server = getenv("databaseserver");
	$user = getenv("databaseuser");
	$pass = getenv("databasepass");
	$db = getenv("databasename"); 

	$conn = mysqli_connect($host, $user, $pass, $db);
	
	if (mysqli_connect_errno()){
    	die("Disconnect. ".mysqli_connect_error());
  	} 
?>
