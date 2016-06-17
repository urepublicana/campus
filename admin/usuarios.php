<!DOCTYPE html>
<html lang="en">
  <head>
	<?php 
		require_once("../php/conexion.php");
		require_once("../requiere/head.php"); 
	?>
  </head>

  <body>
	<?php 
	$pagina = "admin_noticias";
	require_once("../requiere/menu_admin.php"); ?>
	
	<div id="cabecera">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h4><i class="fa fa-comments icon"></i>GESTION DE NOTICIAS</h4>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- CABECERA -->
	
	<div id="dg">
		<div class="row centered">
			<div class="col-lg-19">
			<table cellpadding="20" border="2">
			<tr>
				<td><h3>IMAGEN</h3></td>
				<td><h3>TITULAR</h3></td>
				<td><h3>RESUMEN</h3></td>
				<td><h3>FECHA</h3></td>
			</tr>
			</table>
			</div><!-- col-lg-4 -->
		</div><!-- row -->
	</div><!-- container -->
	
	<div class="container w">
		<div class="row">
			<div class="col-lg-12">
			<table cellpadding="20">
			<tr>
				<td><h3>IMAGEN</h3></td>
				<td><h3>TITULAR</h3></td>
				<td><h3>RESUMEN</h3></td>
				<td><h3>FECHA</h3></td>
				<td></td>
				<td></td>
			</tr>
				<?php
					$consulta = "SELECT * FROM noticias ORDER BY fecha_publicacion DESC";
					if ($resultado = $conexion->query($consulta)) {
					$aux = 0;
					$clase = "";
						/* obtener un array asociativo */
						while ($row = $resultado->fetch_assoc()) {
							print ("<tr>
								<td><img class='not_inicio img-circle' src='../php/img_news/$row[imagen]'></td>
								<td>$row[titular]</td>
								<td>$row[resumen]</td>
								<td>$row[fecha_publicacion]</td>
								<td>EDITAR</td>
								<td>ELIMINAR</td>
								</tr>");
						}
						/* liberar el conjunto de resultados */
						$resultado->free();
					}
					/* cerrar la conexión */
					$conexion->close();
				?>
			</table>
			</div><!-- col-lg-4 -->
		</div><!-- row -->
	</div><!-- container -->
	
	<!-- FOOTER -->
	<?php require_once("../requiere/footer.php"); ?> 
  </body>
</html>
