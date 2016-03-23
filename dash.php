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
    <div id="admin_header">
      <div class="admin_addoffer_title">Adicionar Imóvel</div>
      <div class="right_buttons">
        <div class="right_button"><a href="index.php">Voltar Home</a></div>
      </div>
    </div>
    <div id="admin_header_border"></div>
    <div class="add_tab">
      <form action="upload-imo.php" name="registreimo" enctype="multipart/form-data" method="post" id="imoForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Transação</label>
                                 <label class="checkbox-inline"><input type="checkbox" name="trans[]" id="trans" value="Venda">Venda</label>
                                 <label class="checkbox-inline"><input type="checkbox" name="trans[]" id="trans" value="Locação">Locação</label>
                                 <label class="checkbox-inline"><input type="checkbox" name="trans[]" id="trans" value="Locação Temporada">Locação Temporada</label>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Tipo de Imóvel</label>
                                <select class="form-control" id="sel1" name="t_imo">
                                    <option>Selecione</option>
                                    <option>Apartamento</option>
                                    <option>Kitchenette/Conjugado</option>
                                    <option>Loft</option>
                                    <option>Studio</option>
                                    <option>Casa padrão</option>
                                    <option>Terreno padrão</option>
                                    <option>Box/Garagem</option>
                                    <option>Casa comercial</option>
                                    <option>Casa condomínio</option>
                                    <option>Casa de vila</option>
                                    <option>Chácara</option>
                                    <option>Conjunto comercial</option>
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
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Subtipo de Imóvel</label>
                               <select class="form-control" id="sel1" name="sbt_imo">
                                    <option>Selecione</option>
                                    <option>Apartamento Padrão</option>
                                    <option>Casa Padrão</option>
                                    <option>Loja/Salão</option>
                                    <option>Sobrado/Duplex</option>
                               </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Categoria</label>
                                <select class="form-control" id="sel1" name="cat">
                                    <option>Selecione</option>
                                    <option>Padrão</option>
                                    <option>Sobrado/Duplex</option>
                                    <option>Cobertura</option>
                               </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>CEP</label>
                                <input type="text" class="form-control" placeholder="CEP" name="cep" id="cep" required pattern="\d{5}-?\d{3}"  data-mask="99999-999" required data-validation-required-message="Por favor insira o CEP.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Estado</label>
                                <select class="form-control" id="sel1" name="estado">
                                    <option>Selecione</option>
                                    <option>RS</option>
                                    <option>SC</option>
                                    <option>PR</option>
                               </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Cidade</label>
                                <select class="form-control" id="sel1" name="cidade">
                                    <option>Selecione</option>
                                    <option>Porto Alegre</option>
                                    <option>Atlântida</option>
                               </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Bairro</label>
                                    <input type="text" class="form-control" placeholder="Bairro" name="bairro" id="bairro" required data-validation-required-message="Por favor insira o Bairro.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Endereço</label>
                                <input type="text" class="form-control" placeholder="Endereço" name="endereco" id="endereco" required data-validation-required-message="Por favor insira o Endereço.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Número</label>
                                <input type="text" class="form-control" placeholder="Número" name="numero" id="numero" required data-validation-required-message="Por favor insira o Número.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Complemento</label>
                                <input type="text" class="form-control" placeholder="Complemento" name="complemento" id="Complemento" required data-validation-required-message="Por favor insira o Complemento.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Descrição da Localização</label>
                                <textarea rows="5" class="form-control" placeholder="Descrição da Localização" name="desc_localizacao" id="descricao" required data-validation-required-message="Por favor insira a Descrição da Localização."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Área Útil</label>
                                <input type="text" class="form-control" placeholder="Área Útil" name="area_util" id="areautil" required data-validation-required-message="Por favor insira o Área Útil.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Área Total</label>
                                <input type="text" class="form-control" placeholder="Área Total" name="area_total" id="areatotal" required data-validation-required-message="Por favor insira o Área Total.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Valor total de venda</label>
                                <input type="text" class="form-control" placeholder="Valor total de venda" name="valor_total_venda" id="valortotal" required data-validation-required-message="Por favor insira o Valor total de venda.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Valor de entrada</label>
                                <input type="text" class="form-control" placeholder="Valor de entrada" name="valor_entrada" id="entrada" required data-validation-required-message="Por favor insira o Valor de entrada.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mensais a partir de</label>
                                <input type="text" class="form-control" placeholder="Mensais a partir de" name="mensais" id="mensais" required data-validation-required-message="Por favor insira as Mensais a partir de.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Condições comerciais</label>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="cond[]" id="cond" value="A">Aceita Permuta</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="cond[]" id="cond" value="E">Entrada Facilitada</label>
                                    </div>
                                    <div class="checkbox disabled">
                                        <label><input type="checkbox" name="cond[]" id="cond" value="I">Imóvel com dívida</label>
                                    </div>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Demais condições comerciais</label>
                                <textarea rows="5" class="form-control" placeholder="Demais condições comerciais" name="demais_cond" id="demaiscond" required data-validation-required-message="Por favor insira as Demais condições comerciais."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Valor do Aluguel</label>
                                <input type="text" class="form-control" placeholder="Valor do Aluguel" name="aluguel" id="aluguel" required data-validation-required-message="Por favor insira o Valor do Aluguel.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Diária a partir de</label>
                                <input type="text" class="form-control" placeholder="Diária a partir de" name="diaria" id="diaria" required data-validation-required-message="Por favor insira a Diária a partir de.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Isento condomínio</label>
                                <label class="radio-inline"><input type="radio" name="optradio" value="Sim">Sim</label>
                                <label class="radio-inline"><input type="radio" name="optradio" value="Não">Não</label>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Valor do condomínio</label>
                                <input type="text" class="form-control" placeholder="Valor do condomínio" name="valor_cond" id="condominio" required data-validation-required-message="Por favor insira o Valor do condomínio.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Valor do IPTU</label>
                                <input type="text" class="form-control" placeholder="Valor do IPTU" name="iptu" id="iptu" required data-validation-required-message="Por favor insira o Valor do IPTU.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nome Empreendimento</label>
                                <input type="text" class="form-control" placeholder="Nome Empreendimento" name="nome" id="nome" required data-validation-required-message="Por favor insira o Nome Empreendimento.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Capacidade de Pessoas</label>
                                <input type="text" class="form-control" placeholder="Capacidade de Pessoas" name="capacidade" id="capacidade" required data-validation-required-message="Por favor insira o Capacidade de Pessoas.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nº de Andares</label>
                                <input type="text" class="form-control" placeholder="Nº de Andares" name="andares" id="andares" required data-validation-required-message="Por favor insira o Nº de Andares.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nº de unidades por andar</label>
                                <input type="text" class="form-control" placeholder="Nº de unidades por andar" name="unidades" id="unidade" required data-validation-required-message="Por favor insira o Nº de unidades por andar.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nº de elevadores</label>
                                <input type="text" class="form-control" placeholder="Nº de elevadores" name="elevadores" id="elevadores" required data-validation-required-message="Por favor insira o Nº de elevadores.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nº de banheiros</label>
                                <input type="text" class="form-control" placeholder="Nº de banheiros" name="banheiros" id="banheiros" required data-validation-required-message="Por favor insira o Nº de banheiros.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nº de salas</label>
                                <input type="text" class="form-control" placeholder="Nº de salas" name="salas" id="salas" required data-validation-required-message="Por favor insira o Nº de salas.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Quartos/Dts</label>
                                <input type="text" class="form-control" placeholder="Quartos/Dts" name="quartos" id="quartos" required data-validation-required-message="Por favor insira o Quartos/Dts.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Suítes</label>
                                <input type="text" class="form-control" placeholder="Suítes" name="suites" id="suites" required data-validation-required-message="Por favor insira as Suítes.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Vagas na Garagem</label>
                                <input type="text" class="form-control" placeholder="Vagas na Garagem" name="vagas" id="vagas" required data-validation-required-message="Por favor insira as Vagas na Garagem.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Ano construção</label>
                                <input type="text" class="form-control" placeholder="Ano construção" name="ano" id="ano" required data-validation-required-message="Por favor insira o Ano construção.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>ZAP</label>
                                <input type="text" class="form-control" placeholder="ZAP" name="zap" id="zap" required data-validation-required-message="Por favor insira o ZAP do imóvel.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Texto do Anúncio</label>
                                <textarea rows="5" class="form-control" placeholder="Texto do Anúncio" name="texto" id="texto" required data-validation-required-message="Por favor insira seu Texto do Anúncio."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
            
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Caracteristicas do Imóvel</label>
                                <label class="checkbox-inline"><input type="checkbox" name="AndarInteiro" id="AndarInteiro" value="Andar Inteiro">Andar Inteiro</label>
                                <label class="checkbox-inline"><input type="checkbox" name="ArCondicionado" id="ArCondicionado" value="Ar Condicionado">Ar Condicionado</label>
                                <label class="checkbox-inline"><input type="checkbox" name="ArmarioCozinha" id="ArmarioCozinha" value="Armário de Cozinha">Armário de Cozinha</label>
                                <label class="checkbox-inline"><input type="checkbox" name="ArmarioEmbutido" id="ArmarioEmbutido" value="Armário Embutido">Armário Embutido</label>
                                <label class="checkbox-inline"><input type="checkbox" name="Closet" id="Closet" value="Closet">Closet</label>
                                <label class="checkbox-inline"><input type="checkbox" name="DepositoPrivadonoSubsolo" id="DepositoPrivadonoSubsolo" value="Deposito Privado no Subsolo">Deposito Privado no Subsolo</label>
                                <label class="checkbox-inline"><input type="checkbox" name="Despensa" id="Despensa" value="Despensa">Despensa</label>
                                <label class="checkbox-inline"><input type="checkbox" name="Escritório" id="Escritorio" value="Escritório">Escritório</label>
                                <label class="checkbox-inline"><input type="checkbox" name="EstudaPermuta" id="EstudaPermuta" value="Estuda Permuta">Estuda Permuta</label>
                                <label class="checkbox-inline"><input type="checkbox" name="Lareira" id="Lareira" value="Lareira">Lareira</label>
                                <label class="checkbox-inline"><input type="checkbox" name="Lavabo" id="Lavabo" value="Lavabo">Lavabo</label>
                                <label class="checkbox-inline"><input type="checkbox" name="MeioAndar" id="MeioAndar" value="Meio Andar">Meio Andar</label>
                                <label class="checkbox-inline"><input type="checkbox" name="Mobiliado" id="Mobiliado" value="Mobiliado">Mobiliado</label>
                                <label class="checkbox-inline"><input type="checkbox" name="QuartoWCEmpregada" id="QuartoWCEmpregada" value="Quarto/WC Empregada">Quarto/WC Empregada</label>
                                <label class="checkbox-inline"><input type="checkbox" name="SalaAlmoco" id="SalaAlmoco" value="Sala de Almoço">Sala de Almoço</label>
                                <label class="checkbox-inline"><input type="checkbox" name="SalaJantar" id="SalaJantar" value="Sala de Jantar">Sala de Jantar</label>
                                <label class="checkbox-inline"><input type="checkbox" name="Varanda" id="Varanda" value="Varanda">Varanda</label>
                                <label class="checkbox-inline"><input type="checkbox" name="WCEmpregada" id="WCEmpregada" value="WC Empregada">WC Empregada</label>
                                <label class="checkbox-inline"><input type="checkbox" name="PisoElevado" id="PisoElevado" value="Piso Elevado">Piso Elevado</label>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
            
            <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Caracteristicas da Área Comum</label>
                                <label class="checkbox-inline"><input type="checkbox" name="CampodeFutebol" id="CampodeFutebol" value="Campo de Futebol">Campo de Futebol</label>
                                <label class="checkbox-inline"><input type="checkbox" name="Children Care" id="ChildrenCare" value="Children Care">Children Care</label>
                                <label class="checkbox-inline"><input type="checkbox" name="Churrasqueira" id="Churrasqueira" value="Churrasqueira">Churrasqueira</label>
                                <label class="checkbox-inline"><input type="checkbox" name="Copa" id="Copa" value="Copa">Copa</label>
                                <label class="checkbox-inline"><input type="checkbox" name="EntradadeCaminhoes" id="EntradadeCaminhoes" value="Entrada de Caminhões">Entrada de Caminhões</label>
                                <label class="checkbox-inline"><input type="checkbox" name="Esquina" id="Esquina" value="Esquina">Esquina</label>
                                <label class="checkbox-inline"><input type="checkbox" name="EstacionamentoVisitante" id="EstacionamentoVisitante" value="Estacionamento Visitante">Estacionamento Visitante</label>
                                <label class="checkbox-inline"><input type="checkbox" name="Frenteparaomar" id="Frenteparaomar" value="Frente para o mar">Frente para o mar</label>
                                <label class="checkbox-inline"><input type="checkbox" name="Hidromassagem" id="Hidromassagem" value="Hidromassagem">Hidromassagem</label>
                                <label class="checkbox-inline"><input type="checkbox" name="Piscina" id="Piscina" value="Piscina">Piscina</label>
                                <label class="checkbox-inline"><input type="checkbox" name="Playground" id="Playground" value="Playground">Playground</label>
                                <label class="checkbox-inline"><input type="checkbox" name="QuadradeSquash" id="QuadradeSquash" value="Quadra de Squash">Quadra de Squash</label>
                                <label class="checkbox-inline"><input type="checkbox" name="QuadradeTenis" id="QuadradeTenis" value="Quadra de Tênis">Quadra de Tênis</label>
                                <label class="checkbox-inline"><input type="checkbox" name="QuadraPoliesportiva" id="QuadraPoliesportiva" value="Quadra Poliesportiva">Quadra Poliesportiva</label>
                                <label class="checkbox-inline"><input type="checkbox" name="SaladeGinastica" id="SaladeGinastica" value="Sala de Ginástica">Sala de Ginástica</label>
                                <label class="checkbox-inline"><input type="checkbox" name="SalaodeFestas" id="SalaodeFestas" value="Salão de Festas">Salão de Festas</label>
                                <label class="checkbox-inline"><input type="checkbox" name="SalaodeJogos" id="SalaodeJogos" value="Salão de Jogos">Salão de Jogos</label>
                                <label class="checkbox-inline"><input type="checkbox" name="Sauna" id="Sauna" value="Sauna">Sauna</label>
                                <label class="checkbox-inline"><input type="checkbox" name="Vestiario" id="Vestiario" value="Vestiário">Vestiário</label>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
            
            <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Status</label>
                                <select class="form-control" id="sel1" name="status">
                                    <option>Selecione</option>
                                    <option>Ativo</option>
                                    <option>Inativo</option>
                               </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Anexar Fotos</label>
                                <input type="file" name="files[]" id="files" multiple>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" value="upload" class="btn btn-success btn-lg">Cadastrar</button>
                            </div>
                        </div>
                    </form>
    </div>
    <div class="admin_footer_help"> Admin help section here Admin help section here Admin help section here Admin help section here Admin help section here </div>
  </div>
  <!-- end of main_content -->
  <?php
        include "footer.php";
      ?>
</div>
<!-- end of main_container -->
</body>
</html>
