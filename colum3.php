<div class="column3">
      <div class="small_title">
        Imóveis mais Acessados
      </div>
      <?php
        require "db-conection.php";
        $result_imoveis = mysqli_query($conexao,"SELECT * FROM imoveis WHERE status = 'Ativo' ORDER BY imoveis.click DESC LIMIT 3 ") or die(mysql_error());
        while($row = mysqli_fetch_array($result_imoveis,MYSQLI_ASSOC)){
         $id = $row["id"];
          $result_imagem = mysqli_query($conexao,"SELECT * FROM  imagens_imo WHERE imo = $id AND name LIKE '00%' LIMIT 1 ") or die(mysql_error());
          $obj = mysqli_fetch_array($result_imagem,MYSQLI_ASSOC);
      ?>
      <div class="offer_box"> 
        <a href="imovel.php?idimo=<?php echo $row["id"]; ?>">
          <img src="<?php echo $obj["dir"].'/'.$obj["name"] ?>" width="130" height="98" class="img_left" alt="" border="0" />
        </a>
        <div class="offer_info"> 
          <span>
            <a href="imovel.php?idimo=<?php echo $row["id"]; ?>">
            <?php
              if(!empty($row["nm_empr"])){
                echo($row["nm_empr"]);
              }else{
                echo ($row["tp_imovel"]." ".$row["endereco"]);
              }
            ?>
            </a>
          </span>
          <p class="offer"> 
            &quot;<?php echo (substr($row["texto"], 0,140)) ?>.&quot; 
          </p>
          
        </div>
      </div>
      <?php
        }
      ?>
    </div>