<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
    include "head.php";
  ?>
<body>
<div id="main_container">
  <?php
        include "header.php";
        require "db-conection.php";
        $idimovel = $_GET['idimo'];
        $result_imovel = mysqli_query($conexao,"SELECT * FROM imoveis WHERE id = $idimovel") or die(mysql_error());
        $obj_imovel = mysqli_fetch_object($result_imovel);
        $result_c_m = mysqli_query($conexao,"SELECT * FROM caracteristicas_imovel WHERE imo = $idimovel") or die(mysql_error());
        $obj_caracteristicas = mysqli_fetch_object($result_c_m);
      ?>
  <div id="main_content">
    <div id="admin_header">
      <div class="admin_addoffer_title">Atualizar Imóvel</div>
      <div class="right_buttons">
        <div class="right_button"><a href="admin.php">Voltar</a></div>
      </div>
    </div>
    <div id="admin_header_border"></div>
    <div class="add_tab">
      <form class="form_contact" action="update-imo.php" name="registreimo" enctype="multipart/form-data" method="post" id="imoForm" novalidate>
      
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Identificador:</label>
                                    <input value = "<?php echo $idimovel?>" type="text" class="form-control" placeholder="idaux" name="idaux" id="idaux" required data-validation-required-message="Por favor insira o Identificador.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Transação:</label>
                                 <label  ><input type="checkbox" name="trans[]" id="trans" value="Venda" <?php if($obj_imovel->transacao =='Venda'){echo "checked";} ?>>Venda</label>
                                 <label  ><input type="checkbox" name="trans[]" id="trans" value="Aluguel" <?php if($obj_imovel->transacao =='Aluguel'){echo "checked";} ?>>Locação</label>
                                 <label  ><input type="checkbox" name="trans[]" id="trans" value="Aluguel Temporada" <?php if($obj_imovel->transacao =='Aluguel Temporada'){echo "checked";} ?>>Locação Temporada</label>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Tipo de Imóvel:</label>
                                <select class="form-control" id="sel1" name="t_imo">
                                    <option >Selecione</option>
                                    <option <?php if($obj_imovel->tp_imovel=='Apartamento'){echo "selected";} ?>>Apartamento</option>
                                    <option>Kitchenette/Conjugado</option>
                                    <option>Loft</option>
                                    <option>Studio</option>
                                    <option <?php if($obj_imovel->tp_imovel=='Casa padrão'){echo "selected";} ?>>Casa padrão</option>
                                    <option <?php if($obj_imovel->tp_imovel=='Terreno padrão'){echo "selected";} ?>>Terreno padrão</option>
                                    <option>Box/Garagem</option>
                                    <option>Casa comercial</option>
                                    <option>Casa condomínio</option>
                                    <option>Casa de vila</option>
                                    <option>Chácara</option>
                                    <option <?php if($obj_imovel->tp_imovel=='Conjunto comercial'){echo "selected";} ?>>Conjunto comercial</option>
                                    <option>Fazenda</option>
                                    <option>Flat</option>
                                    <option>Galpão/Depósito</option>
                                    <option>Haras</option>
                                    <option>Hotel</option>
                                    <option>Industria</option>
                                    <option>Loja Shopping</option>
                                    <option>Loja</option>
                                    <option>Loteamento</option>
                                    <option>Motel</option>
                                    <option>Pousada</option>
                                    <option>Prédio Inteiro</option>
                                    <option>Sítio</option>
                                  </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Subtipo de Imóvel:</label>
                               <select class="form-control" id="sel1" name="sbt_imo">
                                    <option>Selecione</option>
                                    <option <?php if($obj_imovel->sb_tp_imovel=='Apartamento Padrão'){echo "selected";} ?>>Apartamento Padrão</option>
                                    <option <?php if($obj_imovel->sb_tp_imovel=='Casa Padrão'){echo "selected";} ?>>Casa Padrão</option>
                                    <option <?php if($obj_imovel->sb_tp_imovel=='Loja/Salão'){echo "selected";} ?>>Loja/Salão</option>
                                    <option <?php if($obj_imovel->sb_tp_imovel=='Sobrado/Duplex'){echo "selected";} ?>>Sobrado/Duplex</option>
                               </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Categoria:</label>
                                <select class="form-control" id="sel1" name="cat">
                                    <option>Selecione</option>
                                    <option <?php if($obj_imovel->categoria=='Padrão'){echo "selected";} ?>>Padrão</option>
                                    <option <?php if($obj_imovel->categoria=='Sobrado/Duplex'){echo "selected";} ?>>Sobrado/Duplex</option>
                                    <option <?php if($obj_imovel->categoria=='Cobertura'){echo "selected";} ?>>Cobertura</option>
                               </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">CEP:</label>
                                <input value = "<?php echo $obj_imovel-> cep ?>" type="text" class="form-control" placeholder="CEP" name="cep" id="cep" required pattern="\d{5}-?\d{3}"  data-mask="99999-999" required data-validation-required-message="Por favor insira o CEP.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Estado:</label>
                                <select class="form-control" id="sel1" name="estado">
                                    <option>Selecione</option>
                                    <option <?php if($obj_imovel->estado=='RS'){echo "selected";} ?>>RS</option>
                                    <option <?php if($obj_imovel->estado=='SC'){echo "selected";} ?>>SC</option>
                                    <option <?php if($obj_imovel->estado=='PR'){echo "selected";} ?>>PR</option>
                               </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Cidade:</label>
                                <select class="form-control" id="sel1" name="cidade">
                                    <option>Selecione</option>
                                    <option <?php if($obj_imovel->cidade=='Porto Alegre'){echo "selected";} ?>>Porto Alegre</option>
                                    <option <?php if($obj_imovel->cidade=='Atlântida'){echo "selected";} ?>>Atlântida</option>
                               </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Bairro:</label>
                                    <input value = "<?php echo $obj_imovel->bairro ?>" type="text" class="form-control" placeholder="Bairro" name="bairro" id="bairro" required data-validation-required-message="Por favor insira o Bairro.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Endereço:</label>
                                <input value = "<?php echo $obj_imovel->endereco ?>" type="text" class="form-control" placeholder="Endereço" name="endereco" id="endereco" required data-validation-required-message="Por favor insira o Endereço.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Número:</label>
                                <input value = "<?php echo $obj_imovel->numero ?>" type="text" class="form-control" placeholder="Número" name="numero" id="numero" required data-validation-required-message="Por favor insira o Número.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Complemento:</label>
                                <input value = "<?php echo $obj_imovel->complemento ?>" type="text" class="form-control" placeholder="Complemento" name="complemento" id="Complemento" required data-validation-required-message="Por favor insira o Complemento.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Descrição da Localização:</label>
                                <textarea value="<?php echo $obj_imovel->descricao ?>" rows="5" class="form-control" placeholder="Descrição da Localização" name="desc_localizacao" id="descricao" required data-validation-required-message="Por favor insira a Descrição da Localização."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Área Útil:</label>
                                <input value="<?php echo $obj_imovel->a_util ?>" type="text" class="form-control" placeholder="Área Útil" name="area_util" id="areautil" required data-validation-required-message="Por favor insira o Área Útil.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Área Total:</label>
                                <input value="<?php echo $obj_imovel->a_total ?>" type="text" class="form-control" placeholder="Área Total" name="area_total" id="areatotal" required data-validation-required-message="Por favor insira o Área Total.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Valor total de venda:</label>
                                <input value="<?php echo $obj_imovel->v_t_venda ?>" type="text" class="form-control" placeholder="Valor total de venda" name="valor_total_venda" id="valortotal" required data-validation-required-message="Por favor insira o Valor total de venda.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Valor de entrada:</label>
                                <input value="<?php echo $obj_imovel->v_entrada ?>" type="text" class="form-control" placeholder="Valor de entrada" name="valor_entrada" id="entrada" required data-validation-required-message="Por favor insira o Valor de entrada.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Mensais a partir de:</label>
                                <input value="<?php echo $obj_imovel->mensais ?>" type="text" class="form-control" placeholder="Mensais a partir de" name="mensais" id="mensais" required data-validation-required-message="Por favor insira as Mensais a partir de.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Condições comerciais:</label>
                                        <label ><input type="checkbox" name="cond[]" id="cond" value="A">Aceita Permuta</label>
                                        <label ><input type="checkbox" name="cond[]" id="cond" value="E">Entrada Facilitada</label>
                                        <label ><input type="checkbox" name="cond[]" id="cond" value="I">Imóvel com dívida</label>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Demais condições comerciais:</label>
                                <textarea value="<?php echo $obj_imovel->d_cond ?>" rows="5" class="form-control" placeholder="Demais condições comerciais" name="demais_cond" id="demaiscond" required data-validation-required-message="Por favor insira as Demais condições comerciais."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Valor do Aluguel:</label>
                                <input value="<?php echo $obj_imovel->v_aluguel ?>" type="text" class="form-control" placeholder="Valor do Aluguel" name="aluguel" id="aluguel" required data-validation-required-message="Por favor insira o Valor do Aluguel.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Diária a partir de:</label>
                                <input value="<?php echo $obj_imovel->diaria ?>" type="text" class="form-control" placeholder="Diária a partir de" name="diaria" id="diaria" required data-validation-required-message="Por favor insira a Diária a partir de.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Isento condomínio:</label>
                                <label class="adminleft" class="radio-inline"><input type="radio" name="optradio" value="Sim" <?php if($obj_imovel->isento=='S'){echo "checked";} ?>>Sim</label>
                                <label class="adminleft" class="radio-inline"><input type="radio" name="optradio" value="Não" <?php if($obj_imovel->isento=='N'){echo "checked";} ?>>Não</label>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Valor do condomínio:</label>
                                <input value="<?php echo $obj_imovel->v_cond ?>" type="text" class="form-control" placeholder="Valor do condomínio" name="valor_cond" id="condominio" required data-validation-required-message="Por favor insira o Valor do condomínio.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Valor do IPTU:</label>
                                <input value="<?php echo $obj_imovel->v_iptu ?>" type="text" class="form-control" placeholder="Valor do IPTU" name="iptu" id="iptu" required data-validation-required-message="Por favor insira o Valor do IPTU.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Nome Empreendimento:</label>
                                <input value="<?php echo $obj_imovel->nm_empr?>" type="text" class="form-control" placeholder="Nome Empreendimento" name="nome" id="nome" required data-validation-required-message="Por favor insira o Nome Empreendimento.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Capacidade de Pessoas:</label>
                                <input value="<?php echo $obj_imovel->capacidade ?>" type="text" class="form-control" placeholder="Capacidade de Pessoas" name="capacidade" id="capacidade" required data-validation-required-message="Por favor insira o Capacidade de Pessoas.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Nº de Andares:</label>
                                <input value="<?php echo $obj_imovel->andares ?>" type="text" class="form-control" placeholder="Nº de Andares" name="andares" id="andares" required data-validation-required-message="Por favor insira o Nº de Andares.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Nº de unidades por andar:</label>
                                <input value="<?php echo $obj_imovel->un_andar ?>" type="text" class="form-control" placeholder="Nº de unidades por andar" name="unidades" id="unidade" required data-validation-required-message="Por favor insira o Nº de unidades por andar.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Nº de elevadores:</label>
                                <input value="<?php echo $obj_imovel->elevadores ?>" type="text" class="form-control" placeholder="Nº de elevadores" name="elevadores" id="elevadores" required data-validation-required-message="Por favor insira o Nº de elevadores.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Nº de banheiros:</label>
                                <input value="<?php echo $obj_imovel->banheiros ?>" type="text" class="form-control" placeholder="Nº de banheiros" name="banheiros" id="banheiros" required data-validation-required-message="Por favor insira o Nº de banheiros.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Nº de salas:</label>
                                <input value="<?php echo $obj_imovel->salas ?>" type="text" class="form-control" placeholder="Nº de salas" name="salas" id="salas" required data-validation-required-message="Por favor insira o Nº de salas.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Quartos/Dts:</label>
                                <input value="<?php echo $obj_imovel->quartos ?>" type="text" class="form-control" placeholder="Quartos/Dts" name="quartos" id="quartos" required data-validation-required-message="Por favor insira o Quartos/Dts.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Suítes:</label>
                                <input value="<?php echo $obj_imovel->suites ?>" type="text" class="form-control" placeholder="Suítes" name="suites" id="suites" required data-validation-required-message="Por favor insira as Suítes.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Vagas na Garagem:</label>
                                <input value="<?php echo $obj_imovel->garagens ?>" type="text" class="form-control" placeholder="Vagas na Garagem" name="vagas" id="vagas" required data-validation-required-message="Por favor insira as Vagas na Garagem.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Ano construção:</label>
                                <input value="<?php echo $obj_imovel->ano_contrucao ?>" type="text" class="form-control" placeholder="Ano construção" name="ano" id="ano" required data-validation-required-message="Por favor insira o Ano construção.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">ZAP:</label>
                                <input value="<?php echo $obj_imovel->zap ?>" type="text" class="form-control" placeholder="ZAP" name="zap" id="zap" required data-validation-required-message="Por favor insira o ZAP do imóvel.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Texto do Anúncio:</label>
                                <textarea rows="5" class="form-control" placeholder="Texto do Anúncio" name="texto" id="texto" required data-validation-required-message="Por favor insira seu Texto do Anúncio."><?php echo($obj_imovel->texto); ?></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
            
                        
                            <fieldset class="group">
                                <legend>Caracteristicas do Imóvel</legend>
                                <ul class="checkbox">
                                <li><label><input type="checkbox" name="AndarInteiro" id="AndarInteiro" value="Andar Inteiro" <?php if(!empty($obj_caracteristicas->AndarInteiro)){echo "checked";} ?>>Andar Inteiro</label></li>

                                <li><label><input type="checkbox" name="ArCondicionado" id="ArCondicionado" value="Ar Condicionado" <?php if(!empty($obj_caracteristicas->ArCondicionado)){echo "checked";} ?>>Ar Condicionado</label></li>

                                <li><label><input type="checkbox" name="ArmarioCozinha" id="ArmarioCozinha" value="Armário de Cozinha" <?php if(!empty($obj_caracteristicas->ArmarioCozinha)){echo "checked";} ?>>Armário de Cozinha</label></li>

                                <li><label><input type="checkbox" name="ArmarioEmbutido" id="ArmarioEmbutido" value="Armário Embutido" <?php if(!empty($obj_caracteristicas->ArmarioEmbutido)){echo "checked";} ?>>Armário Embutido</label></li>

                                <li><label><input type="checkbox" name="Closet" id="Closet" value="Closet" <?php if(!empty($obj_caracteristicas->Closet)){echo "checked";} ?>>Closet</label></li>

                                <li><label><input type="checkbox" name="DepositoPrivadonoSubsolo" id="DepositoPrivadonoSubsolo" value="Deposito Privado no Subsolo" <?php if(!empty($obj_caracteristicas->DepositoPrivadonoSubsolo)){echo "checked";} ?>>Deposito Privado no Subsolo</label></li>

                                <li><label><input type="checkbox" name="Despensa" id="Despensa" value="Despensa" <?php if(!empty($obj_caracteristicas->Despensa)){echo "checked";} ?>>Despensa:</label></li>

                                <li><label><input type="checkbox" name="Escritório" id="Escritorio" value="Escritório" <?php if(!empty($obj_caracteristicas->Escritorio)){echo "checked";} ?>>Escritório</label></li>

                                <li><label><input type="checkbox" name="EstudaPermuta" id="EstudaPermuta" value="Estuda Permuta"<?php if(!empty($obj_caracteristicas->EstudaPermuta)){echo "checked";} ?>>Estuda Permuta</label></li>

                                <li><label><input type="checkbox" name="Lareira" id="Lareira" value="Lareira" <?php if(!empty($obj_caracteristicas->Lareira)){echo "checked";} ?>>Lareira</label></li>

                                <li><label><input type="checkbox" name="Lavabo" id="Lavabo" value="Lavabo" <?php if(!empty($obj_caracteristicas->Lavabo)){echo "checked";} ?>>Lavabo</label></li>

                                <li><label><input type="checkbox" name="MeioAndar" id="MeioAndar" value="Meio Andar" <?php if(!empty($obj_caracteristicas->MeioAndar)){echo "checked";} ?>>Meio Andar</label></li>

                                <li><label><input type="checkbox" name="Mobiliado" id="Mobiliado" value="Mobiliado" <?php if(!empty($obj_caracteristicas->Mobiliado)){echo "checked";} ?>>Mobiliado</label></li>

                                <li><label><input type="checkbox" name="QuartoWCEmpregada" id="QuartoWCEmpregada" value="Quarto/WC Empregada" <?php if(!empty($obj_caracteristicas->QuartoWCEmpregada)){echo "checked";} ?>>Quarto/WC Empregada</label></li>

                                <li><label><input type="checkbox" name="SalaAlmoco" id="SalaAlmoco" value="Sala de Almoço" <?php if(!empty($obj_caracteristicas->SalaAlmoco)){echo "checked";} ?>>Sala de Almoço</label></li>

                                <li><label><input type="checkbox" name="SalaJantar" id="SalaJantar" value="Sala de Jantar" <?php if(!empty($obj_caracteristicas->SalaJantar)){echo "checked";} ?>>Sala de Jantar</label></li>

                                <li><label><input type="checkbox" name="Varanda" id="Varanda" value="Varanda" <?php if(!empty($obj_caracteristicas->Varanda)){echo "checked";} ?>>Varanda</label></li>

                                <li><label><input type="checkbox" name="WCEmpregada" id="WCEmpregada" value="WC Empregada" <?php if(!empty($obj_caracteristicas->WCEmpregada)){echo "checked";} ?>>WC Empregada</label></li>

                                <li><label><input type="checkbox" name="PisoElevado" id="PisoElevado" value="Piso Elevado" <?php if(!empty($obj_caracteristicas->PisoElevado)){echo "checked";} ?>>Piso Elevado</label></li>
                                </ul>
                            </fieldset>
            
                        
                            <fieldset class="group">
                                <legend>Caracteristicas da Área Comum:</legend>
                                <ul class="checkbox">
                                <li><label><input type="checkbox" name="CampodeFutebol" id="CampodeFutebol" value="Campo de Futebol" <?php if(!empty($obj_caracteristicas->CampodeFutebol)){echo "checked";} ?>>Campo de Futebol</label></li>

                                <li><label><input type="checkbox" name="ChildrenCare" id="ChildrenCare" value="Children Care" <?php if(!empty($obj_caracteristicas->ChildrenCare)){echo "checked";} ?>>Children Care</label></li>

                                <li><label><input type="checkbox" name="Churrasqueira" id="Churrasqueira" value="Churrasqueira" <?php if(!empty($obj_caracteristicas->Churrasqueira)){echo "checked";} ?>>Churrasqueira</label></li>

                                <li><label><input type="checkbox" name="Copa" id="Copa" value="Copa" <?php if(!empty($obj_caracteristicas->Copa)){echo "checked";} ?>>Copa</label></li>

                                <li><label><input type="checkbox" name="EntradadeCaminhoes" id="EntradadeCaminhoes" value="Entrada de Caminhões" <?php if(!empty($obj_caracteristicas->EntradadeCaminhoes)){echo "checked";} ?>>Entrada de Caminhões</label></li>

                                <li><label><input type="checkbox" name="Esquina" id="Esquina" value="Esquina" <?php if(!empty($obj_caracteristicas->Esquina)){echo "checked";} ?>>Esquina</label></li>

                                <li><label><input type="checkbox" name="EstacionamentoVisitante" id="EstacionamentoVisitante" value="Estacionamento Visitante" <?php if(!empty($obj_caracteristicas->EstacionamentoVisitante)){echo "checked";} ?>>Estacionamento Visitante:</label></li>

                                <li><label><input type="checkbox" name="Frenteparaomar" id="Frenteparaomar" value="Frente para o mar" <?php if(!empty($obj_caracteristicas->Frenteparaomar)){echo "checked";} ?>>Frente para o mar</label></li>

                                <li><label><input type="checkbox" name="Hidromassagem" id="Hidromassagem" value="Hidromassagem" <?php if(!empty($obj_caracteristicas->Hidromassagem)){echo "checked";} ?>>Hidromassagem</label></li>

                                <li><label><input type="checkbox" name="Piscina" id="Piscina" value="Piscina" <?php if(!empty($obj_caracteristicas->Piscina)){echo "checked";} ?>>Piscina</label></li>

                                <li><label><input type="checkbox" name="Playground" id="Playground" value="Playground" <?php if(!empty($obj_caracteristicas->Playground)){echo "checked";} ?>>Playground</label></li>

                                <li><label><input type="checkbox" name="QuadradeSquash" id="QuadradeSquash" value="Quadra de Squash" <?php if(!empty($obj_caracteristicas->QuadradeSquash)){echo "checked";} ?>>Quadra de Squash</label></li>

                                <li><label><input type="checkbox" name="QuadradeTenis" id="QuadradeTenis" value="Quadra de Tênis" <?php if(!empty($obj_caracteristicas->QuadradeTenis)){echo "checked";} ?>>Quadra de Tênis</label></li>

                                <li><label><input type="checkbox" name="QuadraPoliesportiva" id="QuadraPoliesportiva" value="Quadra Poliesportiva" <?php if(!empty($obj_caracteristicas->QuadraPoliesportiva)){echo "checked";} ?>>Quadra Poliesportiva</label></li>

                                <li><label><input type="checkbox" name="SaladeGinastica" id="SaladeGinastica" value="Sala de Ginástica" <?php if(!empty($obj_caracteristicas->SaladeGinastica)){echo "checked";} ?>>Sala de Ginástica</label></li>

                                <li><label><input type="checkbox" name="SalaodeFestas" id="SalaodeFestas" value="Salão de Festas" <?php if(!empty($obj_caracteristicas->SalaodeFestas)){echo "checked";} ?>>Salão de Festas</label></li>

                                <li><label><input type="checkbox" name="SalaodeJogos" id="SalaodeJogos" value="Salão de Jogos" <?php if(!empty($obj_caracteristicas->SalaodeJogos)){echo "checked";} ?>>Salão de Jogos</label></li>

                                <li><label><input type="checkbox" name="Sauna" id="Sauna" value="Sauna" <?php if(!empty($obj_caracteristicas->Sauna)){echo "checked";} ?>>Sauna</label></li>

                                <li><label><input type="checkbox" name="Vestiario" id="Vestiario" value="Vestiário" <?php if(!empty($obj_caracteristicas->Vestiario)){echo "checked";} ?>>Vestiário</label></li>
                                <ul>
                            </fieldset>
            
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Status:</label>
                                <select class="form-control" id="sel1" name="status">
                                    <option>Selecione</option>
                                    <option <?php if($obj_imovel->status=='Ativo'){echo "selected";} ?>>Ativo</option>
                                    <option <?php if($obj_imovel->status=='Inativo'){echo "selected";} ?>>Inativo</option>
                               </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <!--
                        <div class="row control-group">
                            <div class="adminform_row_contact">
                                <label class="adminleft">Anexar Fotos:</label>
                                <input type="file" name="files[]" id="files" multiple>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        -->
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" value="upload" class="btn btn-success btn-lg">Atualizar</button>
                            </div>
                        </div>
                    </form>
    </div>
  </div>
  <!-- end of main_content -->
  <?php
        include "footer.php";
      ?>
</div>
<!-- end of main_container -->
</body>
</html>
