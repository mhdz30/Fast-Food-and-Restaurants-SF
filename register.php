<?php
try {
    require_once('functions/bd_conexion.php');

} catch (\Exception $e) {
  $error = $e->getMessage();
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrate</title>
    <link rel="stylesheet" href="css/register.css">
  </head>
  <body>
    <div class="contenedor">

    <h1>Registrate para odernar o reservar</h1>

    <form class="Formulario" action="Crearuser.php" method="POST">
      <fieldset class="informacion">
        <legend>Completa tu información</legend>
          <label for="Nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" placeholder="Tu nombre" autocomplete="on" required>

      <br><br>
           <label for="Apellido">Apellido</label>
           <input type="text" name="apellido" id="apellido" placeholder="Tu Apellido"
           autocomplete="on" required>
      <br><br>
      <label>Correo Electronico</label>
      <input type="correo" name="correo" placeholder="correo@dominio.com" required>
      <br><br>
           <label for="contraseña">Contraseña</label>
           <input type="text" name="pw" id="pw" placeholder="Contraseña">
      <br><br>

           <label for="confirmacion contraseña"> Confirma tu contraseña</label>
           <input type="text" name="cpw" id="cpw" placeholder=" Confirma Contraseña">
      <br><br>


    </fieldset>

          <br>
         <button type="reset" class="reset">Borrar</button>


         <input type="submit" name="submit" value="Registrarme" class="btnsubmit">

    </form>


    </div>
  </body>
</html>
