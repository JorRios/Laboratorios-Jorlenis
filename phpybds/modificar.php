<?php
  require('conexion.php');
  $id=$_POST['id'];

  $dato1=$_POST['nombre'];
  $dato2=$_POST['titulo'];

  $consulta="UPDATE recursos SET nombre='$dato1',titulo='$dato2' WHERE id='$id'";
  $resultado=$mysqli->query($consulta);
  header("Location:index.php");
 
  exit(); 
?>