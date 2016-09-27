<!DOCTYPE html>
<html lang="en">
  <head>
	<?php 
	require_once("../php/conexion.php");
	require_once("../requiere/head.php");
	$consulta = "SELECT * FROM noticias";
	$resultado = $conexion->query($consulta);
	
	?>
  </head>

  <body>
	<?php 
	$pagina = "";
	if(isset($_GET['pagina'])){$pagina = $_GET['pagina'];}
	if($pagina == "admin_noticias"){
		require_once("../requiere/menu_admin.php");
	}else{
		require_once("../requiere/menu.php");	
	}
	?>
	<div class="row centered cabecera">
		
	</div>
	<div class="container">
	<?php while($row = $resultado->fetch_assoc()){ 
	print("<a href='../pages/ver_noticia.php?id=$row[id_noticia]&pagina=campus'>");
	?>
		<div class="row">
			<div class="col-lg-4">
				<?php print ("<img src='../admin/imgs_news/$row[imagen]' width='100%' />"); ?>
			</div><!-- col-lg-4 -->
			<div class="col-lg-8">
				<?php print("
					<h2>$row[titular]</h2>
					<em>$row[resumen]</em><br>
					<em class='publicacion'>Publicación: $row[fecha_publicacion]</em>
				"); ?>
			</div><!-- col-lg-4 -->
		</div><!-- row -->
	<?php 
	print("</a>");
	}?>
		<br>
	</div><!-- container -->
	<br>
	
	<!-- FOOTER -->
	<?php require_once("../requiere/footer.php"); ?> 
  </body>
    <script src="../assets/js/chat-pg.js"></script>
</html>
