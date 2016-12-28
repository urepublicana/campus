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
		
		
		<a class="Financiero tooltipped" data-position="top" data-delay="40" data-tooltip="Biblioteca" title="Biblioteca" href="#" onclick="campus(this.title)"><br></a>
		
		<a class="Facultades tooltipped" data-position="top" data-delay="40" data-tooltip="Facultades" title="MenuFacultades" href="#" onclick="campus(this.title)"><br></a>
		
		<a class="Investigacion tooltipped" data-position="top" data-delay="40" data-tooltip="Centro de Investigacion" title="CentroInvestigacion" href="#" onclick="campus(this.title)"><br></a>
		
		<a class="Academico tooltipped" data-position="top" data-delay="40" data-tooltip="Servicios de Autegestión Estudiantil" title="MenuGestion" href="#" onclick="campus(this.title)"><br></a>
		
		<a class="Juridico tooltipped" data-position="top" data-delay="40" data-tooltip="Consultorio Juridico" title="ConsultorioJuridico" href="#" onclick="campus(this.title)"><br></a>
		
		<a class="EduVirtual tooltipped" data-position="top" data-delay="40" data-tooltip="Escuela de Lenguas" title="EscuelaLenguas" href="#" onclick="campus(this.title)"><br></a>
		</div>
		
		<div class="row centered">
			<div class="col-sm-2"></div>
			<div class="col-sm-8"><br><br>
				<p id="Texto_Campus">Esta es la oportunidad de conocer nuestra corporación de una forma diferente si ya eres parte tienes más espacios de conectividad y si eres un nuevo miembro de nuestra comunidad obtienes una visión completa de nuestra institución y además la oportunidad de ampliar tus conocimientos.</p>	
			</div>
			<div class="col-sm-2"></div>
		</div>
		
	</div>

	<div id="dg2">
	<!-- ENLACES CAMPUS -->
	<div class="lefted">
		<div class="col-sm-2"></div>

			<!--BIBLIOTECA -->
		<div id="Biblioteca" class="iconos_campus col-sm-8 ocultar" >
			<h3 class="centered">Biblioteca</h3>
			<div class="col-md-4">
			<img src="../imgs/cur_biblioteca.png" width="80%">
			</div>
			<div class="col-md-8">
			<p>
			<b>Misión</b><br>
			La Biblioteca de la Corporación Universitaria Republicana tiene como misión ofrecer a la comunidad Republicana recursos bibliográficos pertinentes  y servicios de alta calidad para apoyar  los programas de docencia, investigación y extensión que desarrolla la Institución.
			<br><br>
			<b>Objetivos</b>
			<ul>
			<li>Brindar a los miembros de la comunidad universitaria el acceso y difusión de la información apropiada y actualizada acorde a los programas académicos de la Corporación.</li>
			<li>Suministrar servicios de información que respondan a las necesidades de la comunidad universitaria.</li>
			<li>Cooperar en el desarrollo de planes de extensión universitaria. Establecer los nexos correspondientes para la vinculación a redes bibliotecarias locales, nacionales e internacionales.</li>
			</ul>
			<br>
			<a target="_blank" href="http://urepublicana.edu.co/biblioteca/informacion-general/"><b>Información General</b></a><br>
			<a target="_blank" href="http://urepublicana.edu.co/recursos-electronicos/"><b>Recursos Electrónicos</b></a>
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
			<a href="#"><b>Leer mas...</b></a>
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
			<div class="col-md-4">
			<img src="../imgs/investigacion.png" width="80%">
			</div>
			<div class="col-md-8">
			<p>
			Unidad de nuestra institución encargada de fomentar la gestión del conocimiento en la Institución y la sociedad, a través de un sistema que incluya la investigación, el desarrollo y la innovación, con base en la articulación entre la academia, la empresa y su entorno para la divulgación y la aplicación del conocimiento
			<br>
			<a target="_blank" href="http://investigacion.urepublicana.edu.co/"><b>Leer mas...</b></a>
			</p>
			</div>
		</div>
		
		
			<!--CONSULTORIO JURIDICO -->
		<div id="ConsultorioJuridico" class="iconos_campus col-sm-8 ocultar" >
			<h3 class="centered">Consultorio Juridico</h3>
			<div class="col-md-4">
			<img src="../imgs/cur_consultorio.png" width="80%">
			</div>
			<div class="col-md-8">
			<p>
			El Consultorio Jurídico es una dependencia de la Facultad de Derecho de la Corporación Universitaria Republicana, que funcionará de acuerdo con los ordenamientos del Artículo 30 del Decreto 196 de 1971. Su organización y funcionamiento se regirán por lo establecido en el decreto 765 de 1977, la ley 583 de 2000, la ley 1123 de 2007 y los reglamentos internos de la Corporación Universitaria Republicana, como las demás normas y jurisprudencia pertinente y conducente que regulen la materia.
			<br>
			<a target="_blank" href="http://consultoriojuridico.urepublicana.edu.co/"><b>Leer mas...</b></a>
			</p>
			</div>
		</div>
		
			<!--MENU ACADEMICOS -->
		<div id="MenuGestion" class="iconos_campus col-sm-8 ocultar" >
			<h3 class="centered">Autogestion Estudiantil</h3>
			 <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#Inicio" data-toggle="tab"><h5>Inicio</h5></a></li>
                  <li><a href="#Academicos" data-toggle="tab"><h5>Académicos</h5></a></li>
                  <li><a href="#Financieros" data-toggle="tab"><h5>Financieros</h5></a></li>
                  <li><a href="#Actualizacion" data-toggle="tab"><h5>Actualización de Datos</h5></a></li>
                </ul>
                <div class="tab-content">
                  
                  <div class="tab-pane active" id="Inicio">
					<div class="col-md-3">
						<img src="../imgs/cur_autogestion.png" width="80%">
					</div>
					<div class="col-md-9">
						<p>
						Bienvenido<br>
						Pensando en ti hemos creado el servicio de Autogestión Estudiantil en el cual podrás realizar tus tramites de manera más ágil y fácil.
						</p>
					</div>
                  </div>

                  <div class="tab-pane centered" id="Academicos">
					
					<a class="btn btn-app">
						<i class="fa fa-download"></i>Descarga tu Certificado de Notas
					</a>

                  </div><!-- /.tab-pane -->

                  <div class="tab-pane centered" id="Financieros">
					<a class="btn btn-app">
						<i class="fa fa-download"></i>Descarga Recibo de Pago
					</a>
					<a class="btn btn-app">
						<i class="fa fa-credit-card"></i>Pago en Linea
					</a>
					
                  </div><!-- /.tab-pane -->

                  <div class="tab-pane centered" id="Actualizacion">
                  	<a class="btn btn-app">
						<i class="fa fa-check-square"></i> Actualiza tus Datos
					</a>
                   
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
		</div>
		
			<!--ESCUELA DE LENGUAS -->
		<div id="EscuelaLenguas" class="iconos_campus col-sm-8 ocultar" >
			<h3 class="centered">Escuela de Lenguas</h3>
			<div class="col-md-4">
			<img src="../imgs/cur_idiomas.png" width="80%">
			</div>
			<div class="col-md-8">
			<p>
			La Escuela de Lenguas de la Corporación Universitaria Republicana busca la coordinación de la participación de los miembros de nuestra comunidad académica en los diferentes procesos de aprendizaje de leguas extrajeras y convocatorias internacionales, así como la coordinación de la internacionalización de nuestros programas académicos a través del estudio y evaluación de lenguas extranjeras.
			<br>
			<a target="_blank" href="http://urepublicana.edu.co/departamento-de-idiomas/"><b>Leer mas...</b></a>
			</p>
			</div>
		</div>

		<div class="container">
		<!--FACULTADES -->
		<div class="cont_campus row ocultar" id="Facultad_Derecho">
			<h3 class="centered">Facultad de Derecho</h3>
			<div class="col-md-1"></div>
			<div class="col-md-4">
			<img src="../imgs/facultad_2.png" width="80%">
			</div>
			<div class="col-md-6">
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
			<br>
			<a href="#"><b>Leer mas...</b></a>
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
			<a href="#"><b>Leer mas...</b></a>
			</p>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>

	</div>
	</div>

	
<!-- FOOTER -->
	<?php require_once("../requiere/footer.php"); ?> 
  </body>
    <script src="../assets/js/chat-pg.js"></script>
</html>
