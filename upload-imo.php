<?php
header('Content-Type: text/html; charset=utf-8');

#Informações para salvar arquivo
$uploaddir = '/';
#$myFile = $_FILES['my_file'];
#$fileCount = count($myFile["name"]);

#Informações para salvar dados
$transacao = isset($_POST['trans'][0]) ? $_POST['trans'][0]: NULL;
$tp_imovel = isset($_POST['t_imo']) ? $_POST['t_imo'] : NULL; 
$sb_tp_imovel = isset($_POST['sbt_imo']) ? $_POST['sbt_imo'] : NULL;
$categoria = isset($_POST['cat']) ? $_POST['cat'] : NULL;
$cep = isset($_POST['cep']) ? $_POST['cep'] : NULL;
$estado = isset($_POST['estado']) ? $_POST['estado'] : NULL;
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : NULL;
$bairro = isset($_POST['bairro']) ? utf8_encode($_POST['bairro']) : NULL;
$endereco = isset($_POST['endereco']) ? utf8_encode($_POST['endereco']) : NULL;
$numero = isset($_POST['numero']) ? $_POST['numero'] : NULL;
$complemento = isset($_POST['complemento']) ? $_POST['complemento'] : NULL;
$descricao = isset($_POST['desc_localizacao']) ? $_POST['desc_localizacao'] :NULL;
$a_util = isset($_POST['area_util']) ? $_POST['area_util']  :NULL;
$a_total = isset($_POST['area_total']) ? $_POST['area_total']  :NULL;
$v_t_venda = isset($_POST['valor_total_venda']) ? $_POST['valor_total_venda']  :NULL;
$v_entrada = isset($_POST['valor_entrada']) ? $_POST['valor_entrada']  :NULL;
$mensais = isset($_POST['mensais']) ? $_POST['mensais']  :NULL;
$cond_com = isset($_POST['cond'][0]) ? $_POST['cond'][0]  :NULL;
$d_cond = isset($_POST['demais_cond']) ? $_POST['demais_cond']  :NULL;
$V_aluguel = isset($_POST['aluguel']) ? $_POST['aluguel']  :NULL;
$diaria = isset($_POST['diaria']) ? $_POST['diaria']  :NULL;
$isento = isset($_POST['optradio']) ? $_POST['optradio']  :NULL;
$v_cond = isset($_POST['valor_cond']) ? $_POST['valor_cond']  :NULL;
$v_iptu = isset($_POST['iptu']) ? $_POST['iptu']  :NULL;
$nm_empr = isset($_POST['nome']) ? $_POST['nome']  :NULL;
$capacidade = isset($_POST['capacidade']) ? $_POST['capacidade']  :NULL;
$andares  = isset($_POST['andares']) ? $_POST['andares']  :NULL;
$un_andar = isset($_POST['unidades']) ? $_POST['unidades']  :NULL;
$elevadores = isset($_POST['elevadores']) ? $_POST['elevadores']  :NULL;
$banheiros = isset($_POST['banheiros']) ? $_POST['banheiros']  :NULL;
$salas = isset($_POST['salas']) ? $_POST['salas']  :NULL;
$quartos = isset($_POST['quartos']) ? $_POST['quartos']  :NULL;
$suites = isset($_POST['suites']) ? $_POST['suites']  :NULL;
$garagens = isset($_POST['vagas']) ? $_POST['vagas']  :NULL;
$ano_contrucao = isset($_POST['ano']) ? $_POST['ano']  :NULL;
$texto = isset($_POST['texto']) ? $_POST['texto']  :NULL;
$status = isset($_POST['status']) ? $_POST['status']  :NULL;
$zap = isset($_POST['zap']) ? $_POST['zap']  :NULL;
$qt_fotos = isset($_POST['qt_fotos']) ? $_POST['qt_fotos']  :NULL;
$dir = $uploaddir.$endereco.$complemento;
$AndarInteiro = isset($_POST['AndarInteiro']) ? $_POST['AndarInteiro']  :NULL;
$ArCondicionado = isset($_POST['ArCondicionado']) ? $_POST['ArCondicionado']  :NULL;
$ArmarioCozinha = isset($_POST['ArmarioCozinha']) ? $_POST['ArmarioCozinha']  :NULL;
$ArmarioEmbutido = isset($_POST['ArmarioEmbutido']) ? $_POST['ArmarioEmbutido']  :NULL;
$Closet = isset($_POST['Closet']) ? $_POST['Closet']  :NULL;
$DepositoPrivadonoSubsolo = isset($_POST['DepositoPrivadonoSubsolo']) ? $_POST['DepositoPrivadonoSubsolo']  :NULL;
$Despensa = isset($_POST['Despensa']) ? $_POST['Despensa']  :NULL;
$Escritorio = isset($_POST['Escritorio']) ? $_POST['Escritorio']  :NULL;
$EstudaPermuta = isset($_POST['EstudaPermuta']) ? $_POST['EstudaPermuta']  :NULL;
$Lareira = isset($_POST['Lareira']) ? $_POST['Lareira']  :NULL;
$Lavabo = isset($_POST['Lavabo']) ? $_POST['Lavabo']  :NULL;
$MeioAndar = isset($_POST['MeioAndar']) ? $_POST['MeioAndar']  :NULL;
$Mobiliado = isset($_POST['Mobiliado']) ? $_POST['Mobiliado']  :NULL;
$QuartoWCEmpregada = isset($_POST['QuartoWCEmpregada']) ? $_POST['QuartoWCEmpregada']  :NULL;
$SalaAlmoco = isset($_POST['SalaAlmoco']) ? $_POST['SalaAlmoco']  :NULL;
$SalaJantar = isset($_POST['SalaJantar']) ? $_POST['SalaJantar']  :NULL;
$Varanda = isset($_POST['Varanda']) ? $_POST['Varanda']  :NULL;
$WCEmpregada = isset($_POST['WCEmpregada']) ? $_POST['WCEmpregada']  :NULL;
$PisoElevado = isset($_POST['PisoElevado']) ? $_POST['PisoElevado']  :NULL;
$CampodeFutebol = isset($_POST['CampodeFutebol']) ? $_POST['CampodeFutebol']  :NULL;
$ChildrenCare = isset($_POST['ChildrenCare']) ? $_POST['ChildrenCare']  :NULL;
$Churrasqueira = isset($_POST['Churrasqueira']) ? $_POST['Churrasqueira']  :NULL;
$Copa = isset($_POST['Copa']) ? $_POST['Copa']  :NULL;
$EntradadeCaminhoes = isset($_POST['EntradadeCaminhoes']) ? $_POST['EntradadeCaminhoes']  :NULL;
$Esquina = isset($_POST['Esquina']) ? $_POST['Esquina']  :NULL;
$EstacionamentoVisitante = isset($_POST['EstacionamentoVisitante']) ? $_POST['EstacionamentoVisitante']  :NULL;
$Frenteparaomar = isset($_POST['Frenteparaomar']) ? $_POST['Frenteparaomar']  :NULL;
$Hidromassagem = isset($_POST['Hidromassagem']) ? $_POST['Hidromassagem']  :NULL;
$Piscina = isset($_POST['Piscina']) ? $_POST['Piscina']  :NULL;
$Playground = isset($_POST['Playground']) ? $_POST['Playground']  :NULL;
$QuadradeSquash = isset($_POST['QuadradeSquash']) ? $_POST['QuadradeSquash']  :NULL;
$QuadradeTenis = isset($_POST['QuadradeTenis']) ? $_POST['QuadradeTenis']  :NULL;
$QuadraPoliesportiva = isset($_POST['QuadraPoliesportiva']) ?  $_POST['QuadraPoliesportiva'] :NULL;
$SaladeGinastica = isset($_POST['SaladeGinastica']) ? $_POST['SaladeGinastica']  :NULL;
$SalaoFestas = isset($_POST['SalaoFestas']) ? $_POST['SalaoFestas']  :NULL;
$SalaoJogos  = isset($_POST['SalaoJogos']) ? $_POST['SalaoJogos']  :NULL;
$Sauna = isset($_POST['Sauna']) ? $_POST['Sauna']  :NULL;
$Vestiario = isset($_POST['Vestiario']) ? $_POST['Vestiario']  :NULL;


