<?php 
header('Content-Type: text/html; charset=utf-8');
#CRIA VARIÁVEIS COM OS DADOS INFORMADOS NO FORMULÁRIO

$identificador = isset($_POST['idaux']) ? $_POST['idaux']: NULL;
$transacao = utf8_encode(isset($_POST['trans'][0]) ? $_POST['trans'][0]: NULL);
$size = count($_POST['trans']);
for($i = 0; $i<=$size;$i++){

	if($_POST['trans'][$i]=='Aluguel'){
		$transacao = utf8_encode(isset($_POST['trans'][$i]) ? $_POST['trans'][$i]: NULL);
		
	}elseif ($_POST['trans'][$i]=='Venda') {
		$transacao1 = utf8_encode(isset($_POST['trans'][$i]) ? $_POST['trans'][$i]: NULL);
		
	}elseif($_POST['trans'][$i]=='Aluguel Temporada'){
		$transacao2 = utf8_encode(isset($_POST['trans'][$i]) ? $_POST['trans'][$i]: NULL);

		
	}
}
$tp_imovel = isset($_POST['t_imo']) ? $_POST['t_imo'] : NULL; 
$sb_tp_imovel = isset($_POST['sbt_imo']) ? $_POST['sbt_imo'] : NULL;
$categoria = isset($_POST['cat']) ? $_POST['cat'] : NULL;
$cep = isset($_POST['cep']) ? $_POST['cep'] : NULL;
$estado = isset($_POST['estado']) ? $_POST['estado'] : NULL;
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : NULL;
$bairro = utf8_encode(isset($_POST['bairro']) ? ($_POST['bairro']) : NULL);
$endereco = utf8_encode(isset($_POST['endereco']) ? ($_POST['endereco']) : NULL);
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
$nm_empr = utf8_encode(isset($_POST['nome']) ? $_POST['nome']  :NULL);
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
$texto = utf8_encode(isset($_POST['texto']) ? $_POST['texto']  :NULL);
$status = isset($_POST['status']) ? $_POST['status']  :NULL;
$zap = isset($_POST['zap']) ? $_POST['zap']  :NULL;
$dir = $endereco.$numero.$complemento;
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
$SalaoFestas = isset($_POST['SalaodeFestas']) ? $_POST['SalaodeFestas']  :NULL;
$SalaoJogos  = isset($_POST['SalaodeJogos']) ? $_POST['SalaodeJogos']  :NULL;
$Sauna = isset($_POST['Sauna']) ? $_POST['Sauna']  :NULL;
$Vestiario = isset($_POST['Vestiario']) ? $_POST['Vestiario']  :NULL;
#INICIA CONEXÃO COM O BANCO DE DADOS
include "db-conection.php";
#EXECUTA QUERY PARA SALVAR DADOS NO BANCO DE DADOS
$dadossalvos = False;
$query_imoveis = "UPDATE imoveis SET 
							transacao='$transacao',
							transacao1='$transacao1',
							transacao2='$transacao2',
							tp_imovel='$tp_imovel',
							sb_tp_imovel='$sb_tp_imovel',
							categoria='$categoria',
							cep=$cep,
							estado='$estado',
							cidade='$cidade',
							bairro='$bairro',
							endereco='$endereco',
							numero=$numero,
							complemento=$complemento,
							descricao='$descricao',
							a_util=$a_util,
							a_total=$a_total,
							v_t_venda=$v_t_venda,
							v_entrada=$v_entrada,
							mensais=$mensais,
							cond_com='$cond_com',
							d_cond='$d_cond',
							V_aluguel=$V_aluguel,
							diaria=$diaria,
							isento='$isento',
							v_cond=$v_cond,
							v_iptu=$v_iptu,
							nm_empr='$nm_empr',
							capacidade=$capacidade,
							andares=$andares,
							un_andar=$un_andar,
							elevadores=$elevadores,
							banheiros=$banheiros,
							salas=$salas,
							quartos=$quartos,
							suites=$suites,
							garagens=$garagens,
							ano_contrucao=$ano_contrucao,
							texto='$texto',
							status='$status',
							zap='$zap'
							WHERE id = $identificador";

$result_imoveis = mysqli_query($conexao,utf8_decode($query_imoveis)) or die(mysql_error());

################################################################################

$query_imoveis_caracteristicas = "UPDATE caracteristicas_imovel SET
											AndarInteiro='$AndarInteiro',
											ArCondicionado='$ArCondicionado',
											ArmarioCozinha='$ArmarioCozinha',
											ArmarioEmbutido='$ArmarioEmbutido',
											Closet='$Closet',
											DepositoPrivadonoSubsolo='$DepositoPrivadonoSubsolo',
											Despensa='$Despensa',
											Escritorio='$Escritorio',
											EstudaPermuta='$EstudaPermuta',
											Lareira='$Lareira',
											Lavabo='$Lavabo',
											MeioAndar='$MeioAndar',
											Mobiliado='$Mobiliado',
											QuartoWCEmpregada='$QuartoWCEmpregada',
											SalaAlmoco='$SalaAlmoco',
											SalaJantar='$SalaJantar',
											Varanda='$Varanda',
											WCEmpregada='$WCEmpregada',
											PisoElevado='$PisoElevado',
											CampodeFutebol='$CampodeFutebol',
											ChildrenCare='$ChildrenCare',
											Churrasqueira='$Churrasqueira',
											Copa='$Copa',
											EntradadeCaminhoes='$EntradadeCaminhoes',
											Esquina='$Esquina',
											EstacionamentoVisitante='$EstacionamentoVisitante',
											Frenteparaomar='$Frenteparaomar',
											Hidromassagem='$Hidromassagem',
											Piscina='$Piscina',
											Playground='$Playground',
											QuadradeSquash='$QuadradeSquash',
											QuadradeTenis='$QuadradeTenis',
											QuadraPoliesportiva='$QuadraPoliesportiva',
											SalaodeGinastica='$SaladeGinastica',
											SalaoFestas='$SalaoFestas',
											SalaoJogos='$SalaoJogos', 
											Sauna='$Sauna',
											Vestiario='$Vestiario' 
											WHERE imo='$identificador'";

$result_caracteristicas_imoveis = mysqli_query($conexao,$query_imoveis_caracteristicas) or die(mysql_error());
#VERIFICA SE FOI SALVO OS DADOS DO IMÓVEL NO BANCO DE DADOS
if($result_imoveis && $result_caracteristicas_imoveis){
	$dadossalvos = True;
}

if($dadossalvos){
	header('Location: admin.php');	
}
?>