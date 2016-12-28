<!DOCTYPE html>
<html lang="en">
  <head>
	<?php 
	require_once("../php/conexion.php");
	require_once("../requiere/head.php");
	$consulta = "SELECT * FROM noticias ORDER BY fecha_publicacion DESC";
	$resultado = $conexion->query($consulta);
	
	?>

	<link rel="stylesheet" type="text/css" href="css/style_common.css" />
	<link rel="stylesheet" type="text/css" href="css/style1.css" />
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

	<div class="container all_news">
		<div class="row centered">
		<h1>TODAS LAS NOTICIAS</h1>

			<div class="main">
			<?php 
			while($row = $resultado->fetch_assoc()){ 
			$resumen = substr($row['resumen'], 0, 90)."...";
			print("
				<a href='../pages/ver_noticia.php?id=$row[id_noticia]&pagina=campus'>
					<div class='view view-first'>
			    		<img src='../admin/imgs_news/$row[imagen]' width='100%' />
			    		<h3>$row[titular]</h3>
			    		<div class='mask'>
							<h2>$row[titular]</h2>
							<p>$resumen</p><br>
			    		</div>
			    	</div>
				</a>");
				}
				?>   
			</div>
		</div>
	</div>
	<br>
	<!-- FOOTER -->
	<?php require_once("../requiere/footer.php"); ?> 
  </body>
    <script src="../assets/js/chat-pg.js"></script>
</html>
