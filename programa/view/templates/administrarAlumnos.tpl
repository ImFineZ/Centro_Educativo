<!DOCTYPE html>
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
  <strong><p id="fraseAdmAlm" style="margin-left: 290px; width: 780px" class="maquina-escribir">Centro Educativo-Administrar Alumnos</p></strong>
  <div>
    <table class="table" id="tablaAlumnos">
      <thead>
        <tr>
          <th scope="col" style="width:5%">Id</th>
          <th scope="col" style="width:15%">Nombre</th>
          <th scope="col" style="width:15%">Apellido</th>
          <th scope="col" style="width:15%">Correo</th>
          <th scope="col" style="width:15%">Id Padre</th>
          <th scope="col" style="width:15%">Perfil</th>
          <th scope="col" style="width:15%">Acciones</th>
        </tr>
      </thead>
      <tbody>
      {foreach name=outer item=contact from=$lista_usuarios}
          <tr>
          {foreach key=key item=item from=$contact}
              <td>{$item}</td>
          {/foreach}
        </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
<script src="js/jsMainPage.js"></script>
</body>
</html>
