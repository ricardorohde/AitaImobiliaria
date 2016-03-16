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
    <div class="column4">
      <div class="title">Aluguel</div>
      <?php
        require "db-conection.php";

        $precoinicial = $_POST['precoinicial'];
        $precofinal = $_POST['precofinal'];
        $quartos = $_POST['quartos'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $optradio = $_POST['optradio'];
      
        
        if ($optradio = "Locação" || $optradio = "Locação por Temporada") {
          $result = mysqli_query($conexao,utf8_encode("SELECT * FROM imoveis WHERE estado = $estado AND cidade = $cidade AND transacao = $optradio AND quartos = $quartos AND v_aluguel>= $precoinicial AND v_aluguel<= precofinal ")) or die(mysql_error());  
        }else{
          $result = mysqli_query($conexao,utf8_encode("SELECT * FROM imoveis WHERE estado = $estado AND cidade = $cidade AND transacao = $optradio AND quartos = $quartos AND v_t_venda>= $precoinicial  AND v_t_venda <= precofinal   ")) or die(mysql_error());
        }
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
          $id = $row["id"];
          $result_imagem = mysqli_query($conexao,utf8_encode("SELECT * FROM  imagens_imo WHERE imo = $id AND name LIKE '00%' LIMIT 1 ")) or die(mysql_error());
          $obj = mysqli_fetch_array($result_imagem,MYSQLI_ASSOC);
      ?>
      <div class="offer_box_wide"> 
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
      <div class="pagination"> <span class="disabled"><<</span><span class="current">1</span><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><a href="#">6</a><a href="#">7</a>…<a href="#">10</a><a href="#">11</a><a href="#">>></a> </div>
    </div>
    <!-- end of column four -->
  </div>
  <!-- end of main_content -->
  <?php
        include "footer.php";
      ?>
</div>
<!-- end of main_container -->
</body>
</html>
