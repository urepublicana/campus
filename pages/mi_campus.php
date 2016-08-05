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

	<div class="container desc">
		<div class="row">
			<div class="col-md-6 centered">
				<img src="../imgs/uni1.png" width="80%" alt="">
			</div><!-- col-md-6 -->
			<div class="col-md-6">
				<h4>DESCRIPCION</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<p>
					<i class="fa fa-circle-o"></i> Development<br/>
					<i class="fa fa-link"></i> <a href="#">BlackTie.co</a>
				</p>
			</div>
		</div><!-- row -->
		<br><br>
		<div class="row">
			<div class="col-md-6 centered">
				<img src="../imgs/uni2.png" width="80%" alt="">
			</div><!-- col-md-6 -->
			<div class="col-md-6">
				<h4>DESCRIPCION</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<p>
					<i class="fa fa-circle-o"></i> Development<br/>
					<i class="fa fa-link"></i> <a href="#">BlackTie.co</a>
				</p>
			</div>
		</div><!-- row -->
	</div><!-- container -->


	

<!--
	<div class="row">
		<div class="col-md-12 centered">
			<div class="row campo">
				<div class="col-sm-4 centered">
					<a class="tooltipped ancla" data-position="top" data-delay="40" data-tooltip="Centro de Investigaciones" href="#Investigaciones"><img src="../imgs/investigacion.png" width="80%"></a>	
				</div>
				<div class="col-sm-4 centered">
					<a class="tooltipped ancla" data-position="top" data-delay="40" data-tooltip="Facultad" href="#Facultad">
						<img src="../imgs/facultad.png" width="80%">
					</a>	
				</div>
				<div class="col-sm-4 centered">
					<img src="../imgs/investigacion.png" width="80%">	
				</div>
			</div>
			<br><br>
		</div>
	</div>

	<div class="row">
		<div class="container centered">
			<div class="col-md-12">
				<ul class="tabs mi_campus">
					<li class="tab"><a href="#test1">Test 1</a></li>
					<li class="tab"><a href="#test2">Test 2</a></li>
					<li class="tab"><a href="#test3">Test 3</a></li>
					<li class="tab"><a href="#test4">Test 4</a></li>
				</ul>
			</div>
			<div id="test1">Test 1</div>
			<div id="test2">Test 2</div>
			<div id="test3">Test 3</div>
			<div id="test4">Test 4</div>
		</div>
	</div>




	<div style="height: 300px; "></div>
	<div class="container">
		<div class="row ocultar" id="Investigaciones">
			<div class="col-md-12">
			<img src="../imgs/investigacion.png" width="80%">
			... contenido
			</div>
		</div>


		<div class="row ocultar" id="Facultad">
			<div style="height: 150px; "></div>
			<div class="col-md-12">
			<img src="../imgs/facultad.png" width="80%">
			... contenido
			</div>
		</div>
	</div>
-->
	
<!-- FOOTER -->
	<?php require_once("../requiere/footer.php"); ?> 
  </body>
    <script src="../assets/js/chat-pg.js"></script>
</html>
