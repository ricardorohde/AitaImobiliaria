<?php 
	#LOGIN LOCAL SERVER
	$username = "root";
	$password = "root";
	
	#LOGIN PRODUCTION SERVER
	#$username = "master";
	#$password = "master";
	$hostname = "localhost"; 
	$db = "web_data";

	//connection to the database
	$conexao = mysqli_connect($hostname, $username, $password,$db) or die(mysql_error());
	mysqli_set_charset($conexao,"utf8");
	if (mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
	}
?>
