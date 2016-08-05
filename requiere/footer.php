
<div id="f">
	<div class="row">
		<div class="container">
			<div class="col-sm-3 centered">
				<img src="../imgs/logo.png" width="90%">
			</div>
			<div class="col-sm-3 lefted">
			<h4>Oferta Academica</h4>
				<ul class="nav">
					<li><span class="fa fa fa-angle-right"/><a href="#">Programas Presenciales</a></li>
					<li><span class="fa fa fa-angle-right"/><a href="#">Programas Virtuales</a></li>
					<li><span class="fa fa fa-angle-right"/><a href="#">Admisiones</a></li>
					<li><span class="fa fa fa-angle-right"/><a data-toggle="modal" data-target="#Contacto" href="#Contacto">Contactenos</a></li>
				</ul>
			</div>
			<div class="col-sm-3 lefted">
			<h4>Sitios de Interes</h4>
				<ul class="nav">
					<li><span class="fa fa fa-angle-right"/><a href="#">AVACUR</a></li>
					<li><span class="fa fa fa-angle-right"/><a href="#">Sistema Academico</a></li>
					<li><span class="fa fa fa-angle-right"/><a href="#">Republicana Radio</a></li>
					<li><span class="fa fa fa-angle-right"/><a href="#">Biblioteca</a></li>
					<li><span class="fa fa fa-angle-right"/><a href="#">Centro de Investigaciones</a></li>
					<li><span class="fa fa fa-angle-right"/><a href="#">Consultorio Juridico</a></li>
					<li><span class="fa fa fa-angle-right"/><a href="#">Escuela de Altos Estudios</a></li>
				</ul>
			</div>
			<div class="col-sm-3 lefted">
			<h4>Otros</h4>
				<ul class="nav">
					<li><span class="fa fa fa-angle-right"/><a href="#">Trabaje con nosotros</a></li>
					<li><span class="fa fa fa-angle-right"/><a href="#">Oficina de Egresados</a></li>
					<li><span class="fa fa fa-angle-right"/><a href="#">Ley de Protección de Datos</a></li>
					<li><span class="fa fa fa-angle-right"/><a href="../admin/index.php">Administrar</a></li>
				</ul>
			</div>
		</div><!-- container -->
	</div>
</div><!-- Footer -->
<div class="footer_down centered">
	Copyright &copy; 2016 - Corporacion Universitaria Republicana
</div>

	<?php 
	//CERRAR CONEXION
	mysqli_close($conexion);
	?>
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
				<img src="../imgs/logo.png" width="90%">
		        	<p></p>
		        	<p>
		        		Corporacion Universitaria Republicana<br/>
						Bogota, Colombia<br/>
						Carrera 19 No 7 - 62<br/>
						contacto@urepublicana.com
		        	</p>
					<a href="#"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="#"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="#"><i class="fa fa-google-plus"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
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

	<!-- MODAL INGRESO -->
	<div class="modal fade" id="Ingreso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Ingreso</h4>
				</div>
				<div class="modal-body">
					<div class="row centered">
						<form action="#" method="POST">
							<table cellpadding="4">
								<tr>
									<td><h2>Ingresa a tu Aula</h2></td>
								</tr>
								<tr>
									<td><input type="text" id="usuario" name="user" placeholder="Usuario" required/></td>
								</tr>
								<tr>
									<td><input type="password" id="password" name="pass" placeholder="Contraseña" required/></td>
								</tr>
								<tr>
									<td align="left"><input type="checkbox" id="ver_pass" onchange="mostrar('password', this.id)" /> Ver contraseña</td>
								</tr>
								<tr>
									<td align="center"><input type="submit" class="btn btn-success" value="INGRESAR" required/> </td>
								</tr>
							</table>
						</form>
						<h3>¿NECESITAS AYUDA?</h3>
						<div class="col-lg-12">
							<table width="80%">
								<tr>
									<td><a href="javascript:void(Tawk_API.toggle())" ><img src="../imgs/help_chat.png" class="not_inicio" title="Chat" /></a></td>
									<td><img src="../imgs/help_ticket.png" class="not_inicio" title="Tickets"/></td>
									<td><img src="../imgs/help_faq.png" class="not_inicio" title="Preguntas Frecuentes"/></td>
									<td><img src="../imgs/help_check.png" class="not_inicio" title="Verifica"/></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	

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

    