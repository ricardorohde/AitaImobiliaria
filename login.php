<?php

session_start(); // Inicia a session

include "db-conection.php";
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
$result = mysqli_query($conexao,"SELECT * FROM usuarios WHERE user='$usuario' AND password='$senha'") or die(mysql_error());
$row_cnt = mysqli_num_rows($result);
if ($row_cnt > 0){
	mysqli_query($conexao,"UPDATE usuarios SET reg_date = now() WHERE user ='$usuario'");
	header('Location: admin.php');
}

?>