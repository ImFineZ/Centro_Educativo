<?php
/* Smarty version 4.3.0, created on 2023-04-07 02:49:24
  from 'C:\xampp\htdocs\CentroEducativo\programa\view\templates\frm_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642f689437a309_39708005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee6cc7a61d065236bde380e7473953cf66b52071' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CentroEducativo\\programa\\view\\templates\\frm_login.tpl',
      1 => 1680828355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642f689437a309_39708005 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

    <head>
        <title></title>
    </head>
    
    <body>
        <h1>Login</h1>
        <form action="index.php" method="post">
            <input type="hidden" name="accion" value="validar_login">
            <table>
                <tr>
                    <td>Correo</td>
                    <td><input type="text" name='txt_usuario'></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name='pwd_password'></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value='Entrar'></td>
                </tr>
            </table>
        </form>
        <form action="index.php" method="post">
            <input type="hidden" name="accion" value="registrar">
            <table>
                <tr>
                    <td colspan="2"><input type="submit" value='Registrarse'></td>
                </tr>
            </table>
        </form>
    </body>
    
    </html>
    <?php }
}
