<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
    include "head.php";
  ?>
<body>
<div id="main_container">
  <?php
        include "header.php";
      ?>
  <div id="main_content">
    <?php
          include "colum1.php";
    ?>
    <!-- end of column one -->

    <?php
      require "db-conection.php";
      $idimovel = $_GET['idimo'];
      $result_imovel = mysqli_query($conexao,"SELECT * FROM imoveis WHERE id = $idimovel") or die(mysql_error());
      $result_imagens = mysqli_query($conexao,"SELECT * FROM imagens_imo WHERE imo = $idimovel") or die(mysql_error());
      $result_f_m = mysqli_query($conexao,"SELECT * FROM imagens_imo WHERE imo = $idimovel LIMIT 1") or die(mysql_error());
      $result_c_m = mysqli_query($conexao,"SELECT * FROM caracteristicas_imovel WHERE imo = $idimovel") or die(mysql_error());
      $obj_imovel = mysqli_fetch_object($result_imovel);
      $obj = mysqli_fetch_object($result_f_m);
      $obj_caracteristicas = mysqli_fetch_object($result_c_m);
    ?>

    <div class="column4">
      <div class="title"><?php
                  echo $obj_imovel->id.'-'.$obj_imovel->nm_empr
                ?></div>
    </div>
    <!-- end of column four -->
    <div class="column2" style="background-color:#f3f5f6; margin-left:5px;">
      <div class="big_pic"><img src="<?php echo $obj->dir.'/'.$obj->name ?>" width="282" height="212" alt="" class="img_big_pic" /></div>
      <div class="photos">
        <h3>Fotos do Empreendimento</h3>
          <?php
                if($result_imagens){
                  echo "<div class=\"row\">";
                  while($obj_imagens = mysqli_fetch_array($result_imagens,MYSQLI_ASSOC)){
                    echo "<div class=\"col-lg-2 col-md-2 col-sm-3 col-xs-4 col-xxs-12\">";
          ?>
          <ul class="clearfix">
           <li>
            <a href="<?php echo $obj_imagens["dir"].'/'.$obj_imagens["name"] ?>" data-lightbox="imoima" rel="lightbox">
              <img class="img-responsive" src="<?php echo $obj_imagens["dir"].'/'.$obj_imagens["name"] ?>" alt="" height="65" width="65"> 
            </a>
          </li>
        </ul>
         <!-- <img class="img-responsive" src="<?php echo $obj_imovel->dir.'/'.$i.'.jpg' ?>" alt="" height="340" width="255">-->
                </div>
              <?php
                  }
                }else echo "Não existe imagens cadastradas!";
              ?>
              </div>
      </div>
    </div>
    <!-- end of column two -->
    <div class="column3">
      <div class="main_text_box">
        <h1>R$ <?php 
                  if($obj_imovel->transacao == 'Locação'){ 
                    echo $obj_imovel->v_aluguel;
                  }else if($obj_imovel->transacao == 'Locação'){ 
                    echo $obj_imovel->v_t_venda;
                  }
                ?></h1>
        <p> <?php echo (utf8_encode($obj_imovel->texto)) ?> </p>
      </div>
      <div class="title2">Detalhes</div>
      <div class="details_list">
        <ul>
          <?php
            if($obj_imovel->transacao != ''){
          ?>
            <li><span>Transação:</span><?php echo $obj_imovel->transacao ?> </li>
          <?php
            }
          ?>
          <?php
            if($obj_imovel->tp_imovel != ''){
          ?>
            <li><span>Tipo do Imóvel:</span><?php echo $obj_imovel->tp_imovel ?> </li>
          <?php
            }
          ?>
          <?php
            if($obj_imovel->sb_tp_imovel != ''){
          ?>
                <li><span>Subtipo do Imóvel:</span><?php echo $obj_imovel->sb_tp_imovel ?> </li>
          <?php
            }
          ?>
          <?php
            if($obj_imovel->categoria != ''){
          ?>
                <li><span>Categoria:</span><?php echo $obj_imovel->categoria ?> </li>
          <?php
            }
          ?>
          <?php
            if($obj_imovel->cep != ''){
          ?>
                <li><span>CEP:</span><?php echo $obj_imovel->cep ?> </li>
          <?php
            }
          ?>
          <?php
            if($obj_imovel->estado != ''){
          ?>
                <li><span>Estado:</span><?php echo $obj_imovel->estado ?></li>
          <?php
            }
          ?>
          <?php
            if($obj_imovel->cidade != ''){
          ?>
                <li><span>Cidade:</span><?php echo $obj_imovel->cidade ?> </li>
          <?php
            }
          ?>
          <?php
            if($obj_imovel->bairro != ''){
          ?>
                <li><span>Bairro:</span><?php echo $obj_imovel->bairro ?></li>
          <?php
            }
          ?>
          <?php
            if($obj_imovel->endereco != ''){
          ?>
                <li><span>Endereço:</span><?php echo $obj_imovel->endereco ?></li>
          <?php
            }
          ?>
          <?php
            if($obj_imovel->numero != ''){
          ?>
                <li><span>Número:</span><?php echo $obj_imovel->numero ?> </li>
          <?php
            }
          ?>
          <?php
            if($obj_imovel->complemento != ''){
          ?>
                <li><span>Complemento:</span><?php echo $obj_imovel->complemento ?> </li>
          <?php
            }
          ?>
                <?php
                  if($obj_imovel->descricao != ''){
                ?>
                  <li><span>Descrição:</span><?php echo $obj_imovel->descricao ?> </li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->a_util != ''){
                ?>
                <li><span>Área Útil(m²):</span><?php echo $obj_imovel->a_util ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->a_total != ''){
                ?>
                <li><span>Área Total:</span><?php echo $obj_imovel->a_total ?> </li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->v_entrada != ''){
                ?>
                <li><span>Valor Entrada:</span><?php echo $obj_imovel->v_entrada ?> </li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->mensais != ''){
                ?>
                <li><span>Mensais:</span><?php echo $obj_imovel->mensais ?> </li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->cond_com != ''){
                ?>
                <li><span>Condição de Compra:</span><?php echo $obj_imovel->cond_com ?> </li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->d_cond != ''){
                ?>
                <li><span>Demais Codições de Compra:</span><?php echo $obj_imovel->d_cond ?> </li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->diaria != ''){
                ?>
                <li><span>Diária:</span><?php echo $obj_imovel->diaria ?> </li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->isento != ''){
                ?>
                <li><span>Isento de Condomínio:</span><?php echo $obj_imovel->isento ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->v_cond != ''){
                ?>
                <li><span>Valor Condomínio:</span><?php echo $obj_imovel->v_cond ?> </li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->v_iptu != ''){
                ?>
                <li><span>IPTU:</span><?php echo $obj_imovel->v_iptu ?> </li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->capacidade != ''){
                ?>
                <li><span>Capacidade:</span><?php echo $obj_imovel->capacidade ?> </li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->andares != ''){
                ?>
                <li><span>Andares:</span><?php echo $obj_imovel->andares ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->un_andar != ''){
                ?>
                <li><span>Unidades por Andar:</span><?php echo $obj_imovel->un_andar ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->elevadores != ''){
                ?>
                <li><span>Elevadores:</span><?php echo $obj_imovel->elevadores ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->banheiros != ''){
                ?>
                <li><span>Banheiros:</span><?php echo $obj_imovel->banheiros ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->salas != ''){
                ?>
                <li><span>Salas:</span><?php echo $obj_imovel->salas ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->quartos != ''){
                ?>
                <li><span>Quartos:</span><?php echo $obj_imovel->quartos ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->suites != ''){
                ?>
                <li><span>Suítes:</span><?php echo $obj_imovel->suites ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->garagens != ''){
                ?>
                <li><span>Garagens:</span><?php echo $obj_imovel->garagens ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->ano_contrucao != ''){
                ?>
                <li><span>Ano Construção:</span><?php echo $obj_imovel->ano_contrucao ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_imovel->zap != ''){
                ?>
                <li><span>ZAP:</span> <?php echo $obj_imovel->zap ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->AndarInteiro != ''){
                ?>
                <li><span>AndarInteiro</span><?php echo $obj_caracteristicas->AndarInteiro ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->ArCondicionado != ''){
                ?>
                <li><span>ArCondicionado</span><?php echo $obj_caracteristicas->ArCondicionado ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->ArmarioCozinha != ''){
                ?>
                <li><span>ArmarioCozinha</span><?php echo $obj_caracteristicas->ArmarioCozinha ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->ArmarioEmbutido != ''){
                ?>
                <li><span>ArmarioEmbutido</span><?php echo $obj_caracteristicas->ArmarioEmbutido ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->Closet != ''){
                ?>
                <li><span>Closet</span><?php echo $obj_caracteristicas->Closet ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->DepositoPrivadonoSubsolo != ''){
                ?>
                <li><span>DepositoPrivadonoSubsolo</span><?php echo $obj_caracteristicas->DepositoPrivadonoSubsolo ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->Despensa != ''){
                ?>
                <li><span>Despensa</span><?php echo $obj_caracteristicas->Despensa ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->Escritorio != ''){
                ?>
                <li><span>Escritorio</span><?php echo $obj_caracteristicas->Escritorio ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->EstudaPermuta != ''){
                ?>
                <li><span>EstudaPermuta</span><?php echo $obj_caracteristicas->EstudaPermuta ?></li>
                 <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->Lareira != ''){
                ?>
                <li><span>Lareira</span><?php echo $obj_caracteristicas->Lareira ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->Lavabo != ''){
                ?>
                <li><span>Lavabo</span><?php echo $obj_caracteristicas->Lavabo ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->MeioAndar != ''){
                ?>
                <li><span>MeioAndar</span><?php echo $obj_caracteristicas->MeioAndar ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->Mobiliado != ''){
                ?>
                <li><span>Mobiliado</span><?php echo $obj_caracteristicas->Mobiliado ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->QuartoWCEmpregada != ''){
                ?>
                <li><span>QuartoWCEmpregada</span><?php echo $obj_caracteristicas->QuartoWCEmpregada ?></li>
                <?php
                  }
                ?>

                <?php
                  if($obj_caracteristicas->SalaAlmoco != ''){
                ?>
                <li><span>SalaAlmoco</span><?php echo $obj_caracteristicas->SalaAlmoco ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->SalaJantar != ''){
                ?>
                <li><span>SalaJantar</span><?php echo $obj_caracteristicas->SalaJantar ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->Varanda != ''){
                ?>
                <li><span>Varanda</span><?php echo $obj_caracteristicas->Varanda ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->WCEmpregada != ''){
                ?>
                <li><span>WCEmpregada</span><?php echo $obj_caracteristicas->WCEmpregada ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->PisoElevado != ''){
                ?>
                <li><span>PisoElevado</span><?php echo $obj_caracteristicas->PisoElevado ?></li>
                <?php
                  }
                ?>
                 <?php
                  if($obj_caracteristicas->CampodeFutebol != ''){
                ?>
                <li><span>CampodeFutebol</span><?php echo $obj_caracteristicas->CampodeFutebol ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->ChildrenCare != ''){
                ?>
                <li><span>ChildrenCare</span><?php echo $obj_caracteristicas->ChildrenCare ?></li>
                <?php
                  }
                ?>
               <?php
                  if($obj_caracteristicas->Churrasqueira != ''){
                ?> 
                <li><span>Churrasqueira</span><?php echo $obj_caracteristicas->Churrasqueira ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->Copa != ''){
                ?> 
                <li><span>Copa</span><?php echo $obj_caracteristicas->Copa ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->EntradadeCaminhoes != ''){
                ?>
                <li><span>EntradadeCaminhoes</span><?php echo $obj_caracteristicas->EntradadeCaminhoes ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->Esquina != ''){
                ?>
                <li><span>Esquina</span><?php echo $obj_caracteristicas->Esquina ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->EstacionamentoVisitante != ''){
                ?>
                <li><span>EstacionamentoVisitante</span><?php echo $obj_caracteristicas->EstacionamentoVisitante ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->Frenteparaomar != ''){
                ?>
                <li><span>Frenteparaomar</span><?php echo $obj_caracteristicas->Frenteparaomar ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->Hidromassagem != ''){
                ?>
                <li><span>Hidromassagem</span><?php echo $obj_caracteristicas->Hidromassagem ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->Piscina != ''){
                ?>
                <li><span>Piscina</span><?php echo $obj_caracteristicas->Piscina ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->Playground != ''){
                ?>
                <li><span>Playground</span><?php echo $obj_caracteristicas->Playground ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->QuadradeSquash != ''){
                ?>
                <li><span>QuadradeSquash</span><?php echo $obj_caracteristicas->QuadradeSquash ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->QuadradeTenis != ''){
                ?>
                <li><span>QuadradeTenis</span><?php echo $obj_caracteristicas->QuadradeTenis ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->QuadraPoliesportiva != ''){
                ?>
                <li><span>QuadraPoliesportiva</span><?php echo $obj_caracteristicas->QuadraPoliesportiva ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->SalaoFestas != ''){
                ?>
                <li><span>SalaoFestas</span><?php echo $obj_caracteristicas->SalaoFestas ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->SalaodeGinastica != ''){
                ?>
                <li><span>SaladeGinastica</span><?php echo $obj_caracteristicas->SalaodeGinastica ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->SalaoJogos != ''){
                ?>
                <li><span>SalaoJogos</span><?php echo $obj_caracteristicas->SalaoJogos ?></li>
                <?php
                  }
                ?>
                <?php
                  if($obj_caracteristicas->Sauna != ''){
                ?>
                <li><span>Sauna</span><?php echo $obj_caracteristicas->Sauna ?></li>
                <?php
                  }
                ?>
                 <?php
                  if($obj_caracteristicas->Vestiario != ''){
                ?>
                <li><span>Vestiario</span><?php echo $obj_caracteristicas->Vestiario ?></li>
                <?php
                  }
                ?>
        </ul>
      </div>
      <div style="float:left;">
        <div class="button"><a href="#">Interessado</a></div>
      </div>
      <div style="float:left; padding-left:150px;"><a href="#"><img src="images/print.gif" width="28" height="28" border="0" alt="print this offer" title="print this offer" /></a> </div>
      <!-- end of column three -->
    </div>
    <!-- end of main_content -->
    <?php
        include "footer.php";
      ?>
  </div>
</div>
<!-- end of main_container -->
<!-- JAVASCRIPT -->
    <script src="js/jQuery.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>
