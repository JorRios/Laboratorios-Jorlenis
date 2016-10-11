<?php 
	
	include ('conexion.php');

	$dato1=$_POST['nombre'];
  	$dato2=$_POST['titulo'];

  	$consulta="INSERT INTO recursos(nombre, titulo) VALUES ('$dato1','$dato2')";
  	$resultado=$mysqli->query($consulta);
  	header("location:index.php"); 
  	exit();

?>