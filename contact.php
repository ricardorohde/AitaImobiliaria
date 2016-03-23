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
          if(!empty($_GET)){
            $assunto = $_GET['iassunto'];
          }
          
    ?>

    <div class="column4">
      <div class="title">Contato</div>
      <div class="contact_tab">
        <form class="form_contact" action="contact_me.php" name="envmen" enctype="multipart/form-data" method="post" id="imocont" novalidate>
          <div class="form_row_contact">
            <label class="left">Nome: </label>
            <input type="text" class="form_input_contact" name="nome" id="nome"/>
          </div>
          <div class="form_row_contact">
            <label class="left">Email: </label>
            <input type="text" class="form_input_contact" name="email" id="email"/>
          </div>
          <div class="form_row_contact">
            <label class="left">Telefone: </label>
            <input type="text" class="form_input_contact" name="telefone" id="telefone"/>
          </div>
          <div class="form_row_contact">
            <label class="left">Estado: </label>
            <input type="text" class="form_input_contact" name="estado" id="estado"/>
          </div>
          <div class="form_row_contact">
            <label class="left">Cidade: </label>
            <input type="text" class="form_input_contact" name="cidade" id="cidade"/>
          </div>
          <div class="form_row_contact">
            <label class="left">Assunto: </label>
            <?php
              if (empty($_GET['iassunto'])) {
                
                echo('<input type="text" class="form_input_contact" name="assunto" id="assunto"/>');
              }else{

                echo('<input type="text" class="form_input_contact" name="assunto" id="assunto" value="' .$assunto.'"/>');
              }
            ?>
          </div>
          <div class="form_row_contact">
            <label class="left">Mensagem: </label>
            <textarea name="mensagem" rows="" cols="" id="mensagem"></textarea>
          </div>
          <div style="float:right; padding:10px 25px 0 0;">
            <button type="submit" value="upload" class="btn btn-success btn-lg">Enviar</button>
          </div>
        </form>
        <div class="location_contact"> <img src="images/fale.jpg" width="250" height="250" border="0" alt="" /> </div>
      </div>
    </br>
    </br>
    </br>
    </br>
    </br>
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
