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
	
	
	<div class="modal fade" id="nueva_noticia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Agregar Noticia</h4>
	      </div>
	      <div class="modal-body">
		        <div class="row">
					<h2>Agregar Noticia</h2>
					<table cellpadding="5" border="0" width="90%">
						<tr>
							<td><label>Titular</label></td>
							<td><input type="text" class="form-control"></td>
						</tr>
						<tr>
							<td><label>Resumen</label></td>
							<td><textarea name="resumen" class="form-control"></textarea></td>
						</tr>
						<tr>
							<td><label>Texto</label></td>
							<td><textarea name="texto" class="form-control"></textarea></td>
						</tr>
						<tr>
							<td><label>Imagen</label></td>
							<td><input type="file"></td>
						</tr>
						<tr>
							<td><label>Importancia</label></td>
							<td><input type="text" class="form-control"></td>
						</tr>
						<tr>
							<td colspan="2"><input class="btn btn-success" type="submit" value="GUARDAR"></td>
						</tr>
					</table>
		        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	<div class="container w">
		<div class="row">
			<div class="col-lg-12">
			
			<a data-toggle="modal" data-target="#nueva_noticia" href="#nueva_noticia"> NUEVA NOTICIA </a>
			
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
