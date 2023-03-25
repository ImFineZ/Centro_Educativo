<?php
/* Smarty version 4.3.0, created on 2023-03-24 03:53:41
  from '/Applications/XAMPP/xamppfiles/htdocs/CentroEducativoP3/programa/view/templates/frm_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641d10b5407fe8_82091005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbeadb2367e5ed523156df809d481aaaff996b82' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/CentroEducativoP3/programa/view/templates/frm_login.tpl',
      1 => 1679626405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641d10b5407fe8_82091005 (Smarty_Internal_Template $_smarty_tpl) {
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
