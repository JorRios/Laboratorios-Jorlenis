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
					<li><a href="index.php">Inicio</a></li>
				</ul>
				<!-- navbar for mobile -->
				<ul class="side-nav black" id="mobile-demo">
					<li><a href="administrar.php">Inicio</a></li>
				</ul>
			</div>
		</nav>
		<br>
		
		<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Agregar</a>
		
		<!-- Modal Structure -->
		<div id="modal1" class="modal">
			<div class="modal-content">
				<h4>Ingresar Datos</h4>
				<div class="row">
					<form action="nuevo.php" method="post" class="cold s12">
						<div class="row">
							<div class="input-field cold s12">
								<input type="text" id="primero" name="nombre" class="validate">
								<label for="primero">Nombre</label> <br>
							</div>

							<div class="input-field cold s12">
								<input type="text" id="segundo" name="titulo" class="validate">
								<label for="segundo">Titulo</label>
							</div>
						</div>
						<button type="submit" class="btn waves-effect waves-light"><i class="mdi-content-send right"></i>Enviar</button>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Cerrar</a>
			</div>
		</div>
		<section class="container">
		<table class="responsive-table bordered dataTable no-footer" role="grid"> 
			<thead>
				<tr role="row">
					<th data-field="id">ID</th>
					<th data-field="nombre">Nombre</th>
					<th data-field="titulo">Titulo</th>
					<th data-field="Operaciones" class="Operaciones">Operaciones</th>

				</tr>
			</thead>
		
			<tbody>
				<?php while ($fila=$resultado->fetch_assoc()){ ?>
          <tr>
            <td><?php echo $fila ['id']; ?></td>
            <td><?php echo $fila ['nombre']; ?></td>
            <td><?php echo $fila ['titulo']; ?></td>
			

            <td class="center"><a href="eliminar.php?id=<?php echo $fila['id'];?>"><i class="mdi-action-highlight-remove small center"></i></a>

            <a href="#modificar<?php echo $fila['id'];?>" class="modal-trigger"><i class="mdi-content-content-copy small center"></i></a></td>

            <div id="modificar<?php echo $fila['id'];?>" class="modal" >
              <div class="modal-content">
                <h4>Editar Datos</h4> <br><br>
                
                <div class="row">
                  <form class="col s12" action="modificar.php" method="post">
                    
                    <input type="hidden" name="id" value="<?php echo $fila ['id']; ?> ">
                      <div class="input-field col s12">
                        <input id="primero" type="text" name="nombre" class="validate" value="<?php echo $fila ['nombre']; ?>">
                          <label for="primero">Nombre</label> <br>
                      </div>
                      <div class="input-field col s12">
                        <input id="segundo" type="text" name="titulo" class="validate" value="<?php echo $fila ['titulo']; ?>">
                        <label for="segundo">Título</label> <br><br>
                      </div>
                    </div>
                    <button type="submit" class="btn waves-effect waves-light">
				<i class="mdi-content-send center"></i>Guardar</button>
                  </form>
                </div>
          </tr>
          <?php } ?>			
          </tbody>

		</table>
	</section>

		
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