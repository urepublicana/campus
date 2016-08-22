<!DOCTYPE html>
<html lang="en">
  <head>
	<?php require_once("../requiere/head.php"); ?>
  </head>

  <body>
	<?php 
	$pagina = "mi_campus";
	require_once("../requiere/menu.php"); ?> 

	<div class="row centered cabecera">
		<div class="col-md-12">
			<img src="../imgs/campus.png" width="300">	
		</div>
	</div>

	<div class="row campo">
		<div class="col-md-12 centered">
			<div class="row">
				<div class="col-sm-4 centered">
					<a class="tooltipped ancla" data-position="top" data-delay="40" data-tooltip="Centro de Investigaciones" href="#Investigaciones"><img src="../imgs/investigacion.png" width="80%"></a>	
				</div>
				<div class="col-sm-4 centered">
					<a class="tooltipped ancla" data-position="top" data-delay="40" data-tooltip="Facultad" href="#Facultad">
						<img src="../imgs/facultad.png" width="80%">
					</a>	
				</div>
				<div class="col-sm-4 centered">
					<a class="tooltipped ancla" data-position="top" data-delay="40" data-tooltip="Decanatura" href="#Decanatura"><img src="../imgs/investigacion.png" width="80%"></a>
				</div>
			</div>
			<br><br>
		</div>
	</div>

	<div class="container">
	<!--CENTRO DE INVESTIGACION -->
		<div class="row ocultar espacio" id="Investigaciones">
			<div class="col-md-12">
			<h1>Centro de Investigaciones</h1>
			<img src="../imgs/investigacion.png" width="80%">
			</div>
		</div>

	<!--FACULTADES -->
		<div class="row ocultar espacio" id="Facultad">
			<div class="col-md-12">
			<h1>Facultades</h1>
			<img src="../imgs/facultad.png" width="80%">
			</div>
		</div>
	<!--DECANATURA -->
		<div class="row ocultar espacio" id="Decanatura">
			<div class="col-md-12">
			<h1>Decanatura</h1>
			<img src="../imgs/investigacion.png" width="80%">
			</div>
		</div>

	</div>

	
<!-- FOOTER -->
	<?php require_once("../requiere/footer.php"); ?> 
  </body>
    <script src="../assets/js/chat-pg.js"></script>
</html>
