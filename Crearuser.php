<?php

    if(isset($_POST['nombre'])){
      $nombre = $_POST['nombre'];
    }
    if(isset($_POST['apellido'])){
      $apellido = $_POST['apellido'];
    }
    if(isset($_POST['correo'])){
      $correo = $_POST['correo'];
    }
    if(isset($_POST['pw'])){
      $pw = $_POST['pw'];
    }
    if(isset($_POST['cpw'])){
      $cpw = $_POST['cpw'];

}

try {
    require_once('functions/bd_conexion.php');
    $sql = "INSERT INTO `users` (`iduser`, `nombre`, `apellido`, `correo`, `pw`, `cpw`) ";
    $sql .= " VALUES (NULL, '$nombre', '$apellido', '$correo', '$pw', '$cpw' ); ";
    $resultado = $conn->query($sql);

} catch (\Exception $e) {
  $error = $e->getMessage();
}


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="/css/register.css">
  </head>
  <body>
    <h2>Bienvenido!</h2>
      <div class="contenedor">
       <?php
          if($resultado){
            echo "Bienvenido $nombre $apellido a Restaurants and Fast Food SFM";
          } else {
            echo "Error" . $conn->error;
          }

        ?>
      </div>
      <?php
          $conn->close();
       ?>

  </body>
</html>
