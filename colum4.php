<div class="column4">
      <div class="title">Imóveis</div>
      <?php
        require "db-conection.php";
        $result = mysqli_query($conexao,"SELECT * FROM imoveis ORDER BY click DESC LIMIT 6") or die(mysql_error());
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
          $id = $row["id"];
          $result_imagem = mysqli_query($conexao,"SELECT * FROM  imagens_imo WHERE imo = $id LIMIT 1 ") or die(mysql_error());
          $obj = mysqli_fetch_array($result_imagem,MYSQLI_ASSOC);
      ?>
      <div class="offer_box_wide"> 
        <a href="imovel.php?idimo=<?php echo $row["id"]; ?>">
          <img src="<?php echo $obj["dir"].'/'.$obj["name"] ?>" width="130" height="98" class="img_left" alt="" border="0" />
        </a>
        <div class="offer_info"> 
          <span>
             <?php
              
              if(!empty($row["nm_empr"])){
                echo($row["nm_empr"]);
              }else{
                echo ($row["tp_imovel"]." ".$row["endereco"]);
              }
            ?>
          </span>
          <p class="offer"> 
            &quot;<?php echo (substr($row["texto"], 0,140)) ?>.&quot; 
          </p>
          <div class="more">
            <a href="imovel.php?idimo=<?php echo $row["id"]; ?>">
              ...mais
            </a>
          </div>
        </div>
      </div>
      <?php
        }
      ?>
    </div>