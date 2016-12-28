<!DOCTYPE html>
<html lang="es">
  <head>
	<?php 
	require_once("../php/conexion.php");
	$id_evento = $_GET['id'];  
	$consulta = "SELECT * FROM eventos_bienestar WHERE id_evento = '$id_evento'";
	$resultado = $conexion->query($consulta);
	$row = $resultado->fetch_assoc();
	?>
  </head>

  <body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2><?= $row['titulo'] ?></h2>
				<p><?= $row['descripcion'] ?></p>
				<h5>Fecha Inicio: <?= $row['fecha_inicio'] ?></h5>
				<h5>Fecha Final: <?= $row['fecha_final'] ?></h5>
			</div><!-- col-lg-4 -->
		</div><!-- row -->
	</div><!-- container -->
  </body>
</html>
