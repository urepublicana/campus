<!DOCTYPE html>
<html lang="en">
  <head>
	<?php require_once("../requiere/head.php"); ?>
  </head>

  <body>
	<?php 
	$pagina = "mi_campus";
	require_once("../requiere/menu.php"); ?> 
	

	
	<div id="headerwrap" class="centered cabecera">		
		<div id="MiCampus" class="col-sm-12">
		<img id="fondo_campus" src="../imgs/fondo_campus.png">
		<img id="ciclista" src="../imgs/ciclista.png">
		
		<a class="Biblioteca tooltipped" data-position="top" data-delay="40" data-tooltip="Biblioteca" title="Biblioteca" href="#" onclick="campus(this.title)"><br></a>
		
		<a class="Financiero tooltipped" data-position="top" data-delay="40" data-tooltip="Servicios Financieros" title="MenuFinancieros" href="#" onclick="campus(this.title)"><br></a>
		
		<a class="Facultades tooltipped" data-position="top" data-delay="40" data-tooltip="Facultades" title="MenuFacultades" href="#" onclick="campus(this.title)"><br></a>
		
		<a class="Investigacion tooltipped" data-position="top" data-delay="40" data-tooltip="Centro de Investigacion" title="CentroInvestigacion" href="#" onclick="campus(this.title)"><br></a>
		
		<a class="Academico tooltipped" data-position="top" data-delay="40" data-tooltip="Servicios Academicos" title="MenuAcademicos" href="#" onclick="campus(this.title)"><br></a>
		
		<a class="Juridico tooltipped" data-position="top" data-delay="40" data-tooltip="Consultorio Juridico" title="ConsultorioJuridico" href="#" onclick="campus(this.title)"><br></a>
		
		<a class="EduVirtual tooltipped" data-position="top" data-delay="40" data-tooltip="Equipo de Educacion Virtual" title="EducacionVirtual" href="#" onclick="campus(this.title)"><br></a>
		</div>
		
		<div class="row centered">
			<div class="col-sm-2"></div>
			<div class="col-sm-8"><br><br>
				<p id="Texto_Campus">Esta es la oportunidad de conocer nuestra corporación de una forma diferente si ya eres parte tienes más espacios de conectividad y si eres un nuevo miembro de nuestra comunidad obtienes una visión completa de nuestra institución y además la oportunidad de ampliar tus conocimientos.</p>	
			</div>
			<div class="col-sm-2"></div>
		</div>
		
	</div>

	<!-- ENLACES CAMPUS -->
	<div class="lefted">
		<div class="col-sm-2"></div>
			<!--BIBLIOTECA -->
		<div id="Biblioteca" class="iconos_campus col-sm-8 ocultar" >
			<h3 class="centered">Biblioteca</h3>
			<div class="col-md-6">
			<img src="../imgs/facultad.png" width="80%">
			</div>
			<div class="col-md-6">
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
			<br>
			<a href="#">Leer mas...</a>
			</p>
			</div>
		</div>
		
			<!--MENU ACADEMICOS -->
		<div id="MenuFinancieros" class="iconos_campus col-sm-8 ocultar" >
			<h3 class="centered">Asuntos Financieros</h3>
			<div class="col-md-6">
			<img src="../imgs/facultad_2.png" width="80%">
			</div>
			<div class="col-md-6">
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
			<br>
			<a href="#">Leer mas...</a>
			</p>
			</div>
		</div>
		
		
			<!--FACULTADES -->
		<div id="MenuFacultades" class="iconos_campus col-sm-8 ocultar centered">
		<h3>Facultades</h3>	
			<a class="ancla tooltipped" data-position="top" data-delay="40" data-tooltip="Facultad Derecho" href="#Facultad_Derecho">
				<img src="../imgs/facultad_2.png" height="100px">
			</a>
			<a class="ancla tooltipped" data-position="top" data-delay="40" data-tooltip="Facultad Ingenieria" href="#Facultad_Ingenieria">
				<img src="../imgs/facultad.png" height="100px">
			</a>
		</div>

			<!--CENTRO INVESTIGACION -->
		<div id="CentroInvestigacion" class="iconos_campus col-sm-8 ocultar" >
			<h3 class="centered">Centro de Investigacion</h3>
			<div class="col-md-6">
			<img src="../imgs/facultad.png" width="80%">
			</div>
			<div class="col-md-6">
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
			<br>
			<a href="#">Leer mas...</a>
			</p>
			</div>
		</div>
		
		
			<!--CONSULTORIO JURIDICO -->
		<div id="ConsultorioJuridico" class="iconos_campus col-sm-8 ocultar" >
			<h3 class="centered">Consultorio Juridico</h3>
			<div class="col-md-6">
			<img src="../imgs/facultad.png" width="80%">
			</div>
			<div class="col-md-6">
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
			<br>
			<a href="#">Leer mas...</a>
			</p>
			</div>
		</div>
		
			<!--MENU ACADEMICOS -->
		<div id="MenuAcademicos" class="iconos_campus col-sm-8 ocultar" >
			<h3 class="centered">Asuntos Academico</h3>
			<div class="col-md-6">
			<img src="../imgs/facultad_2.png" width="80%">
			</div>
			<div class="col-md-6">
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
			<br>
			<a href="#">Leer mas...</a>
			</p>
			</div>
		</div>
		
			<!--EDUCACION VIRTUAL -->
		<div id="EducacionVirtual" class="iconos_campus col-sm-8 ocultar" >
			<h3 class="centered">Equipo de Educacion Virtual</h3>
			<div class="col-md-6">
			<img src="../imgs/facultad.png" width="80%">
			</div>
			<div class="col-md-6">
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
			<br>
			<a href="#">Leer mas...</a>
			</p>
			</div>
		</div>
	</div>

	<div class="container">
		<!--FACULTADES -->
		<div class="cont_campus row ocultar" id="Facultad_Derecho">
			<h3 class="centered">Facultad de Derecho</h3>
			<div class="col-md-1"></div>
			<div class="col-md-5">
			<img src="../imgs/facultad_2.png" width="80%">
			</div>
			<div class="col-md-5">
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
			<br>
			<a href="#">Leer mas...</a>
			</p>
			</div>
			<div class="col-md-1"></div>
		</div>
		
		<div class="cont_campus row ocultar" id="Facultad_Ingenieria">
			<h3 class="centered">Facultad de Ingenieria</h3>
			<div class="col-md-1"></div>
			<div class="col-md-5">
			<img src="../imgs/facultad.png" width="80%">
			</div>
			<div class="col-md-5">
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
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
