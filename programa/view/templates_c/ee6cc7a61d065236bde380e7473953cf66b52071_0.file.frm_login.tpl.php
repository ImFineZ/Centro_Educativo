<?php
/* Smarty version 4.3.0, created on 2023-04-07 03:09:02
  from 'C:\xampp\htdocs\CentroEducativo\programa\view\templates\frm_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642f6d2e94c820_08111328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee6cc7a61d065236bde380e7473953cf66b52071' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CentroEducativo\\programa\\view\\templates\\frm_login.tpl',
      1 => 1680829741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642f6d2e94c820_08111328 (Smarty_Internal_Template $_smarty_tpl) {
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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <strong><p id="frase1" style="margin-left: 520px; width: 380px" class="maquina-escribir" style="width:650px; margin-left:450px">Centro Educativo</p></strong>
  <div class="container">
    <form method="post" action="contact.php">
      <input type="hidden"  name="accion" value="ingresar_contacto">
      <strong><label for="email">Correo Academico:</label></strong>
      <input style="font-family: calibri" type="email" id="txt_usuario" name="txtEmail" placeholder="">
      <strong><label for="subject">Contrasena:</label></strong>
      <input style="font-family: calibri" type="password" id="pwd_password" name="txtAsunto" placeholder="" style="height:300px">

      <strong><input type="submit" id="btnEnvCon" onclick="alert('Informacion Ingresada')" name="" value="Ingresar"></strong>
    </form>
  </div>

</body>
</html>
<?php }
}
