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
    <title>Ordena</title>
    <link rel="stylesheet" href="css/register.css">
  </head>
  <body>
    <div class="contenedor">

    <h1>Ordena tu pedido</h1>

    <form class="Formulario" action="createorder.php" method="POST">
      <fieldset class="informacion">
        <legend>Odena tu pedido</legend>
          <label for="Usuario">Usuario</label>
          <input type="text" name="user" id="usuario" placeholder="usuario" autocomplete="on" required>

      <br><br>
           <label for="Pedido">Pedido</label>
           <input type="text" name="pedido" id="pedido" placeholder="Tu Pedido"
           autocomplete="on" required>
      <br><br>
      <label>Direccion</label>
      <input type="direccion" name="direccion" placeholder="Direccion required">
      <br><br>



    </fieldset>

          <br>
         <button type="reset" class="reset">Borrar</button>


         <input type="submit" name="submit" value="Enviar" class="btnsubmit">

    </form>


    </div>
  </body>
</html>
