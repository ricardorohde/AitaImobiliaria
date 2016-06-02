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
    <div class="admin_login">
      <div class="left_box">
        <div class="top_left_box"> </div>
        <div class="center_left_box">
          <div class="box_title"><span>Acesso</span> Painel de Controle</div>
          <form method="post" action="login.php">
    <div>
      <input type="text" name="usuario" placeholder="Usuário">
    </div>
    <div class="form-group">
      <input type="password"  name="senha" placeholder="Senha">
    </div>
    <button type="submit">Acessar</button>
</form>
        </div>
      </div>
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

