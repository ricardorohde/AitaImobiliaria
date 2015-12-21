<?php
#Informações para salvar arquivo
$uploaddir = '/';
$myFile = $_FILES['my_file'];
$fileCount = count($myFile["name"]);

#Informações para salvar dados
$transacao = $_POST['trans'][0];
$tp_imovel = $_POST['t_imo'];
$sb_tp_imovel = $_POST['sbt_imo'];
$categoria = $_POST['cat'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$descricao = $_POST['desc_localizacao'];
$a_util = $_POST['area_util'];
$a_total = $_POST['area_total'];
$v_t_venda = $_POST['valor_total_venda'];
$v_entrada = $_POST['valor_entrada'];
$mensais = $_POST['mensais'];
$cond_com = $_POST['cond'][0];
$d_cond = $_POST['demais_cond'];
$V_aluguel = $_POST['aluguel'];
$diaria = $_POST['diaria'];
$isento = $_POST['optradio'];
$v_cond = $_POST['valor_cond'];
$v_iptu = $_POST['iptu'];
$nm_empr = $_POST['nome'];
$capacidade = $_POST['capacidade'];
$andares  = $_POST['andares'];
$un_andar = $_POST['unidades'];
$elevadores = $_POST['elevadores'];
$banheiros = $_POST['banheiros'];
$salas = $_POST['salas'];
$quartos = $_POST['quartos'];
$suites = $_POST['suites'];
$garagens = $_POST['vagas'];
$ano_contrucao = $_POST['ano'];
$texto = $_POST['texto'];
$status = $_POST['status'];
$dir = $uploaddir.$nm_empr;

#Iniciando conexão com o banco de dados
include "db-conection.php";
#Salvando no banco de dados
$dadossalvos = False;
$result = mysqli_query($conexao,"INSERT INTO imoveis (transacao,tp_imovel,sb_tp_imovel,categoria,cep,estado,cidade,bairro,endereco,numero,complemento,descricao,a_util,a_total,v_t_venda,v_entrada,mensais,cond_com,d_cond,V_aluguel,diaria,isento,v_cond,v_iptu,nm_empr,capacidade,andares,un_andar,elevadores,banheiros,salas,quartos,suites,garagens,ano_contrucao,texto,status,dir) VALUES ('$transacao','$tp_imovel','$sb_tp_imovel','$categoria','$cep','$estado','$cidade','$bairro','$endereco','$numero','$complemento','$descricao','$a_util','$a_total','$v_t_venda','$v_entrada','$mensais','$cond_com','$d_cond','$V_aluguel','$diaria','$isento','$v_cond','$v_iptu','$nm_empr','$capacidade','$andares','$un_andar','$elevadores','$banheiros','$salas','$quartos','$suites','$garagens','$ano_contrucao','$texto','$status','$dir');") or die(mysql_error());
$row_cnt = mysqli_affected_rows($conexao);
if($row_cnt>0){
$dadossalvos = True;	
}
#salvado no diretório

$createddir = mkdir($nm_empr,777);
$upload  = false;
for ($i = 0; $i < $fileCount; $i++) {
		$filename = $myFile["tmp_name"][$i];
		$upload  = move_uploaded_file($filename,'/'.$nm_empr);
		print_r($upload);
}		

if($dadossalvos and $upload){
header('Location: index.html');	
}


?>