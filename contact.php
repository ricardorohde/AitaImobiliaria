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
    <?php
          include "colum2.php";
    ?>
    <!-- end of column two -->
    <?php
          include "colum3.php";
    ?>
    <!-- end of column three -->
    <div class="column4">
      <div class="title">Contato</div>
      <div class="contact_tab">
        <div class="form_contact">
          <div class="form_row_contact">
            <label class="left">Nome: </label>
            <input type="text" class="form_input_contact"/>
          </div>
          <div class="form_row_contact">
            <label class="left">Email: </label>
            <input type="text" class="form_input_contact"/>
          </div>
          <div class="form_row_contact">
            <label class="left">Telefone: </label>
            <input type="text" class="form_input_contact"/>
          </div>
          <div class="form_row_contact">
            <label class="left">Estado: </label>
            <input type="text" class="form_input_contact"/>
          </div>
          <div class="form_row_contact">
            <label class="left">Mensagem: </label>
            <textarea name="" rows="" cols="" ></textarea>
          </div>
          <div style="float:right; padding:10px 25px 0 0;">
            <input type="image" src="images/send.gif"/>
          </div>
        </div>
        <div class="location_contact"> <img src="images/map.gif" width="159" height="157" border="0" alt="" /> </div>
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
