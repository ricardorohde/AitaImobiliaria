<?php
	require_once("db_conection.php");
	$sql = "SELECT * FROM `".$_SG['tabela']."` WHERE ".$cS." `usuario` = '".$nusuario."' AND ".$cS." `senha` = '".$nsenha."' LIMIT 1";
	$query = mysql_query($sql);
	$resultado = mysql_fetch_assoc($query);
?>