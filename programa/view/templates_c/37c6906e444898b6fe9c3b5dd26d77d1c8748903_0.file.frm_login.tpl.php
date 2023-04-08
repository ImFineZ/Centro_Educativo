<?php
/* Smarty version 4.3.0, created on 2023-04-08 06:01:52
  from 'C:\xampp\htdocs\Centro_Educativo\programa\view\templates\frm_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6430e730752d79_53052796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37c6906e444898b6fe9c3b5dd26d77d1c8748903' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Centro_Educativo\\programa\\view\\templates\\frm_login.tpl',
      1 => 1680926511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6430e730752d79_53052796 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <title>Centro Educativo</title>
  <link rel="icon" type="image/png" href="graphics/TC.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
  @import url("css/styleMainPage.css");
</style>
</head>
<body>
  <strong><p id="frase1" style="margin-left: 520px; width: 380px" class="maquina-escribir" style="width:650px; margin-left:450px">Centro Educativo</p></strong>
  <div class="container">
    <form method="post" action="index.php">
      <input type="hidden" name="accion" value="validar_login">
      <strong><label for="email">Correo Academico:</label></strong>
      <input style="font-family: calibri" type="email" id="txt_usuario" name="txt_usuario" placeholder="">
      <strong><label for="subject">Contraseña:</label></strong>
      <input style="font-family: calibri" type="password" id="pwd_password" name="pwd_password" placeholder="" style="height:300px">
      <strong><input class="" type="submit" id="btnEnvCon" onclick="" name="" value="Ingresar"></strong>
    </form>
  </div>
  <?php echo '<script'; ?>
 src="js/main.js" type="text/javascript"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
