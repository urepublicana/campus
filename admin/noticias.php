<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
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


	<div class="container">
		<div class="row">
			<div class="col-lg-12">

				<a data-toggle="modal" data-target="#nueva_noticia" href="#nueva_noticia"> NUEVA NOTICIA </a>

				<table width="100%" cellpadding="10">
					<tr>
						<td><h4>IMAGEN</h4></td>
						<td><h4>TITULAR</h4></td>
						<td><h4>RESUMEN</h4></td>
						<td><h4>FECHA DE PUBLICACIÛN</h4></td>
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
								<td align='center'><img class='not_inicio img-circle' src='../admin/imgs_news/$row[imagen]'></td>
								<td>$row[titular]</td>
								<td>$row[resumen]</td>
								<td>$row[fecha_publicacion]</td>
								<td><a href='#'><i class='fa fa-edit'></i></a></td>
								<td><a href='#' onclick='return confirmar()'><i class='fa fa-trash-o'></i></a></td>
							</tr>");
						}
						/* liberar el conjunto de resultados */
						$resultado->free();
					}
					?>
				</table>
			</div><!-- col-lg-4 -->
		</div><!-- row -->
	</div><!-- container -->
	<!-- Modal -->
	<div class="modal fade" id="nueva_noticia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Agregar Noticia</h4>
				</div>
				<!--Body-->
				<div>
					<div class="row">
						<h2>Agregar Noticia</h2>
						<form action="crud_noticia.php" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="accion" value="agregar">
							<table cellpadding="5" width="90%">
								<tr>
									<td><label>Titular</label></td>
									<td><input type="text" class="form-control" name="titular" required=""></td>
								</tr>
								<tr>
									<td><label>Fecha final</label></td>
									<td>
									<input type="hidden" name="fecha_publicacion">
									<input type="text" class="form-control" name="fecha_final" id="fecha_final" required=""></td>
								</tr>
								<tr>
									<td><label>Resumen</label></td>
									<td><textarea name="resumen" class="form-control" name="resumen" required=""></textarea></td>
								</tr>
								<tr>
									<td><label>Texto</label></td>
									<td><textarea class="form-control" name="noticia"></textarea></td>
								</tr>
								<tr>
									<td><label>Imagen</label></td>
									<td><input type="file" class="form-control" name="imagen" required="" accept="image/*"></td>
								</tr>
								<tr>
									<td><label>Importancia</label></td>
									<td>
										<select class="form-control" name="importancia">
											<option value="1">Importante</option>
											<option value="0">Pasajero</option>
										</select>
									</td>
								</tr>
								<tr>
									<td colspan="2"><input class="btn btn-success" type="submit" value="GUARDAR"></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


	<!-- FOOTER -->
	<?php require_once("../requiere/footer.php"); ?> 
</body>
</html>
