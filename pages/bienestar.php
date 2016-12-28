<!DOCTYPE html>
<html lang="en">
  <head>
	<?php require_once("../requiere/head.php"); ?>
<!-- 	<link rel="stylesheet" href="components/bootstrap2/css/bootstrap.css">
	<link rel="stylesheet" href="components/bootstrap2/css/bootstrap-responsive.css"> -->
	<link rel="stylesheet" href="calendar/css/calendar.css">
  </head>

  <body>
	<?php 
	$pagina = "bienestar";
	require_once("../requiere/menu.php"); ?> 

	<div class="row centered cabecera">
		<div class="col-lg-3 col-lg-offset-1">
			<img src="../imgs/bienestar.png" id="img_bienestar" width="250">	
		</div>
		<div class="col-lg-7">
			<iframe src="https://player.vimeo.com/video/190963110?title=0&byline=0&portrait=0" width="80%" height="360" frameborder="0"></iframe>	
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
			<h1>Actividades Bienestar</h1>
				<div class="page-header">
					<div class="pull-right form-inline">
						<div class="btn-group">
							<button class="btn btn-primary" data-calendar-nav="prev"><< Previo</button>
							<button class="btn" data-calendar-nav="today">Hoy</button>
							<button class="btn btn-primary" data-calendar-nav="next">Siguiente >></button>
						</div>
						<div class="btn-group">
							<button class="btn btn-warning" data-calendar-view="year">Años</button>
							<button class="btn btn-warning active" data-calendar-view="month">Meses</button>
							<button class="btn btn-warning" data-calendar-view="week">Semanas</button>
							<button class="btn btn-warning" data-calendar-view="day">Dias</button>
						</div>
					</div>
					<h3></h3>
				</div>

				<div id="calendar"></div>

			</div>
		</div>
		<br><br><br>

		<div class="modal fade" id="events-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3>Evento</h3>
				</div>
				<div class="modal-body" style="height: 400px;">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="calendar/components/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="calendar/components/underscore/underscore-min.js"></script>
		<script type="text/javascript" src="calendar/components/bootstrap2/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="calendar/components/jstimezonedetect/jstz.min.js"></script>
		<script type="text/javascript" src="calendar/js/es-CO.js"></script>
		<script type="text/javascript" src="calendar/js/calendar.js"></script>
		<script type="text/javascript" src="calendar/js/app.js"></script>
	</div>
	
	
	<!-- FOOTER -->
	<?php require_once("../requiere/footer.php"); ?> 
  </body>
    <script src="../assets/js/chat-pg.js"></script>
</html>
