<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
    include "head.php";
  ?>
<body link="#05619b" vlink="#05619b" alink="#05619b">
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
      <div class="title">Venda</div>
      <?php
        require "db-conection.php";
        $result = mysqli_query($conexao,utf8_encode("SELECT * FROM imoveis WHERE transacao = 'Venda'")) or die(mysql_error());
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
      <div>
        <img src="images/baner2.jpg" width="700" height="150" alt="" border="0" />
      </div>
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
