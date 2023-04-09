<?php
/* Smarty version 4.3.0, created on 2023-04-09 02:26:37
  from 'C:\xampp\htdocs\Centro_Educativo\programa\view\templates\administrarPadres.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6432063d66a737_45426145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66299393b8a5719892ad2f6ad83b22993f1fb14e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Centro_Educativo\\programa\\view\\templates\\administrarPadres.tpl',
      1 => 1680999994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6432063d66a737_45426145 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
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
  <div class="buscadorAlumno">
  <input type="hidden"  name="accion" value="buscar_Padre">
  <strong><label id="lb_busAlm" for="busAlmTxt">Ingrese correo de Padre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
  <input style="font-family: Century-Gothic" type="text" id="txt_busPad" name="txtbusPad" placeholder=""><br>
  <strong><input type="submit" id="btnBuscarAlm" onclick="" name="" value="Buscar"></strong>
  </div>
<?php echo '<script'; ?>
 src="js/jsMainPage.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
