<?php 
	require ('conexion.php');
	
	$consulta="SELECT * FROM recursos";
	$resultado=$mysqli->query($consulta);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>Practica con PHP</title>
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link rel="stylesheet" href="css/estilos.css">

	</head>

	<body>
		<nav class="black">
			<div class="nav-wrapper">
				<a href="#!" class="brand-logo">PHPbds</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="administrar.php">Administrar</a></li>
				</ul>
				<!-- navbar for mobile -->
				<ul class="side-nav " id="mobile-demo">
					<li><a href="administrar.php">Administrar</a></li>
				</ul>
			</div>
		</nav>
		<br>
		
		<div class="row">
		 <?php while ($fila=$resultado->fetch_assoc()){ ?>
			<div class="col s12 m4 l4">
				<div class="card small cyan darken-4">
					<div class="card-content white-text">
						<span class="card-title"><?php echo $fila ['nombre']; ?></span>
						<br>
						<p><?php echo $fila['titulo']; ?></p>
					</div>
				</div>
			</div>
			<?php  } ?>
		</div>

		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script>
    		$(document).ready(function() {
    			$(".button-collapse").sideNav();
  			});
        </script>
	</body>
</html>