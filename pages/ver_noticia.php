<!DOCTYPE html>
<html lang="en">
  <head>
	<?php require_once("../requiere/head.php");
	$id_noticia = $_GET['id'];  
	$consulta = "SELECT * FROM noticias WHERE id_noticia = '$id_noticia'";
	$resultado = $conexion->query($consulta);
	$row = $resultado->fetch_assoc();
	?>
  </head>

  <body>
	<?php 
	$pagina = $_GET['pagina'];
	if($pagina == "admin_noticias"){
		require_once("../requiere/menu_admin.php");
	}else{
		require_once("../requiere/menu.php");	
	}
	?> 

	<div id="cabecera">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h4><i class="fa fa-bookmark icon"></i>Noticias</h4>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->

	<div class="container w">
		<div class="row">
			<div class="col-lg-4">
				<?php print ("<img src='../admin/imgs_news/$row[imagen]' width='100%' />"); ?>
			</div><!-- col-lg-4 -->
			<div class="col-lg-8">
				<?php print("
					<h1>$row[titular]</h1>
					<em>$row[resumen]</em><br>
				"); ?>
			</div><!-- col-lg-4 -->
		</div><!-- row -->
		<div class="row">
			<div class="col-lg-10">
				<?php print("<br><p>$row[noticia]</p>"); ?>
				<?php print("<br><sub>Publicada el: $row[fecha_publicacion]</sub>"); ?>
			</div>
		</div>
		<br>
	</div><!-- container -->
	<br>
	
	<!-- FOOTER -->
	<?php require_once("../requiere/footer.php"); ?> 
  </body>
</html>
