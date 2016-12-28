<!DOCTYPE html>
<html lang="en">
  <head>
	<?php require_once("../requiere/head.php"); ?>
  </head>

  <body>
	<?php 
	$pagina = "inicio";
	require_once("../requiere/menu.php"); ?> 

	<div class="row centered cabecera">
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
		<h1>Bienvenido a la URepublicana</h1>
		<p>
		Es un gusto para nosotros darte la bienvenida a esta nueva experiencia, por favor digita tu número de documento de identidad, de esta manera obtendrás tus datos de acceso (Usuario, Contraseña, Email institucional, código)
		</p>
		<form method="POST">
			<input type="number" name="cedula" placeholder="Digite su Número de Identidad" autocomplete="off" required="" />
			<br><br>
			<input type="submit" class="btn btn-success" value="Recuperar" />	
		</form>
		</div>
		<div class="col-lg-4"></div>
	</div>

	<div class="container w">
		<div class="row">
			<div class="col-xs-1"></div>
			<div class="col-xs-10">
				<!-- <img src="../imgs/en_construccion.png" width="100%"> -->
			</div><!-- col-lg-4 -->
			<div class="col-xs-1"></div>
		</div><!-- row -->
		<br>
		<br>
	</div><!-- container -->
	
	
	<!-- FOOTER -->
	<?php require_once("../requiere/footer.php"); ?> 
  </body>
    <script src="../assets/js/chat-pg.js"></script>
</html>
