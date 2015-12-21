<?php
	$username = "root";
	$password = "";
	$hostname = "localhost"; 
	$db = "web_data";

	//connection to the database
	$conexao = mysqli_connect($hostname, $username, $password,$db) or die("Unable to connect to MySQL");
	if (mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
	}
?>