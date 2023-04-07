<?php
/* Smarty version 4.3.0, created on 2023-03-30 06:41:04
  from '/Applications/XAMPP/xamppfiles/htdocs/CentroEducativoP3/develop/Centro_Educativo/programa/view/templates/frm_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642512e01cc7e6_61250892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '304016ce47e5c2eee29a4b80aabe6f3386fe2669' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/CentroEducativoP3/develop/Centro_Educativo/programa/view/templates/frm_login.tpl',
      1 => 1680151231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642512e01cc7e6_61250892 (Smarty_Internal_Template $_smarty_tpl) {
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
