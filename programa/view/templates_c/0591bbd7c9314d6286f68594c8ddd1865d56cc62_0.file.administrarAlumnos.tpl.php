<?php
/* Smarty version 4.3.0, created on 2023-04-09 06:12:10
  from 'C:\xampp\htdocs\Centro_Educativo\programa\view\templates\administrarAlumnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64323b1ad65c16_78890635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0591bbd7c9314d6286f68594c8ddd1865d56cc62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Centro_Educativo\\programa\\view\\templates\\administrarAlumnos.tpl',
      1 => 1681013521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64323b1ad65c16_78890635 (Smarty_Internal_Template $_smarty_tpl) {
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

  <div>
    <table class="table" id="tablaAlumnos">
      <thead>
        <tr>
          <th scope="col" style="width:5%">Id</th>
          <th scope="col" style="width:15%">Nombre</th>
          <th scope="col" style="width:15%">Apellido</th>
          <th scope="col" style="width:15%">Correo</th>
          <th scope="col" style="width:15%">Perfil</th>
          <th scope="col" style="width:15%">Estado</th>
          <th scope="col" style="width:15%">Acciones</th>
        </tr>
      </thead>
      <tbody>

      <!--  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_usuarios']->value, 'contact', false, NULL, 'outer', array (
));
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
          <tr>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
              <td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> -->



      </tbody>
    </table>
  </div>
<?php echo '<script'; ?>
 src="js/jsMainPage.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
