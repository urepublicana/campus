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
		<img src="../imgs/fondo.png" width="100%">
			<img class="nube1" src="../imgs/nube1.png">
			
		<div class="texto_banner centered">
			<h1 id="frase1">Nuestra tradición <b>La ética</b></h1>
			<h1 id="frase2" class="no_ver">Nuestro compromiso <b>La sociedad</b></h1>
		</div>
	</div><!-- headerwrap -->
	


	<div class="container centered w">
		<div class="row centered">
			<h4>NOTICIAS</h4>
			<?php
			$consulta = "SELECT * FROM noticias ORDER BY fecha_publicacion DESC LIMIT 0,3";
			if ($resultado = $conexion->query($consulta)) {
				$n_consultas = mysqli_num_rows($resultado);
				$aux = 0;
				$clase = "";
				
				if($n_consultas == 1){
					print("<div class='col-xs-4'></div>");
				}
				if($n_consultas == 2){
					print("<div class='col-xs-2'></div>");
				}
				
		//obtener un array asociativo
				while ($row = $resultado->fetch_assoc()) {
					$aux++;
					print("
						<div class='col-xs-4'>
							<h3>$row[titular]</h3>
							<div>
								<a href='ver_noticia.php?id=$row[id_noticia]&pagina=campus'>
									<img class='not_inicio img-circle' src='../admin/imgs_news/$row[imagen]'>
								</a>
							</div>
							<p>$row[resumen]<br></p>
						</div>
						");
				}
		//liberar el conjunto de resultados 
				$resultado->free();
			}
			?>
		</div>
		<a href="../pages/noticias.php">Ver todas las noticias</a>
	</div><!-- DG -->
		
	
	
				<!-- PORTFOLIO SECTION -->
		<div id="dg">
			<div class="row centered">
				<h4>TESTIMONIOS</h4>
				<br>
				
				<div class='col-lg-4' id='elem_1'>
					<blockquote class="testimonio">La escogi por ofrecer procesos humanisticos dados desde la interación del ser humano</blockquote>
					<div class="fecha-abajo"></div>
					<p class="autor-testimonio"><img src="../admin/imgs_news/pic1.png">José Luis López Yepes<br>Estudiante</p>
				</div>
				
				<div class='col-lg-4' id='elem_2'>
					<blockquote class="testimonio">Porque es la única con buenas expectativas académicas para sus alumnos y con oportunidades para ir a otro país a realizar nuestras especializaciones</blockquote>
					<div class="fecha-abajo"></div>
					<p class="autor-testimonio"><img src="../admin/imgs_news/pic2.png">Mayra Jenny Trujillo Nuñez<br>Estudiante</p>
				</div>
				
				<div class='col-lg-4' id='elem_3'>
					<blockquote class="testimonio">Aunque esta en crecimiento, es una excelente universidad y esta enfocando a los estudiantes a la proyeccion social.</blockquote>
					<div class="fecha-abajo"></div>
					<p class="autor-testimonio"><img src="../admin/imgs_news/pic3.png">Aida Esperanza Pachon<br>Estudiante</p>
				</div>
				
			</div><!-- row -->
		</div><!-- container -->

	<!-- FOOTER -->
	<?php require_once("../requiere/footer.php"); ?> 
  </body>
    <script src="../assets/js/chat-pg.js"></script>
</html>
