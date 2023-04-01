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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <strong><p id="frase1" style="margin-left: 520px; width: 350px" class="maquina-escribir" style="width:650px; margin-left:450px">&gt;&nbsp;Contacto_</p></strong>
  <div class="container">
    <form method="post" action="contact.php">
      <input type="hidden"  name="accion" value="ingresar_contacto">
      <strong><label for="email">Correo Academico:</label></strong>
      <input style="font-family: calibri" type="email" id="txt_usuario" name="txtEmail" placeholder="">
      <strong><label for="subject">Contrasena:</label></strong>
      <input style="font-family: calibri" type="password" id="pwd_password" name="txtAsunto" placeholder="" style="height:300px">

      <strong><input type="submit" id="btnEnvCon" onclick="alert('Informacion Ingresada')" name="" value="Ingresar"></strong>
    </form>
  </div>

</body>
</html>
