<?php
$correo = $_POST['correo'];
$pw = $_POST['pw'];

session_start();
$_SESSION['correo'] = $correo;

$conn = new mysqli('localhost', 'root', '', 'restaurantssfm');

$sql = "SELECT * FROM `users` where correo = '$correo' and pw = '$pw' ";
$resultado = mysqli_query($conn,$sql);

$filas= mysqli_num_rows($resultado);

if($filas){
  header("location:UserArea.php");
}else{
  ?>
  <?php
    include("login.php");
   ?>
   <h1>Usuario no identificado</h1>
   <?php
}
mysqli_free_result($resultado);
mysqli_close($conn);
