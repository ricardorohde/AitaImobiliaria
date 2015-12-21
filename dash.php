<!DOCTYPE html>
<html>
<?php
	include "header.php";
?>

<body>

    <!-- Navigation -->
    <?php
		include "nav.php";
	?>

    <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <h3>Imagens do Slider</h3>
                    <form action="upload-slider.php" name="registreimo" method="post" id="imoForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Imagem 1 Slider</label>
                                <input type="file" name="file" id="file">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Imagem 2 Slider</label>
                                <input type="file" name="file" id="file">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Imagem 3 Slider</label>
                                <input type="file" name="file" id="file">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                    <h3>Cadastrar Imóvel</h3>
                    <form action="upload-imo.php" name="registreimo" enctype="multipart/form-data" method="post" id="imoForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Código do Anúncio</label>
                                <input type="text" class="form-control" placeholder="Código do Anúncio" id="codanu" required data-validation-required-message="Por favor insira seu nome.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Transação</label>
                                 <label class="checkbox-inline"><input type="checkbox" name="trans[]" id="trans" value="V">Venda</label>
                                 <label class="checkbox-inline"><input type="checkbox" name="trans[]" id="trans" value="L">Locação</label>
                                 <label class="checkbox-inline"><input type="checkbox" name="trans[]" id="trans" value="T">Locação Temporada</label>
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
                               </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Categoria</label>
                                <select class="form-control" id="sel1" name="cat">
                                    <option>Selecione</option>
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
                               </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Cidade</label>
                                <select class="form-control" id="sel1" name="cidade">
                                    <option>Selecione</option>
                               </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Bairro</label>
                                <select class="form-control" id="sel1" name="bairro">
                                    <option>Selecione</option>
                               </select>
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
                                <label class="radio-inline"><input type="radio" name="optradio">Sim</label>
                                <label class="radio-inline"><input type="radio" name="optradio">Não</label>
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
                                <label>Texto do Anúncio</label>
                                <textarea rows="5" class="form-control" placeholder="Texto do Anúncio" name="texto" id="texto" required data-validation-required-message="Por favor insira seu Texto do Anúncio."></textarea>
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
                                <input type="file" name="my_file[]" id="file" multiple>
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
            </div>
			
			<?php
				include "footer.php"
			?>

    </body>
</html>