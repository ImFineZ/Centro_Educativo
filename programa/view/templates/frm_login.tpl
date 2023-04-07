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
  <strong><input class="btnModReg" type="submit" id="btnReg" onclick="" name="" value="Registrarse"></strong>
  <strong><p id="frase1" style="margin-left: 520px; width: 380px" class="maquina-escribir" style="width:650px; margin-left:450px">Centro Educativo</p></strong>
  <div class="container">
    <form method="post" action="login.php">
      <input type="hidden"  name="accion" value="ingresar_sistema">
      <strong><label for="email">Correo Academico:</label></strong>
      <input style="font-family: calibri" type="email" id="txt_usuario" name="txtEmail" placeholder="">
      <strong><label for="subject">Contrasena:</label></strong>
      <input style="font-family: calibri" type="password" id="pwd_password" name="txtAsunto" placeholder="" style="height:300px">
      <strong><input class="" type="submit" id="btnEnvCon" onclick="" name="" value="Ingresar"></strong>
    </form>
  </div>
  <section class="modalReg">
    <div class="modal_container">
      <strong><p class="maquina-escribir" style="width:250px; margin-left:200px">Registrarse</p></strong>
      <form method="post" action="registrarse.php">
        <input type="hidden"  name="accion" value="ingresar_contacto">
        <strong><label id="lb_reg" for="nomTxt">Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
        <input style="font-family: Century-Gothic" type="text" id="txt_reg" name="txtNombre" placeholder=""><br>
        <strong><label id="lb_reg" for="pApellidoTxt">Apellido:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
        <input style="font-family: Century-Gothic" type="text" id="txt_reg" name="txtpApellido" placeholder="" style="height:300px"><br>
        <strong><label id="lb_reg" for="passTxt">Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
        <input style="font-family: Century-Gothic" type="password" id="txt_reg" name="pass" placeholder="" style="height:300px"><br>
        <strong><label id="lb_reg" for="emailTxt">Correo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
        <input style="font-family: Century-Gothic" type="email" id="txt_reg" name="email" placeholder="" style="height:300px">
        <br>
        <strong><label id="lb_reg" for="perfilTxt">Perfil:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
        <input style="font-family: Century-Gothic" type="text" id="txt_reg" list="perfiles">
        <datalist id="perfiles">
          <option value="Docente">
          <option value="Estudiante">
          <option value="Padre">
        </datalist>
        <br>
        <strong><label id="lb_reg" for="estadoTxt">Estado:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
        <input style="font-family: Century-Gothic" type="text" id="txt_reg" list="estado">
        <datalist id="estado">
          <option value="Activo">
          <option value="Inactivo">
        </datalist>
        <strong><input type="submit" id="btnFmReg" onclick="alert('Informacion Ingresada')" name="" value="Registrarse"></strong>
        <strong><input class="btnCanReg" type="submit" id="btnFmReg" onclick="" name="" value="Cancelar"></strong>
      </form>
    </div>
  </section>
  <script src="js/main.js" type="text/javascript"></script>
</body>
</html>
