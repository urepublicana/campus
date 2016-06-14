<!DOCTYPE html>
<html lang="en">
  <head>
	<?php 
	require_once("../php/conexion.php");
	require_once("../requiere/head.php"); ?>
  </head>

  <body>
	<?php 
	$pagina = "ingreso";
	require_once("../requiere/menu.php"); 
	?> 

	<div id="cabecera">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h4><i class="fa fa-unlock icon"></i>INGRESO</h4>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->


	<div class="container w">
		<div class="row centered">
			
			<div class="col-lg-6">			
				<!-- SLIDER -->
				<div id="myCarousel" class="carousel slide">
				<!-- Carousel items -->
					<div class="carousel-inner">
						<?php
						
							$consulta = "SELECT * FROM noticias WHERE importancia = 1 ORDER BY fecha_publicacion DESC";
							if ($resultado = $conexion->query($consulta)) {
							$aux = 0;
							$clase = "";
								/* obtener un array asociativo */
								while ($row = $resultado->fetch_assoc()) {
								$aux++;
								if ($aux == 1){
									$clase = "active";
								}
								else{
									$clase = "";
								}
									print ("<div class='item $clase'>
										<a href='#'>
										<h2>$row[titular]</h2>
										<img class='not_inicio img-circle' src='../php/img_news/$row[imagen]'>
										</a>
										<p>$row[resumen]</p>
										</div>");
								}
								/* liberar el conjunto de resultados */
								$resultado->free();
							}
							/* cerrar la conexión */
							$conexion->close();
						?>
					</div>
				<ol class="carousel-indicators">
					<?php
					for($i=0; $i<$aux; $i++){
						if ($i == 0){
							$clase = "active";
						}
						else{
							$clase = "";
						}
						print("<li data-target='#myCarousel' data-slide-to='$i' class='$clase'></li>");
					}
					?>
				</ol>
			<!-- Carousel nav -->
				<a class="carousel-control left" href="#myCarousel" data-slide="prev"><h1>&lsaquo;</h1></a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next"><h1>&rsaquo;</h1></a>
			</div>
		</div><!-- col-lg-3 -->
			
			
			<div class="col-lg-1">
			</div><!-- col-lg-3 -->
			
			<div class="col-lg-5">
				<form action="#" method="POST">
					<table cellpadding="10">
					<tr>
					<td><h2>Ingresa a tu Aula</h2><td>
					</tr>
					<tr>
					<td><input type="text" id="usuario" name="user" placeholder="Usuario" required/><td>
					</tr>
					<tr>
					<td><input type="password" id="password" name="pass" placeholder="Contraseña" required/><td>
					</tr>
					
					<tr>
					<td align="left"><input type="checkbox" id="ver_pass" onchange="mostrar('password', this.id)" /> Ver contraseña<td>
					</tr>
					
					<tr>
					<td> <input type="submit" class="btn btn-success" value="INGRESAR" required/> </td>
					</tr>
					</table>
				</form>
			</div><!-- col-lg-3 -->
			
		</div><!-- row -->
	</div><!-- container -->
	
	
	<div id="dg">
		<div class="container">
			<div class="row">
				<h3>¿NECESITAS AYUDA?</h3><br>
				<div class="col-lg-6">
					<table>
						<tr>
							<td><img src="../imgs/help_chat.png" class="not_inicio" /></td>
							<td><img src="../imgs/help_faq.png" class="not_inicio" /></td>
							<td><img src="../imgs/help_ticket.png" class="not_inicio" /></td>
							<td><img src="../imgs/help_check.png" class="not_inicio" /></td>
						</tr>
					</table>
				</div>
				<div class="col-lg-1"> 
				</div>
				<div class="col-lg-5"> 
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
				</div>
				
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- DG -->


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>	
	<script>
    $(document).ready(function(){
        $('.myCarousel').carousel({
            interval: 2000
        });
    });
</script>
	
	<!-- FOOTER -->
	<?php require_once("../requiere/footer.php"); ?> 
  </body>
</html>
