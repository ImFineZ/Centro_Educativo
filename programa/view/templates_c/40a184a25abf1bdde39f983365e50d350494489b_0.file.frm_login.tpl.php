<?php
/* Smarty version 4.3.0, created on 2023-03-19 05:25:06
  from '/Applications/XAMPP/xamppfiles/htdocs/CentroEducativoP3/view/templates/frm_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64168ea2e72a29_10387559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40a184a25abf1bdde39f983365e50d350494489b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/CentroEducativoP3/view/templates/frm_login.tpl',
      1 => 1679198292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64168ea2e72a29_10387559 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
    <title></title>
</head>

<body>
    <h1>Login</h1>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="validar_login">
        <input type="hidden" name="action" value="registrar">
        <table>
            <tr>
                <td>Usuario</td>
                <td><input type="text" name='txt_usuario'></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name='pwd_password'></td>
            </tr>
            <tr>
                <td colspan="1"><input type="submit" value='Registrarse'></td>
                <td colspan="2"><input type="submit" value='Entrar'></td>
            </tr>
        </table>
    </form>
</body>
</html><?php }
}
