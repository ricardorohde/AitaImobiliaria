<?php
/**
 * @author jpchagas
 * @date 01-09-2016
 */
class Imovel{
	 private $tp_imovel,
	 		 $sb_tp_imovel,
	 		 $categoria,
	 		 $cep,
	 		 $estado,
	 		 $cidade,
			 $bairro,
	 		 $endereco,
	 		 $numero,
	 		 $complemento,
	 		 $descricao,
	 		 $a_util,
	 		 $a_total,
	 		 $v_t_venda,
	 		 $v_entrada,
	 		 $mensais,
	 		 $cond_com,
	 		 $d_cond,
	 		 $V_aluguel,
	 		 $diaria,
	 		 $isento,
	 		 $v_cond,
	 		 $v_iptu,
	 		 $nm_empr,
	 		 $capacidade,
	 		 $andares,
	 		 $un_andar,
	 		 $elevadores,
	 		 $banheiros,
	 		 $salas,
	 		 $quartos,
	 		 $suites,
	 		 $garagens,
	 		 $ano_contrucao,
	 		 $texto,
	 		 $status,
	 		 $zap,
	 		 $anuncio,
	 		 $dir,
	 		 $AndarInteiro,
	 		 $ArCondicionado,
			 $ArmarioCozinha,
	 		 $ArmarioEmbutido,
	 		 $Closet,
	 		 $DepositoPrivadonoSubsolo,
	 		 $Despensa,
	 		 $Escritorio,
	 		 $EstudaPermuta,
	 		 $Lareira,
	 		 $Lavabo,
	 		 $MeioAndar,
	 		 $Mobiliado,
	 		 $QuartoWCEmpregada,
	 		 $SalaAlmoco,
	 		 $SalaJantar,
	 		 $Varanda,
			 $WCEmpregada,
			 $PisoElevad,
			 $CampodeFutebol,
			 $ChildrenCare,
			 $Churrasqueira,
			 $Copa,
			 $EntradadeCaminhoes,
			 $Esquina,
			 $EstacionamentoVisitante,
			 $Frenteparaomar,
			 $Hidromassagem,
			 $Piscina,
			 $Playground,
			 $QuadradeSquash,
			 $QuadradeTenis,
			 $QuadraPoliesportiva,
			 $SaladeGinastica,
	 		 $SalaoFestas,
	 		 $SalaoJogos,
			 $Sauna,
			 $Vestiario;
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getTpImovel() {
		return $this->tp_imovel;
	}
	
