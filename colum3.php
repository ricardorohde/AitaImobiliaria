<div class="column3">
      <div class="small_title">
        Imóveis mais Acessados
      </div>
      <?php
        require "db-conection.php";
        $result_imoveis = mysqli_query($conexao,"SELECT * FROM imoveis ORDER BY imoveis.click DESC LIMIT 3 ") or die(mysql_error());
        while($row = mysqli_fetch_array($result_imoveis,MYSQLI_ASSOC)){
         $id = $row["id"];
          $result_imagem = mysqli_query($conexao,"SELECT * FROM  imagens_imo WHERE imo = $id LIMIT 1 ") or die(mysql_error());
          $obj = mysqli_fetch_array($result_imagem,MYSQLI_ASSOC);
      ?>
      <div class="offer_box"> 
        <a href="imovel.php?idimo=<?php echo $row["id"] ?>">
          <img src="<?php echo $obj["dir"].'/'.$obj["name"] ?>" width="130" height="98" class="img_left" alt="" border="0" />
        </a>
        <div class="offer_info"> 
          <span>
            <?php
              if(!empty($row["nm_empr"])){
                echo($row["nm_empr"]);
              }else{
                echo ($row["tp_imovel"]." ".$row["endereco"]." ".$row["numero"]." ".$row["complemento"]);
              }
            ?>
          </span>
          <p class="offer"> 
            &quot;<?php echo (substr($row["texto"], 0,140)) ?>.&quot; 
          </p>
          <div class="more">
            <a href="imovel.php?idimo=<?php echo $row["id"] ?>">
              ...mais
            </a>
          </div>
        </div>
      </div>
      <?php
        }
      ?>
    </div>