<br><br>
	<div id="f">
		<div class="container">
				<div class="col-lg-4">
					<ul class="nav">
						<li><span class="fa fa-dribbble"/><a href="index.php">Pagina Principal</a></li>
						<li><span class="fa fa-book"/><a href="index.php">Biblioteca</a></li>
						<li><span class="fa fa-coffee"/><a href="index.php">Otra</a></li>
					</ul>
				</div>
				<div class="col-lg-4 centered">
					<img src="../imgs/logo.png" width="50%">
				</div>
				<div class="col-lg-4 rigthed">
					<a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-info-circle"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
				</div>
		</div><!-- container -->
	</div><!-- Footer -->


	<?php 
	//CERRAR CONEXION
	mysqli_close($conexion);
	?>
	<!-- MODAL FOR CONTACT -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
	
	
    <!-- Placed at the end of the document so the pages load faster 
    PLANTILLA
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	
	ANIMACION
	http://code.jquery.com/jquery-1.10.1.min.js
	-->
    <script src="../assets/js/bootstrap.min.js"></script>
    