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
      <div class="title" style="float:left;">
        <div style="float:left;">
          Aluguel
        </div>
        <div style="float:right; font-size:10px;color:#d8325d;padding-top:2px;">
          display: 
          <a href="list2.html">
            <img src="images/list_style3.gif" border="0" />
          </a> 
          <a href="list1.html">
            <img src="images/list_style1.gif" border="0" />
          </a> <a href="list.html">
          <img src="images/list_style2_a.gif" border="0" />
        </a> 
      </div>
      </div>

      <?php
        $count = 0;
        require "db-conection.php";
        $sql_imovel = "SELECT * FROM imoveis WHERE transacao = 'Locação'";
        $sqlformated_imovel = utf8_encode($sql_imovel);
        
        $result = mysqli_query($conexao,$sqlformated_imovel) or die(mysql_error());
        
        $row_cnt = mysqli_num_rows($result);
        
        if($row_cnt>0 ){
          while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $id = $row["id"];
          $result_imagem = mysqli_query($conexao,utf8_encode("SELECT * FROM  imagens_imo WHERE imo = $id LIMIT 1 ")) or die(mysql_error());
          $obj = mysqli_fetch_array($result_imagem,MYSQLI_ASSOC);
      ?>
      <!-- Começa Imóvel Aqui-->
      <div class="offer_box_wide"> 
        <a href="imovel.php?idimo=<?php echo $row["id"] ?>">
          <img src="<?php echo $obj["dir"].'/'.$obj["name"] ?>" width="130" height="98" class="img_left" alt="" border="0"/>
        </a>
        <div class="offer_info"> 
          <span>
            <?php
              echo $row["id"].'-'.$row["nm_empr"]
            ?>
          </span>
          <p class="offer"> 
            <?php echo (utf8_encode(substr($row["texto"], 0,140))) ?> 
          </p>
          <div class="more">
            <a href="imovel.php?idimo=<?php echo $row["id"] ?>">
              ...more
            </a>
          </div>
        </div>
        <?php
        }
      }else{
              echo (utf8_encode("Não existem imóveis cadastrados para esta modalidade"));
            }
    ?>
        <!-- Termina Imóvel Aqui-->
      </div>
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
