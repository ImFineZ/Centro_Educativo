<!DOCTYPE html>
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
  <strong><p id="frase1" style="margin-left: 520px; width: 480px" class="maquina-escribir">Centro Educativo</p></strong>
  <div class="container">
    <form method="post" action="index.php">
      <input type="hidden" name="accion" value="validar_login">
      <strong><label for="email">Correo Academico:</label></strong>
      <input style="font-family: calibri" type="email" id="txt_usuario" name="txt_usuario" placeholder="">
      <strong><label for="subject">Contraseña:</label></strong>
      <input style="font-family: calibri" type="password" id="pwd_password" name="pwd_password" placeholder="" style="height:300px">
      <strong><input class="" type="submit" id="btnEnvCon" onclick="" name="" value="Ingresar"></strong>
    </form>
  </div>
  <script src="js/main.js" type="text/javascript"></script>
</body>
</html>
