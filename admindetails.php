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
        $result_imagens = mysqli_query($conexao,"SELECT * FROM imagens_imo WHERE imo = $idimovel") or die(mysql_error());
        $result_f_m = mysqli_query($conexao,"SELECT * FROM imagens_imo WHERE imo = $idimovel AND name LIKE '00%' LIMIT 1") or die(mysql_error());
        $obj_imovel = mysqli_fetch_object($result_imovel);
      $obj = mysqli_fetch_object($result_f_m);
      ?>
  <div id="main_content">
    <div id="admin_header">
      <div class="admin_details_title">Detalhes</div>
      <div class="right_buttons">
        <div class="right_button"><a href="#">Salvar</a></div>
        <div class="right_button"><a href="#">Voltar</a></div>
      </div>
    </div>
    <div id="admin_header_border"></div>
    <div class="add_tab">
      <div class="form_contact">
        <div class="adminform_row_contact">
          <label class="adminleft">Title: </label>
          <label class="adminright"><?php
                   if(!empty($obj_imovel->nm_empr)){
                    echo $obj_imovel->nm_empr;
                  }
                    else {echo $obj_imovel->tp_imovel." ".$obj_imovel->endereco;}
                ?></label>
        </div>
        <div class="adminform_row_contact">
          <label class="adminleft">Preço: </label>
          <label class="adminright"><?php echo "R$ ";
                  setlocale(LC_MONETARY,"pt_BR", "ptb");

                  if($obj_imovel->transacao == 'Locação'){ 
                    echo (money_format('%n', $obj_imovel->v_aluguel));
                  }else if($obj_imovel->transacao == 'Venda'){ 
                    echo (money_format('%n', $obj_imovel->v_t_venda));
                  }
                ?></label>
        </div>
        <div class="adminform_row_contact">
          <label class="adminleft">Tipo do Imóvel: </label>
          <label class="adminright"><?php echo $obj_imovel->tp_imovel ?></label>
        </div>
        <div class="adminform_row_contact">
          <label class="adminleft">Descrição: </label>
          <label class="adminright"><?php echo ($obj_imovel->texto)?></label>
        </div>
        <div style="float:right; padding:10px 25px 0 0;">
          <div class="right_button"><a href="dash_upload.php?idimo=<?php echo $obj_imovel->id; ?>">Edit this offer</a></div>
        </div>
      </div>
      <div class="details_tab"> <strong>Fotos:</strong><br />
        <br />
        <img src="<?php echo $obj->dir.'/'.$obj->name ?>" width="130" height="98" alt="" /><br />
        <br />
        <strong>Thumbnails:</strong><br />
        <br />
        <?php
        while($obj_imagens = mysqli_fetch_array($result_imagens,MYSQLI_ASSOC)){
          ?>
        <img src="<?php echo $obj_imagens["dir"].'/'.$obj_imagens["name"] ?>" width="104" height="78" alt="" class="img_left" />
        <?php }?>
      </div>
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