#Iniciando conexão com o banco de dados
include "db-conection.php";
#Salvando no banco de dados
$dadossalvos = False;
$result = mysqli_query($conexao,"INSERT INTO imoveis 
(transacao,
tp_imovel,
sb_tp_imovel,
categoria,
cep,
estado,
cidade,
bairro,
endereco,
numero,
complemento,
descricao,
a_util,
a_total,
v_t_venda,
v_entrada,
mensais,
cond_com,
d_cond,
V_aluguel,
diaria,
isento,
v_cond,
v_iptu,
nm_empr,
capacidade,
andares,
un_andar,
elevadores,
banheiros,
salas,
quartos,
suites,
garagens,
ano_contrucao,
texto,
status,
click,
dir,
qt_fotos,
zap,
AndarInteiro,
ArCondicionado,
ArmarioCozinha,
ArmarioEmbutido,
Closet,
DepositoPrivadonoSubsolo,
Despensa,
Escritorio,
EstudaPermuta,
Lareira,
Lavabo,
MeioAndar,
Mobiliado,
QuartoWCEmpregada,
SalaAlmoco,
SalaJantar,
Varanda,
WCEmpregada,
PisoElevado,
CampodeFutebol,
ChildrenCare,
Churrasqueira,
Copa,
EntradadeCaminhoes,
Esquina,
EstacionamentoVisitante,
Frenteparaomar,
Hidromassagem,
Piscina,
Playground,
QuadradeSquash,
QuadradeTenis,
QuadraPoliesportiva,
SaladeGinastica,
SalaoFestas,
SalaoJogos,
Sauna,
Vestiario) 
VALUES 
('$transacao',
'$tp_imovel',
'$sb_tp_imovel',
'$categoria',
'$cep',
'$estado',
'$cidade',
'$bairro',
'$endereco',
'$numero',
'$complemento',
'$descricao',
'$a_util',
'$a_total',
'$v_t_venda',
'$v_entrada',
'$mensais',
'$cond_com',
'$d_cond',
'$V_aluguel',
'$diaria',
'$isento',
'$v_cond',
'$v_iptu',
'$nm_empr',
'$capacidade',
'$andares',
'$un_andar',
'$elevadores',
'$banheiros',
'$salas',
'$quartos',
'$suites',
'$garagens',
'$ano_contrucao',
'$texto',
'$status',
0,
'$dir',
'$qt_fotos',
'$zap',
'$AndarInteiro',
'$ArCondicionado',
'$ArmarioCozinha',
'$ArmarioEmbutido',
'$Closet',
'$DepositoPrivadonoSubsolo',
'$Despensa',
'$Escritorio',
'$EstudaPermuta',
'$Lareira',
'$Lavabo',
'$MeioAndar',
'$Mobiliado',
'$QuartoWCEmpregada',
'$SalaAlmoco',
'$SalaJantar',
'$Varanda',
'$WCEmpregada',
'$PisoElevado',
'$CampodeFutebol',
'$ChildrenCare',
'$Churrasqueira',
'$Copa',
'$EntradadeCaminhoes',
'$Esquina',
'$EstacionamentoVisitante',
'$Frenteparaomar',
'$Hidromassagem',
'$Piscina',
'$Playground',
'$QuadradeSquash',
'$QuadradeTenis',
'$QuadraPoliesportiva',
'$SaladeGinastica',
'$SalaoFestas',
'$SalaoJogos',
'$Sauna',
'$Vestiario');") or die(mysql_error());
print_r($result);
$row_cnt = mysqli_affected_rows($conexao);
if($row_cnt>0){
$dadossalvos = True;	
}
#salvado no diretório

$createddir = mkdir($endereco.$complemento,777);
#$upload  = false;
#for ($i = 0; $i < $fileCount; $i++) {
#		$filename = $myFile["tmp_name"][$i];
#		$upload  = move_uploaded_file($filename,'/'.$nm_empr);
#		print_r($upload);
#}		

if($dadossalvos){
header('Location: index.php');	
}


?>