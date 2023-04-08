<?php
/* Smarty version 4.3.0, created on 2023-04-08 06:04:21
  from 'C:\xampp\htdocs\Centro_Educativo\programa\view\templates\headerUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6430e7c53f4cc7_77312617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8b0d1b862c710ff8a6f0c098a5741c80eb8563e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Centro_Educativo\\programa\\view\\templates\\headerUsuario.tpl',
      1 => 1680926660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6430e7c53f4cc7_77312617 (Smarty_Internal_Template $_smarty_tpl) {
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
  <ul class="active">
    <li><a href="">Mostrar Calificaciones</a></li>
    <li><a href="">Mostrar Asistencia</a></li>
    <li><a class="nav-link" href="index.php?accion=salir" tabindex="-1">Salir</a></li>
  </ul>
  <br>
  <br>
<?php echo '<script'; ?>
 src="js/jsMainPage.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
