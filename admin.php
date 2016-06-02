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
      <div class="admin_index_title">Gerenciador de Ofertas</div>
      <div class="right_buttons">
        <div class="right_button"><a href="dash.php">Adicionar Oferta</a></div>
        <div class="right_button"><a href="#">Deletar Oferta</a></div>
      </div>
    </div>
    <div id="admin_header_border"></div>
    <div id="admin_search_tab">
      <label class="search" style="padding-top:3px;">Buscar uma oferta: </label>
      <label class="search">
      <input type="text" name="search" class="search_input" />
      </label>
      <label class="search"><a href="#"><img src="images/adminicons/search.png" alt="" border="0" /></a> </label>
    </div>
    <div class="table_grid">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <th style="width:10px;">Seleção</th>
          <th style="width:10px;"><a href="#" class="pink">Status</a></th>
          <th style="width:50px;"><a href="#" class="pink">Fotos</a></th>
          <th style="width:10px;"><a href="#" class="pink">ID</a></th>
          <th style="width:auto;"><a href="#" class="pink">Título</a></th>
          <th style="width:auto;"><a href="#" class="pink">Descrição</a></th>
          <th style="width:20px;"><a href="#" class="pink">Transação</a></th>
          <th style="width:50px;"><a href="#" class="pink">SubTipo</a></th>
          <th style="width:50px;"><a href="#" class="pink">Bairro</a></th>
          <th style="width:50px;"><a href="#" class="pink">Preço</a></th>
          <th style="width:10px;"><a href="#" class="pink">Editar</a></th>
          <th style="width:10px;"><a href="#" class="pink">Deletar</a></th>
        </tr>
        <?php
			require "db-conection.php";
			$count = 0;
			$result = mysqli_query($conexao,"SELECT * FROM imoveis") or die(mysql_error());
			while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
				$id = $row["id"];
				$result_imagem = mysqli_query($conexao,"SELECT * FROM  imagens_imo WHERE imo = $id AND name LIKE '00%' LIMIT 1 ") or die(mysql_error());
				$obj = mysqli_fetch_array($result_imagem,MYSQLI_ASSOC);
          
				if($count%2){
					echo '<tr class="even">';
				}else{
					echo '<tr class="odd">';
				}
        ?>
        <!-- Imóveis -->
          <td><input type="checkbox" name="checkbox" /></td>
          <td><?php echo ($row["status"]) ?></td>
          <td><a href="admindetails.php?idimo=<?php echo $row["id"]; ?>"><img alt="" src="<?php echo $obj["dir"].'/'.$obj["name"] ?>" width="53" height="39" border="0" /></a></td>
          <td><?php echo ($row["id"]) ?></td>
          <td><?php
              
              if(!empty($row["nm_empr"])){
                echo($row["nm_empr"]);
              }else{
                echo ($row["tp_imovel"]." ".$row["endereco"]);
              }
            ?>
			</td>
          <td><?php echo (substr($row["texto"], 0,140)) ?></td>
          <td>
            <?php 
              //if(!empty(($row["transacao"]))){
                //echo ($row["transacao"]); 
                //}
              //if(!empty(($row["transacao1"]))){
                //echo ",";
                //echo "<br>";
                //echo ($row["transacao1"]); 
                //}
              //if(!empty(($row["transacao2"]))){
                //echo ",";
                //echo "<br>";
                //echo ($row["transacao2"]); 
                //}
            ?>
          </td>
          <td><?php echo ($row["sb_tp_imovel"]) ?></td>
          <td><?php echo ($row["bairro"]) ?></td>
          <td><strong><?php 
                  setlocale(LC_MONETARY,"pt_BR", "ptb");

                  if($row["transacao"] == 'Aluguel'||$row["transacao2"] == 'Aluguel Temporada'){ 
                    echo (money_format('%n', $row["v_aluguel"]));
                  }else if($row["transacao1"] == 'Venda'){ 
                    echo (money_format('%n', $row["v_t_venda"]));
                  }
                ?></strong></td>
          <td><a href="dash_upload.php?idimo=<?php echo $row["id"]; ?>"><img alt="" src="images/adminicons/edit.png" width="22" height="22" border="0" /></a></td>
          <td><a href="admindelete.php?idimo=<?php echo $row["id"]; ?>"><img alt="" src="images/adminicons/delete.png" width="24" height="24" border="0" /></a></td>
        </tr>
        <!-- End Imoveis-->
        <?php
          $count += 1;
          }
        ?>
      </table>
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
