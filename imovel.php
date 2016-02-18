<!DOCTYPE html>
<html lang="en">

	<?php
		include "header.php";
	?>
	<body>

		<!-- Navigation -->
		<?php
			include "nav.php";
		?>
		
		<?php
			require "db-conection.php";
			$idimovel = $_GET['idimo'];
			$result = mysqli_query($conexao,"SELECT * FROM imoveis WHERE id = $idimovel") or die(mysql_error());
			$obj = mysqli_fetch_object($result);
		?>
		
		<!-- Page Content -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="thumbnail">
						<img class="img-responsive" src="<?php echo $obj->dir.'/0.jpg' ?>" alt="" height="340" width="255">
						<div class="caption-full">
							<h4 class="pull-right">
								<?php 
									if($obj->transacao == 'Locação'){ 
										echo $obj->v_aluguel;
									}else if($obj->transacao == 'Locação'){ 
										echo $obj->v_t_venda;
									}
								?>
							</h4>
							<h4>
								<?php
									echo $obj->id.'-'.$obj->nm_empr
								?>
							</h4>
							<p>
								<?php
									if($obj->transacao != ''){
								?>
									<b>Transação:</b><?php echo $obj->transacao ?> <br>
								<?php
									}
								?>
								<b>Tipo do Imóvel:</b><?php echo $obj->tp_imovel ?> <br> 
								<b>Subtipo do Imóvel:</b><?php echo $obj->sb_tp_imovel ?> <br>
								<b>Categoria:</b><?php echo $obj->categoria ?> <br>
								<b>CEP:</b><?php echo $obj->cep ?> <br>
								<b>Estado:</b><?php echo $obj->estado ?><br>
								<b>Cidade:</b><?php echo $obj->cidade ?> <br>
								<b>Bairro:</b><?php echo $obj->bairro ?><br>
								<b>Endereço:</b><?php echo $obj->endereco ?><br>
								<b>Número:</b><?php echo $obj->numero ?> <br>
								<b>Complemento:</b><?php echo $obj->complemento ?> <br>
								<?php
									if($obj->descricao != ''){
								?>
									<b>Descrição:</b><?php echo $obj->descricao ?> <br>
								<?php
									}
								?>
								<b>Área Útil(m²):</b><?php echo $obj->a_util ?><br>
								<b>Área Total:</b><?php echo $obj->a_total ?> <br>
								<b>Valor Entrada:</b><?php echo $obj->v_entrada ?> <br>
								<b>Mensais:</b><?php echo $obj->mensais ?> <br>
								<b>Condição de Compra:</b><?php echo $obj->cond_com ?> <br>
								<b>Demais Codições de Compra:</b><?php echo $obj->d_cond ?> <br>
								<b>Diária:</b><?php echo $obj->diaria ?> <br>
								<b>Isento de Condomínio:</b><?php echo $obj->isento ?><br>
								<b>Valor Condomínio:</b><?php echo $obj->v_cond ?> <br>
								<b>IPTU:</b><?php echo $obj->v_iptu ?> <br>
								<b>Capacidade:</b><?php echo $obj->capacidade ?> <br>
								<b>Andares:</b><?php echo $obj->andares ?><br>
								<b>Unidades por Andar:</b><?php echo $obj->un_andar ?><br>
								<b>Elevadores:</b><?php echo $obj->elevadores ?><br>
								<b>Banheiros:</b><?php echo $obj->banheiros ?><br>
								<b>Salas:</b><?php echo $obj->salas ?><br>
								<b>Quartos:</b><?php echo $obj->quartos ?><br>
								<b>Suítes:</b><?php echo $obj->suites ?><br>
								<b>Garagens:</b><?php echo $obj->garagens ?><br>
								<b>Ano Construção:</b><?php echo $obj->ano_contrucao ?><br>
								<b>ZAP:</b> <?php echo $obj->zap ?>
							</p>
						</div>	
					</div>
					<div class="thumbnail">
						<h4>Descrição do Imóvel</h4>
						<p>
							<?php echo $obj->texto ?>
						</p>
					</div >
					
					<div class="thumbnail">
						<h4>Fotos do Empreendimento</h4>
							<?php
								if($obj->qt_fotos>0){
									echo "<div class=\"row\">";
									for($i=01;$i<=$obj->qt_fotos;$i++){
										echo "<div class=\"col-lg-2 col-md-2 col-sm-3 col-xs-4 col-xxs-12\">";
							?>
								<img class="img-responsive" src="<?php echo $obj->dir.'/'.$i.'.jpg' ?>" alt="" height="340" width="255">
								</div>
							<?php
									}
								}else echo "";
							?>
							</div>
					</div>
						
					
					<div class="thumbnail">
						<h4>Caracteristicas do Imóvel</h4>
						<ul>
							<?php
								if($obj->AndarInteiro != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->ArCondicionado != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->ArmarioCozinha != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->ArmarioEmbutido != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->Closet != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->DepositoPrivadonoSubsolo != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->Escritorio != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->EstudaPermuta != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->Lareira != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->Lavabo != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->MeioAndar != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->Mobiliado != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->QuartoWCEmpregada != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->SalaAlmoco != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->SalaJantar != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->Varanda != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->WCEmpregada != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->PisoElevado != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
							?>
						</ul>
					</div >
					
					<div class="thumbnail">
						<h4>Caracteristicas da Área Comum</h4>
						<ul>
						<?php
							if($obj->CampodeFutebol != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->ChildrenCare != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
							if($obj->Churrasqueira != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
							if($obj->Copa != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->EntradadeCaminhoes != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->Esquina != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->EstacionamentoVisitantes != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->Frenteparaomar != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->Hidromassagem != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->Piscina != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->Playground != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->QuadradeSquash != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->QuadradeTenis != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->QuadraPoliesportiva != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->SaladeGinastica != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->SalaodeFestas != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->SalaodeJogos != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->Sauna != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
								if($obj->Vestiario != ''){
									echo '<li>';
									echo $obj->AndarInteiro;
									echo '</li>';
								}
						?>
						</ul>
					</div >
					
					<div class="thumbnail">
					<h4>Localização</h4>
						<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:400px;width:1138px;'><div id='gmap_canvas' style='height:400px;width:1138px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://maps-generator.com/pt'>Maps-Generator</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=938b8f5e68a7bfb5b5582bd77631d64fa8422110'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:21,center:new google.maps.LatLng(-30.0333,-51.19999999999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-30.0333,-51.19999999999999)});infowindow = new google.maps.InfoWindow({content:'<strong>Porto Alegre</strong><br>Mariante, 519<br> Porto Alegre<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
					</div>
					
				</div>
			</div>
		</div>

		<!-- Footer -->
			<?php
				include "footer.php";
			?>
			
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

	</body>

</html>
