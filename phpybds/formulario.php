<?php 
	require('conexion.php');
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Ingresar</title>
	<link rel="stylesheet" href="css/materialize.min.css" media="screen, projection">
	<link rel="stylesheet" href="css/estilos.css">
</head>

<body>
	<div>
		<!-- Modal Structure -->
		<div id="modal1" class="modal">
			<div class="modal-content">
				<h4>Ingresar datos</h4>
				<br><br>
				<div class="row">
				<form method="post" method="nuevo.php" class="col s12">
					<div class="input-field cold s12">
					<input type="text" id="primero" name="nombre" class="validate">
					<label for="primero">Nombre</label> <br>
				</div>

				<div class="input-field cold s12">
					<input type="text" id="segundo" name="titulo" class="validate">
					<label for="segundo">Titulo</label><br><br><br><br>
				</div> 

				<button type="submit" class="btn waves-effect waves-light">
				<i class="mdi-content-send right"></i>Guardar</button>
				</form>
			</div>
			</div>
			<div class="modal-footer">
				<a href="index.php" class="waves-effect waves-green btn-flat modal-action modal-close">Cerrar</a>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script>
    		$(document).ready(function() {
    			$(".button-collapse").sideNav();
    			$('.modal-trigger').leanModal();
  			});
        </script>
	
</body>
</html>