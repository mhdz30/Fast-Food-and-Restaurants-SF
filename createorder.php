<?php

    if(isset($_POST['user'])){
      $user = $_POST['user'];
    }
    if(isset($_POST['pedido'])){
      $pedido = $_POST['pedido'];
    }
    if(isset($_POST['direccion'])){
      $direccion = $_POST['direccion'];

}

try {
    require_once('functions/bd_conexion.php');
    $sql = "INSERT INTO `orden` (`idorden`, `user`, `pedido`, `direccion`) ";
    $sql .= " VALUES (NULL, '$user', '$pedido', '$direccion'); ";
    $resultado = $conn->query($sql);

} catch (\Exception $e) {
  $error = $e->getMessage();
}


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tu pedido haz sido realizado</title>
    <link rel="stylesheet" href="/css/register.css">
  </head>
  <body>
    <h2>Bienvenido!</h2>
      <div class="contenedor">
       <?php
          if($resultado){
            echo "Hola $user !. Haz pedido $pedido estara contigo en 30 minutos";
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
