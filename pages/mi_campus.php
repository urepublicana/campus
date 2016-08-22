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
		<div class="col-xs-2"></div>
		<div class="col-md-8">
			<img src="../imgs/campus.png" width="300">
			<br><br>
			<p>
			Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto
			</p>	
		</div>
		<div class="col-xs-2"></div>
	</div>


	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 centered">
			<a href="#" onclick="campus()">
				<img id="img_campus" src="../imgs/fondo_campus.png" width="90%">
			</a>	
		</div>
		<div class="col-sm-1"></div>
	</div>

	<!-- ENLACES CAMPUS -->
	<div id="enlaces_campus" class="row ocultar lefted">
		<div class="col-sm-3"></div>
			<div class="col-sm-2">
			<h4>Facultades</h4>
				<ul class="nav">
					<li><span class="fa fa fa-angle-right"/><a class="ancla" href="#Facultad_Derecho">Facultad de Derecho</a></li>
					<li><span class="fa fa fa-angle-right"/><a class="ancla">Facultad de Ingenieria</a></li>
					<li><span class="fa fa fa-angle-right"/><a class="ancla">Facultad de ????</a></li>
				</ul>
			</div>

			<div class="col-sm-2">
			<h4>Institucionales</h4>
				<ul class="nav">
					<li><span class="fa fa fa-angle-right"/><a class="ancla" href="#Biblioteca">Biblioteca</a></li>
					<li><span class="fa fa fa-angle-right"/><a class="ancla" href="#Investigaciones">Investigacion</a></li>
					<li><span class="fa fa fa-angle-right"/><a class="ancla">Rectoria</a></li>
				</ul>
			</div>

			<div class="col-sm-2">
			<h4>Otros</h4>
				<ul class="nav">
					<li><span class="fa fa fa-angle-right"/><a  class="ancla">Consultorio Juridico</a></li>
					<li><span class="fa fa fa-angle-right"/><a  class="ancla">Equipo de Educacion Virtual</a></li>
				</ul>
			</div>
		</div>
		<div class="col-sm-3"></div>
	</div>




	<div class="container">
	<!--FACULTADES -->
		<div class="cont_campus row ocultar" id="Facultad_Derecho">
			<h3 class="centered">Facultad de Derecho</h3>
			<div class="col-md-1"></div>
			<div class="col-md-5">
			<img src="../imgs/facultad.png" width="80%">
			</div>
			<div class="col-md-5">
			<p>
			Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto
			<br>
			<a href="#">Leer mas...</a>
			</p>
			</div>
			<div class="col-md-1"></div>
		</div>

	<!--BIBLIOTECA -->
		<div class="cont_campus row ocultar" id="Biblioteca">
			<h3 class="centered">Biblioteca</h3>
			<div class="col-md-1"></div>
			<div class="col-md-5">
			<img src="../imgs/facultad.png" width="80%">
			</div>
			<div class="col-md-5">
			<p>
			Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto
			<br>
			<a href="#">Leer mas...</a>
			</p>

			</div>
			<div class="col-md-1"></div>
		</div>

	<!--INVESTIGACION -->
		<div class="cont_campus row ocultar" id="Investigaciones">
			<h3 class="centered">Centro de Investigaciones</h3>
			<div class="col-md-1"></div>
			<div class="col-md-5">
			<img src="../imgs/investigacion.png" width="80%">
			</div>
			<div class="col-md-5">
			<p>
			Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto Este es un texto
			<br>
			<a href="#">Leer mas...</a>
			</p>
			</div>
			<div class="col-md-1"></div>
		</div>

	</div>

	
<!-- FOOTER -->
	<?php require_once("../requiere/footer.php"); ?> 
  </body>
    <script src="../assets/js/chat-pg.js"></script>
</html>
