<!DOCTYPE html>
<html lang="en">
  <head>
	<?php 
	require_once("../php/conexion.php");
	require_once("../requiere/head.php"); ?>
  </head>

  <body>
	<?php 
	$pagina = "index";
	require_once("../requiere/menu.php"); ?> 

	<div id="headerwrap">
		<img src="../imgs/fondo3.png" width="100%">
			<img class="globo1" src="../imgs/globo.png">
			
		<div class="texto_banner centered">
			<h1 id="frase1">Nuestra tradición <b>La ética</b></h1>
			<h1 id="frase2" class="no_ver">Nuestro compromiso <b>La sociedad</b></h1>
		</div>
	</div><!-- headerwrap -->
	

	<div class="container w">
		<div class="row centered">
			<br><br>
			<div class="col-lg-12">
				<i class="fa fa-laptop"></i>
				<h4>CAMPUS VIRTUAL</h4>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even believable. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even believable</p>
			</div><!-- col-lg-4 -->
		</div><!-- row -->
		<br>
		<br>
	</div><!-- container -->
	
	
				<!-- PORTFOLIO SECTION -->
	<div id="dg">
		<div class="container">
			<div class="row centered">
				<h4>TESTIMONIOS</h4>
				<br>
				<div class='col-lg-4' id='elem_1'>
					<blockquote class="testimonio">Aquí debes poner lo que quieras que salga en el testimonio.</blockquote>
					<div class="fecha-abajo"></div>
					<p class="autor-testimonio"><img src="../admin/imgs_news/noticia.png">Jhonatan Javier Malaver <br> Desarrollador WEB</p>
				</div>
				<div class='col-lg-4' id='elem_2'>
					<blockquote class="testimonio">Aquí debes poner lo que quieras que salga en el testimonio.</blockquote>
					<div class="fecha-abajo"></div>
					<p class="autor-testimonio"><img src="../admin/imgs_news/noticia.png">Jhonatan Javier Malaver <br> Desarrollador WEB</p>
				</div>
				<div class='col-lg-4' id='elem_3'>
					<blockquote class="testimonio">Aquí debes poner lo que quieras que salga en el testimonio.</blockquote>
					<div class="fecha-abajo"></div>
					<p class="autor-testimonio"><img src="../admin/imgs_news/noticia.png">Jhonatan Javier Malaver <br> Desarrollador WEB</p>
				</div>

				<?php
				/*
				$consulta = "SELECT * FROM noticias ORDER BY fecha_publicacion DESC LIMIT 0,3";
				if ($resultado = $conexion->query($consulta)) {
					$aux = 0;
					$clase = "";
					//obtener un array asociativo
					while ($row = $resultado->fetch_assoc()) {
						$aux++;
						print("
						<div class='col-lg-3' id='elem_$aux'>
							<h3>$row[titular]</h3>
							<div class='tilt'>
								<a href='ver_noticia.php?id=$row[id_noticia]'>
									<img class='not_inicio img-circle' src='../admin/imgs_news/$row[imagen]'>
								</a>
							</div>
							<p>$row[resumen]<br></p>
						</div>");
					}
					//liberar el conjunto de resultados 
					$resultado->free();
				}
				*/
				?>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- DG -->

	<!-- FOOTER -->
	<?php require_once("../requiere/footer.php"); ?> 
  </body>
    <script src="../assets/js/chat-pg.js"></script>
</html>
