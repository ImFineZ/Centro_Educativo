<?php
/* Smarty version 4.3.0, created on 2023-04-09 02:26:41
  from 'C:\xampp\htdocs\Centro_Educativo\programa\view\templates\administrarAlumnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64320641eccf55_64975286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0591bbd7c9314d6286f68594c8ddd1865d56cc62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Centro_Educativo\\programa\\view\\templates\\administrarAlumnos.tpl',
      1 => 1680999678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64320641eccf55_64975286 (Smarty_Internal_Template $_smarty_tpl) {
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
  <input type="hidden"  name="accion" value="buscar_alumno">
  <strong><label id="lb_busAlm" for="busAlmTxt">Ingrese correo de Alumno:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
  <input style="font-family: Century-Gothic" type="text" id="txt_busAlum" name="txtbusAlum" placeholder=""><br>
  <strong><input type="submit" id="btnBuscarAlm" onclick="" name="" value="Buscar"></strong>
  </div>
<?php echo '<script'; ?>
 src="js/jsMainPage.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
