<?php
	header('Content-Type: text/html; charset=utf-8');
	include "db-conection.php";
	$dadosimoveisdeletados = False;
	$dadoscaracteristicasdeletados = False;
	$imagensimoveisdeletados = False;
 
	$idimovel = $_GET['idimo'];

	$queryimoveldelete = "DELETE FROM imoveis WHERE id = $idimovel";
	$querycaracteristicasdelete = "DELETE FROM caracteristicas_imovel WHERE imo = $idimovel";
	$queryimagensdelete = "DELETE FROM imagens_imo WHERE imo = $idimovel";

	$result_imoveis = mysqli_query($conexao,$queryimoveldelete) or die(mysql_error());
	$result_caracteristicas_imoveis = mysqli_query($conexao,$querycaracteristicasdelete) or die(mysql_error());
	$result_imagens_imoveis = mysqli_query($conexao,$queryimagensdelete) or die(mysql_error());

	if($result_imoveis && $result_imagens_imoveis && $result_caracteristicas_imoveis){
		header('Location: admin.php');
	}
?>