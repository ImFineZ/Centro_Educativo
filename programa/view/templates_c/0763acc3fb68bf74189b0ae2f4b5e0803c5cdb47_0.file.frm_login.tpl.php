<?php
/* Smarty version 4.3.0, created on 2023-04-07 20:45:33
  from '/Applications/XAMPP/xamppfiles/htdocs/CentroEducativoP3/Centro_Educativo/programa/view/templates/frm_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_643064cd71bba3_99163300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0763acc3fb68bf74189b0ae2f4b5e0803c5cdb47' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/CentroEducativoP3/Centro_Educativo/programa/view/templates/frm_login.tpl',
      1 => 1680893049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643064cd71bba3_99163300 (Smarty_Internal_Template $_smarty_tpl) {
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
    <strong><input class="btnModReg" type="submit" id="btnReg" onclick="" name="" value="Registrarse"></strong>
    <strong>
        <p id="frase1" style="margin-left: 520px; width: 380px" class="maquina-escribir"
            style="width:650px; margin-left:450px">Centro Educativo</p>
    </strong>
    <div class="container">
        <form method="post" action="index.php">
            <input type="hidden" name="accion" value="validar_login">
            <strong><label for="email">Correo Academico:</label></strong>
            <input style="font-family: calibri" type="email" id="txt_usuario" name="txt_usuario"
                placeholder="ingrese el correo">
            <strong><label for="subject">Contrasena:</label></strong>
            <input style="font-family: calibri" type="password" id="pwd_password" name="pwd_password"
                placeholder="ingrese la contraseña" style="height:300px">
            <strong>
                <td colspan="2"><input id="btnEnvCon" type="submit" value='Entrar'></td>
            </strong>
        </form>
    </div>
    <section class="modalReg">
        <div class="modal_container">
            <strong>
                <p class="maquina-escribir" style="width:250px; margin-left:33px">Registrarse - Centro Educativo</p>
            </strong>
            <form method="post" action="registrarse.php">
                <input type="hidden" name="accion" value="ingresar_contacto">
                <strong><label id="lb_reg"
                        for="nomTxt">Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
                <input style="font-family: Century-Gothic" type="text" id="txt_reg" name="txtNombre" placeholder=""><br>
                <strong><label id="lb_reg"
                        for="pApellidoTxt">Apellido:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
                <input style="font-family: Century-Gothic" type="text" id="txt_reg" name="txtpApellido" placeholder=""
                    style="height:300px"><br>
                <strong><label id="lb_reg"
                        for="passTxt">Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
                <input style="font-family: Century-Gothic" type="password" id="txt_reg" name="pass" placeholder=""
                    style="height:300px"><br>
                <strong><label id="lb_reg"
                        for="emailTxt">Correo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
                <input style="font-family: Century-Gothic" type="email" id="txt_reg" name="email" placeholder=""
                    style="height:300px">
                <br>
                <strong><label id="lb_reg"
                        for="perfilTxt">Perfil:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
                <input style="font-family: Century-Gothic" type="text" id="txt_reg" list="perfiles">
                <datalist id="perfiles">
                    <option value="Docente">
                    <option value="Estudiante">
                    <option value="Padre">
                </datalist>
                <br>
                <strong><label id="lb_reg"
                        for="estadoTxt">Estado:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
                <input style="font-family: Century-Gothic" type="text" id="txt_reg" list="estado">
                <datalist id="estado">
                    <option value="Activo">
                    <option value="Inactivo">
                </datalist>
                <strong><input type="submit" id="btnFmReg" onclick="alert('Informacion Ingresada')" name=""
                        value="Registrarse"></strong>
                <strong><input class="btnCanReg" type="submit" id="btnFmReg" onclick="" name=""
                        value="Cancelar"></strong>
            </form>
        </div>
    </section>
    <?php echo '<script'; ?>
 src="js/main.js" type="text/javascript"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
