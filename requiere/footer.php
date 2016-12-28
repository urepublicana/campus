<div id="f">
	<div class="row">
		<div class="container">
			<div class="col-sm-3 centered">
				<img src="../imgs/logo.png" width="80%">
			</div>
			<div class="col-sm-3 lefted">
			<h4>Oferta Academica</h4>
				<ul class="nav">
					<li><span class="fa fa fa-angle-right"/><a href="#">Programas Virtuales</a></li>
					<li><span class="fa fa fa-angle-right"/><a target="_blank" href="http://urepublicana.edu.co/admisiones-2/">Admisiones</a></li>
				</ul>

			<h4>Estatutos Generales</h4>
				<ul class="nav">
					<li><span class="fa fa fa-angle-right"/><a target="_blank" href="http://urepublicana.edu.co/wp-content/uploads/2015/04/Reglamento-Docente-Ajustado-Marzo-19-2015.pdf">Reglamento Docente</a></li>
					<li><span class="fa fa fa-angle-right"/><a target="_blank" href="http://urepublicana.edu.co/wp-content/uploads/2015/04/Reglamento-Estudiantil-Ajustado-Mz-19-de-2015.pdf">Reglamento Estudiantil</a></li>
				</ul>

			</div>
			<div class="col-sm-3 lefted">
			<h4>Sitios de Interes</h4>
				<ul class="nav">
					<li><span class="fa fa fa-angle-right"/><a target="_blank" href="http://republicanaradio.com/">Republicana Radio</a></li>
					<li><span class="fa fa fa-angle-right"/><a target="_blank" href="http://urepublicana.edu.co/biblioteca/informacion-general/">Biblioteca</a></li>
					<li><span class="fa fa fa-angle-right"/><a target="_blank" href="http://investigacion.urepublicana.edu.co/">Centro de Investigaciones</a></li>
					<li><span class="fa fa fa-angle-right"/><a target="_blank" href="http://consultoriojuridico.urepublicana.edu.co/">Consultorio Juridico</a></li>
					<li><span class="fa fa fa-angle-right"/><a target="_blank" href="http://urepublicana.edu.co/registro-control/">Registro y Control</a></li>
				</ul>
			</div>
			<div class="col-sm-3 lefted">
			<h4>Otros</h4>
				<ul class="nav">
					<li><span class="fa fa fa-angle-right"/><a target="_blank" href="http://urepublicana.edu.co/trabaje-con-nosotros/">Trabaje con nosotros</a></li>
					<li><span class="fa fa fa-angle-right"/><a target="_blank" href="http://urepublicana.edu.co/estudiantes/egresados/">Oficina de Egresados</a></li>
					<li><span class="fa fa fa-angle-right"/><a target="_blank" href="http://urepublicana.edu.co/ley-de-proteccion-de-datos/">Ley de Protección de Datos</a></li>
					
					<li><span class="fa fa fa-angle-right"/><a data-toggle="modal" data-target="#Contacto" href="#Contacto">Contactenos</a></li>

					<!-- 
						<li><span class="fa fa fa-angle-right"/><a href="../admin/index.php">Administrar</a></li>
					-->
				</ul>
			</div>
		</div><!-- container -->
	</div>
	<div class="footer_down centered">
	Copyright &copy; 2016 - Corporacion Universitaria Republicana
</div>
</div><!-- Footer -->




	<!-- MODAL FOR CONTACT -->
	<!-- Modal -->
	<div class="modal fade" id="Contacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Contactanos</h4>
	      </div>
	      <div class="modal-body">
		        <div class="row centered">
				<img src="../imgs/logo.png" width="40%">
		        	<p></p>
		        	<p>
		        		Corporacion Universitaria Republicana<br/>
						Bogota, Colombia<br/>
						Carrera 19 No 7 - 62<br/>
						contacto@urepublicana.com
		        	</p>

					<a class="twitter" target="_blank" href="https://twitter.com/URepublicana"><i class="fa fa-twitter"></i></a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<a class="facebook" target="_blank" href="https://www.facebook.com/Corporaci%C3%B3n-Universitaria-Republicana-150568701638953/?fref=ts"><i class="fa fa-facebook"></i></a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<a class="google" target="_blank" href="https://plus.google.com/u/0/+urepublicana"><i class="fa fa-google-plus"></i></a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<a class="youtube" target="_blank" href="https://www.youtube.com/user/UREPUBLICANARADIO"><i class="fa fa-youtube-play"></i></a>
		        	<div id="mapwrap">
					<!-- MAPA DE GOOGLE-->
					</div>	
		        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	
	<?php 
	$datos = ""; 
	if(isset($_GET['sesion'])){
		print("
		<script>
			$(document).ready(function(){
				$('#Ingreso').modal('show');
			});
		</script>
		");
		$datos = "<h5 class='red'> <i class='fa fa-warning'></i> Datos erróneos. <br>Por favor, inténtelo otra vez.</h5>";
	}
	?>
	<!-- MODAL INGRESO -->
	<div class="modal fade" id="Ingreso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal_ingreso">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Ingreso</h4>
				</div>
				<div class="modal-body">

					<div class="row centered">
					<!--
					<form action="http://localhost/moodle/login/index.php" method="post" id="login">
					-->
						<form action="http://aulas.campusvirtualurepublicana.edu.co/login/index.php" method="post" id="login">
							<table cellpadding="6" >
								<tr>
									<td><h2>Ingresa a tu Aula</h2></td>
								</tr>
								<tr>
									<td><input type="text" id="usuario"  name="username" placeholder="Usuario" required/></td>
								</tr>
								<tr>
									<td><input type="password" id="password" name="password" placeholder="Contraseña" required/><br>
									<?php echo $datos; ?>
									</td>
								</tr>
								<tr>
									<td align="left"><input type="checkbox" id="ver_pass" onchange="mostrar('password', this.id)" /> Ver contraseña</td>
								</tr>
								<tr>
									<td align="center"><input type="submit" class="btn btn-success" value="INGRESAR" required/> </td>
								</tr>
								<tr>
									<td align="center" class="olvido"><a href="../pages/olvido_pass.php">¿Olvidaste tu Usuario o tu Contraseña?</a></td>
								</tr>
							</table>
						</form>
						<br>
						<a href="../pages/ayuda.php"><h4>¿NECESITAS AYUDA?</h4></a>
						<br>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<?php 
	//CERRAR CONEXION
	mysqli_close($conexion);
	?>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
	
	
    <!-- Placed at the end of the document so the pages load faster 
    PLANTILLA
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	
	ANIMACION
	http://code.jquery.com/jquery-1.10.1.min.js
	-->
    <script src="../assets/js/bootstrap.min.js"></script>
     <script src="../assets/js/materialize.js"></script>
    <!--
    <script src="../assets/js/jquery-2.1.1.min.js"></script>
   
    -->

    