	/**
	 *
	 * @param unknown_type $tp_imovel        	
	 */
	public function setTpImovel($tp_imovel) {
		$this->tp_imovel = $tp_imovel;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getSbTpImovel() {
		return $this->sb_tp_imovel;
	}
	
	/**
	 *
	 * @param unknown_type $sb_tp_imovel        	
	 */
	public function setSbTpImovel($sb_tp_imovel) {
		$this->sb_tp_imovel = $sb_tp_imovel;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getCategoria() {
		return $this->categoria;
	}
	
	/**
	 *
	 * @param unknown_type $categoria        	
	 */
	public function setCategoria($categoria) {
		$this->categoria = $categoria;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getCep() {
		return $this->cep;
	}
	
	/**
	 *
	 * @param unknown_type $cep        	
	 */
	public function setCep($cep) {
		$this->cep = $cep;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getEstado() {
		return $this->estado;
	}
	
	/**
	 *
	 * @param unknown_type $estado        	
	 */
	public function setEstado($estado) {
		$this->estado = $estado;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getCidade() {
		return $this->cidade;
	}
	
	/**
	 *
	 * @param unknown_type $cidade        	
	 */
	public function setCidade($cidade) {
		$this->cidade = $cidade;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getBairro() {
		return $this->bairro;
	}
	
	/**
	 *
	 * @param unknown_type $bairro        	
	 */
	public function setBairro($bairro) {
		$this->bairro = $bairro;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getEndereco() {
		return $this->endereco;
	}
	
	/**
	 *
	 * @param unknown_type $endereco        	
	 */
	public function setEndereco($endereco) {
		$this->endereco = $endereco;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getNumero() {
		return $this->numero;
	}
	
	/**
	 *
	 * @param unknown_type $numero        	
	 */
	public function setNumero($numero) {
		$this->numero = $numero;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getComplemento() {
		return $this->complemento;
	}
	
	/**
	 *
	 * @param unknown_type $complemento        	
	 */
	public function setComplemento($complemento) {
		$this->complemento = $complemento;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getDescricao() {
		return $this->descricao;
	}
	
	/**
	 *
	 * @param unknown_type $descricao        	
	 */
	public function setDescricao($descricao) {
		$this->descricao = $descricao;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getAUtil() {
		return $this->a_util;
	}
	
	/**
	 *
	 * @param unknown_type $a_util        	
	 */
	public function setAUtil($a_util) {
		$this->a_util = $a_util;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getATotal() {
		return $this->a_total;
	}
	
	/**
	 *
	 * @param unknown_type $a_total        	
	 */
	public function setATotal($a_total) {
		$this->a_total = $a_total;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getVTVenda() {
		return $this->v_t_venda;
	}
	
	/**
	 *
	 * @param unknown_type $v_t_venda        	
	 */
	public function setVTVenda($v_t_venda) {
		$this->v_t_venda = $v_t_venda;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getVEntrada() {
		return $this->v_entrada;
	}
	
	/**
	 *
	 * @param unknown_type $v_entrada        	
	 */
	public function setVEntrada($v_entrada) {
		$this->v_entrada = $v_entrada;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getMensais() {
		return $this->mensais;
	}
	
	/**
	 *
	 * @param unknown_type $mensais        	
	 */
	public function setMensais($mensais) {
		$this->mensais = $mensais;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getCondCom() {
		return $this->cond_com;
	}
	
	/**
	 *
	 * @param unknown_type $cond_com        	
	 */
	public function setCondCom($cond_com) {
		$this->cond_com = $cond_com;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getDCond() {
		return $this->d_cond;
	}
	
	/**
	 *
	 * @param unknown_type $d_cond        	
	 */
	public function setDCond($d_cond) {
		$this->d_cond = $d_cond;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getVAluguel() {
		return $this->V_aluguel;
	}
	
	/**
	 *
	 * @param unknown_type $V_aluguel        	
	 */
	public function setVAluguel($V_aluguel) {
		$this->V_aluguel = $V_aluguel;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getDiaria() {
		return $this->diaria;
	}
	
	/**
	 *
	 * @param unknown_type $diaria        	
	 */
	public function setDiaria($diaria) {
		$this->diaria = $diaria;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getIsento() {
		return $this->isento;
	}
	
	/**
	 *
	 * @param unknown_type $isento        	
	 */
	public function setIsento($isento) {
		$this->isento = $isento;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getVCond() {
		return $this->v_cond;
	}
	
	/**
	 *
	 * @param unknown_type $v_cond        	
	 */
	public function setVCond($v_cond) {
		$this->v_cond = $v_cond;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getVIptu() {
		return $this->v_iptu;
	}
	
	/**
	 *
	 * @param unknown_type $v_iptu        	
	 */
	public function setVIptu($v_iptu) {
		$this->v_iptu = $v_iptu;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getNmEmpr() {
		return $this->nm_empr;
	}
	
	/**
	 *
	 * @param unknown_type $nm_empr        	
	 */
	public function setNmEmpr($nm_empr) {
		$this->nm_empr = $nm_empr;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getCapacidade() {
		return $this->capacidade;
	}
	
	/**
	 *
	 * @param unknown_type $capacidade        	
	 */
	public function setCapacidade($capacidade) {
		$this->capacidade = $capacidade;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getAndares() {
		return $this->andares;
	}
	
	/**
	 *
	 * @param unknown_type $andares        	
	 */
	public function setAndares($andares) {
		$this->andares = $andares;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getUnAndar() {
		return $this->un_andar;
	}
	
	/**
	 *
	 * @param unknown_type $un_andar        	
	 */
	public function setUnAndar($un_andar) {
		$this->un_andar = $un_andar;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getElevadores() {
		return $this->elevadores;
	}
	
	/**
	 *
	 * @param unknown_type $elevadores        	
	 */
	public function setElevadores($elevadores) {
		$this->elevadores = $elevadores;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getBanheiros() {
		return $this->banheiros;
	}
	
	/**
	 *
	 * @param unknown_type $banheiros        	
	 */
	public function setBanheiros($banheiros) {
		$this->banheiros = $banheiros;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getSalas() {
		return $this->salas;
	}
	
	/**
	 *
	 * @param unknown_type $salas        	
	 */
	public function setSalas($salas) {
		$this->salas = $salas;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getQuartos() {
		return $this->quartos;
	}
	
	/**
	 *
	 * @param unknown_type $quartos        	
	 */
	public function setQuartos($quartos) {
		$this->quartos = $quartos;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getSuites() {
		return $this->suites;
	}
	
	/**
	 *
	 * @param unknown_type $suites        	
	 */
	public function setSuites($suites) {
		$this->suites = $suites;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getGaragens() {
		return $this->garagens;
	}
	
	/**
	 *
	 * @param unknown_type $garagens        	
	 */
	public function setGaragens($garagens) {
		$this->garagens = $garagens;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getAnoContrucao() {
		return $this->ano_contrucao;
	}
	
	/**
	 *
	 * @param unknown_type $ano_contrucao        	
	 */
	public function setAnoContrucao($ano_contrucao) {
		$this->ano_contrucao = $ano_contrucao;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getTexto() {
		return $this->texto;
	}
	
	/**
	 *
	 * @param unknown_type $texto        	
	 */
	public function setTexto($texto) {
		$this->texto = $texto;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getStatus() {
		return $this->status;
	}
	
	/**
	 *
	 * @param unknown_type $status        	
	 */
	public function setStatus($status) {
		$this->status = $status;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getZap() {
		return $this->zap;
	}
	
	/**
	 *
	 * @param unknown_type $zap        	
	 */
	public function setZap($zap) {
		$this->zap = $zap;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getAnuncio() {
		return $this->anuncio;
	}
	
	/**
	 *
	 * @param unknown_type $anuncio        	
	 */
	public function setAnuncio($anuncio) {
		$this->anuncio = $anuncio;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getDir() {
		return $this->dir;
	}
	
	/**
	 *
	 * @param unknown_type $dir        	
	 */
	public function setDir($dir) {
		$this->dir = $dir;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getAndarInteiro() {
		return $this->AndarInteiro;
	}
	
	/**
	 *
	 * @param unknown_type $AndarInteiro        	
	 */
	public function setAndarInteiro($AndarInteiro) {
		$this->AndarInteiro = $AndarInteiro;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getArCondicionado() {
		return $this->ArCondicionado;
	}
	
	/**
	 *
	 * @param unknown_type $ArCondicionado        	
	 */
	public function setArCondicionado($ArCondicionado) {
		$this->ArCondicionado = $ArCondicionado;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getArmarioCozinha() {
		return $this->ArmarioCozinha;
	}
	
	/**
	 *
	 * @param unknown_type $ArmarioCozinha        	
	 */
	public function setArmarioCozinha($ArmarioCozinha) {
		$this->ArmarioCozinha = $ArmarioCozinha;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getArmarioEmbutido() {
		return $this->ArmarioEmbutido;
	}
	
	/**
	 *
	 * @param unknown_type $ArmarioEmbutido        	
	 */
	public function setArmarioEmbutido($ArmarioEmbutido) {
		$this->ArmarioEmbutido = $ArmarioEmbutido;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getCloset() {
		return $this->Closet;
	}
	
	/**
	 *
	 * @param unknown_type $Closet        	
	 */
	public function setCloset($Closet) {
		$this->Closet = $Closet;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getDepositoPrivadonoSubsolo() {
		return $this->DepositoPrivadonoSubsolo;
	}
	
	/**
	 *
	 * @param unknown_type $DepositoPrivadonoSubsolo        	
	 */
	public function setDepositoPrivadonoSubsolo($DepositoPrivadonoSubsolo) {
		$this->DepositoPrivadonoSubsolo = $DepositoPrivadonoSubsolo;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getDespensa() {
		return $this->Despensa;
	}
	
	/**
	 *
	 * @param unknown_type $Despensa        	
	 */
	public function setDespensa($Despensa) {
		$this->Despensa = $Despensa;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getEscritorio() {
		return $this->Escritorio;
	}
	
	/**
	 *
	 * @param unknown_type $Escritorio        	
	 */
	public function setEscritorio($Escritorio) {
		$this->Escritorio = $Escritorio;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getEstudaPermuta() {
		return $this->EstudaPermuta;
	}
	
	/**
	 *
	 * @param unknown_type $EstudaPermuta        	
	 */
	public function setEstudaPermuta($EstudaPermuta) {
		$this->EstudaPermuta = $EstudaPermuta;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getLareira() {
		return $this->Lareira;
	}
	
	/**
	 *
	 * @param unknown_type $Lareira        	
	 */
	public function setLareira($Lareira) {
		$this->Lareira = $Lareira;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getLavabo() {
		return $this->Lavabo;
	}
	
	/**
	 *
	 * @param unknown_type $Lavabo        	
	 */
	public function setLavabo($Lavabo) {
		$this->Lavabo = $Lavabo;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getMeioAndar() {
		return $this->MeioAndar;
	}
	
	/**
	 *
	 * @param unknown_type $MeioAndar        	
	 */
	public function setMeioAndar($MeioAndar) {
		$this->MeioAndar = $MeioAndar;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getMobiliado() {
		return $this->Mobiliado;
	}
	
	/**
	 *
	 * @param unknown_type $Mobiliado        	
	 */
	public function setMobiliado($Mobiliado) {
		$this->Mobiliado = $Mobiliado;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getQuartoWCEmpregada() {
		return $this->QuartoWCEmpregada;
	}
	
	/**
	 *
	 * @param unknown_type $QuartoWCEmpregada        	
	 */
	public function setQuartoWCEmpregada($QuartoWCEmpregada) {
		$this->QuartoWCEmpregada = $QuartoWCEmpregada;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getSalaAlmoco() {
		return $this->SalaAlmoco;
	}
	
	/**
	 *
	 * @param unknown_type $SalaAlmoco        	
	 */
	public function setSalaAlmoco($SalaAlmoco) {
		$this->SalaAlmoco = $SalaAlmoco;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getSalaJantar() {
		return $this->SalaJantar;
	}
	
	/**
	 *
	 * @param unknown_type $SalaJantar        	
	 */
	public function setSalaJantar($SalaJantar) {
		$this->SalaJantar = $SalaJantar;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getVaranda() {
		return $this->Varanda;
	}
	
	/**
	 *
	 * @param unknown_type $Varanda        	
	 */
	public function setVaranda($Varanda) {
		$this->Varanda = $Varanda;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getWCEmpregada() {
		return $this->WCEmpregada;
	}
	
	/**
	 *
	 * @param unknown_type $WCEmpregada        	
	 */
	public function setWCEmpregada($WCEmpregada) {
		$this->WCEmpregada = $WCEmpregada;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getPisoElevad() {
		return $this->PisoElevad;
	}
	
	/**
	 *
	 * @param unknown_type $PisoElevad        	
	 */
	public function setPisoElevad($PisoElevad) {
		$this->PisoElevad = $PisoElevad;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getCampodeFutebol() {
		return $this->CampodeFutebol;
	}
	
	/**
	 *
	 * @param unknown_type $CampodeFutebol        	
	 */
	public function setCampodeFutebol($CampodeFutebol) {
		$this->CampodeFutebol = $CampodeFutebol;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getChildrenCare() {
		return $this->ChildrenCare;
	}
	
	/**
	 *
	 * @param unknown_type $ChildrenCare        	
	 */
	public function setChildrenCare($ChildrenCare) {
		$this->ChildrenCare = $ChildrenCare;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getChurrasqueira() {
		return $this->Churrasqueira;
	}
	
	/**
	 *
	 * @param unknown_type $Churrasqueira        	
	 */
	public function setChurrasqueira($Churrasqueira) {
		$this->Churrasqueira = $Churrasqueira;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getCopa() {
		return $this->Copa;
	}
	
	/**
	 *
	 * @param unknown_type $Copa        	
	 */
	public function setCopa($Copa) {
		$this->Copa = $Copa;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getEntradadeCaminhoes() {
		return $this->EntradadeCaminhoes;
	}
	
	/**
	 *
	 * @param unknown_type $EntradadeCaminhoes        	
	 */
	public function setEntradadeCaminhoes($EntradadeCaminhoes) {
		$this->EntradadeCaminhoes = $EntradadeCaminhoes;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getEsquina() {
		return $this->Esquina;
	}
	
	/**
	 *
	 * @param unknown_type $Esquina        	
	 */
	public function setEsquina($Esquina) {
		$this->Esquina = $Esquina;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getEstacionamentoVisitante() {
		return $this->EstacionamentoVisitante;
	}
	
	/**
	 *
	 * @param unknown_type $EstacionamentoVisitante        	
	 */
	public function setEstacionamentoVisitante($EstacionamentoVisitante) {
		$this->EstacionamentoVisitante = $EstacionamentoVisitante;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getFrenteparaomar() {
		return $this->Frenteparaomar;
	}
	
	/**
	 *
	 * @param unknown_type $Frenteparaomar        	
	 */
	public function setFrenteparaomar($Frenteparaomar) {
		$this->Frenteparaomar = $Frenteparaomar;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getHidromassagem() {
		return $this->Hidromassagem;
	}
	
	/**
	 *
	 * @param unknown_type $Hidromassagem        	
	 */
	public function setHidromassagem($Hidromassagem) {
		$this->Hidromassagem = $Hidromassagem;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getPiscina() {
		return $this->Piscina;
	}
	
	/**
	 *
	 * @param unknown_type $Piscina        	
	 */
	public function setPiscina($Piscina) {
		$this->Piscina = $Piscina;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getPlayground() {
		return $this->Playground;
	}
	
	/**
	 *
	 * @param unknown_type $Playground        	
	 */
	public function setPlayground($Playground) {
		$this->Playground = $Playground;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getQuadradeSquash() {
		return $this->QuadradeSquash;
	}
	
	/**
	 *
	 * @param unknown_type $QuadradeSquash        	
	 */
	public function setQuadradeSquash($QuadradeSquash) {
		$this->QuadradeSquash = $QuadradeSquash;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getQuadradeTenis() {
		return $this->QuadradeTenis;
	}
	
	/**
	 *
	 * @param unknown_type $QuadradeTenis        	
	 */
	public function setQuadradeTenis($QuadradeTenis) {
		$this->QuadradeTenis = $QuadradeTenis;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getQuadraPoliesportiva() {
		return $this->QuadraPoliesportiva;
	}
	
	/**
	 *
	 * @param unknown_type $QuadraPoliesportiva        	
	 */
	public function setQuadraPoliesportiva($QuadraPoliesportiva) {
		$this->QuadraPoliesportiva = $QuadraPoliesportiva;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getSaladeGinastica() {
		return $this->SaladeGinastica;
	}
	
	/**
	 *
	 * @param unknown_type $SaladeGinastica        	
	 */
	public function setSaladeGinastica($SaladeGinastica) {
		$this->SaladeGinastica = $SaladeGinastica;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getSalaoFestas() {
		return $this->SalaoFestas;
	}
	
	/**
	 *
	 * @param unknown_type $SalaoFestas        	
	 */
	public function setSalaoFestas($SalaoFestas) {
		$this->SalaoFestas = $SalaoFestas;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getSalaoJogos() {
		return $this->SalaoJogos;
	}
	
	/**
	 *
	 * @param unknown_type $SalaoJogos        	
	 */
	public function setSalaoJogos($SalaoJogos) {
		$this->SalaoJogos = $SalaoJogos;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getSauna() {
		return $this->Sauna;
	}
	
	/**
	 *
	 * @param unknown_type $Sauna        	
	 */
	public function setSauna($Sauna) {
		$this->Sauna = $Sauna;
		return $this;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getVestiario() {
		return $this->Vestiario;
	}
	
	/**
	 *
	 * @param unknown_type $Vestiario        	
	 */
	public function setVestiario($Vestiario) {
		$this->Vestiario = $Vestiario;
		return $this;
	}
	
}


?>