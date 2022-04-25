<?php
$conn = new mysqli('localhost', 'root', '', 'restaurantssfm');

  if($conn->connect_error){
    echo $error = $conn->connect_error;
  }

 ?>
