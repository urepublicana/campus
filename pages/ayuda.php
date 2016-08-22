<!DOCTYPE html>
<html>
  <head>
	<?php require_once("../requiere/head.php"); ?>
  </head>

  <body>
	<?php 
	$pagina = "ayuda";
	require_once("../requiere/menu.php"); ?> 
	
		<div class="row centered cabecera">
		</div>

		<div class="row">
		<h2 class="centered">Mesa de Ayuda</h2>
			<div class="col-sm-1" >
			</div>

			<div class="col-sm-3 lefted centrar_vert">
				<img src="../imgs/ayuda.png" class="logo_ayuda">	
			</div><!-- col-lg-4 -->
			
			<div class="col-sm-7 lefted" id="botones">
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
				<div class="centered">
					<div class="col-xs-3" >
						<h6><BR>CHAT</h6>
						<a href="javascript:void(Tawk_API.toggle())">
						<img src="../imgs/help_chat.png" class="img_ayuda" />
						</a>
					</div><!-- col-lg-4 -->
					<div class="col-xs-3">
						<h6><BR>TICKETS</h6>
						<img src="../imgs/help_ticket.png" class="img_ayuda" />
					</div><!-- col-lg-4 -->

					<div class="col-xs-3">
						<h6>PREGUNTAS FRECUENTES</h6>
						<img src="../imgs/help_faq.png" class="img_ayuda"/>
					</div><!-- col-xs-4 -->

					<div class="col-xs-3">
						<h6>VERIFICA TU SISTEMA</h6>
						<a href="#" onclick="ver_check()"> <img src="../imgs/help_check.png" class="img_ayuda" /> </a>
					</div><!-- col-lg-4 -->
				</div><!-- row -->

			</div><!-- col-lg-4 -->

			<div class="col-sm-1" >
			</div>
		</div><!-- row -->



		<div class="row centered">
			<div class="col-lg-2" >
			</div><!-- col-lg-4 -->
			
			<div class="col-lg-8 ocultar" id="verificado">
				<h2>Sistema Verificado</h2>
				<table width="80%" cellpadding="10">
					<tr>
					<script type="text/javascript">
					//NAVEGADOR
					document.write("<td valign='top' align='center' width='25%'>");
					var recomendacion_nav = "<a href='#'><i class='fa fa-cloud-download'></i> Descargar Firefox</a> <br>"+
											"<a href='#'><i class='fa fa-cloud-download'></i> Descargar Google Chrome</a>";
					var navegador = navigator.userAgent;
					if (navigator.userAgent.indexOf('MSIE') !=-1) {
					document.write("<img src='../imgs/explorer.png' class='img_ayuda' /><h5><i class='fa fa-minus-circle red'></i> Explorer</h5>"+recomendacion_nav);
					} 
					else if (navigator.userAgent.indexOf('Firefox') !=-1) {
					document.write("<img src='../imgs/firefox.png' class='img_ayuda' /><h5>Firefox  <i class='fa fa-check-circle green'></i></h5>");
					} 
					else if (navigator.userAgent.indexOf('Chrome') !=-1) {
					document.write("<img src='../imgs/chrome.png' class='img_ayuda' /><h5>Google Chrome <i class='fa fa-check-circle green'></i></h5>");
					} 
					else if (navigator.userAgent.indexOf('Opera') !=-1) {
					document.write("<img src='../imgs/opera.png' class='img_ayuda' /><h5><i class='fa fa-minus-circle red'></i> Opera <h5>"+recomendacion_nav);
					} 
					else {
					document.write("<img src='../imgs/desconocido.png' class='img_ayuda' /><h5><i class='fa fa-minus-circle red'></i> Navegador desconocido </h5>"+recomendacion_nav);
					}
					document.write("</td>");

					
					//JAVA
					var recomendacion_java = "<a href='#'><i class='fa fa-cloud-download'></i> Descargar Java</a> <br>";
					document.write("<td valign='top' align='center' width='25%'><img src='../imgs/java.png' class='img_ayuda' />");
					if (pluginlist.indexOf("Java")!=-1){
						document.write("<h5>Java <i class='fa fa-check-circle green'></i></h5>");
					}
					else{
						document.write("<h5>Recomendamos Instalar Java <i class='fa fa-minus-circle red'></i></h5>"+recomendacion_java);
					}
					document.write("</td>");


					//FLASH
					var recomendacion_flash = "<a href='#'><i class='fa fa-cloud-download'></i> Descargar Flash</a> <br>";
					document.write("<td valign='top' align='center' width='25%'><img src='../imgs/flash.png' class='img_ayuda' />");
					if (pluginlist.indexOf("Flash")!=-1){
						document.write("<h5>Flash <i class='fa fa-check-circle green'></i></h5>");
					}
					else{
						document.write("<h5>Recomendamos Instalar Flash <i class='fa fa-minus-circle red'></i></h5>"+recomendacion_flash);
					}
					document.write("</td>");

					//PDF
					var recomendacion_pdf = "<a href='#'><i class='fa fa-cloud-download'></i> Descargar Acrobat Reader</a> <br>";
					document.write("<td valign='top' align='center' width='25%'><img src='../imgs/pdf.png' class='img_ayuda' />");
					if (pluginlist.indexOf("Acrobat Reader")!=-1){
						document.write("<h5>Acrobat Reader <i class='fa fa-check-circle green'></i></h5>");
					}
					else{
						document.write("<h5>Recomendamos Instalar Acrobat Reader <i class='fa fa-minus-circle red'></i></h5>"+recomendacion_pdf);
					}
					document.write("</td>");
					</script>
					</tr>
				</table>
			</div>

			<div class="col-lg-2">
			</div>
		</div><!-- row -->

	</div><!-- container -->
	<br><br>


	
<!-- FOOTER -->
	<?php require_once("../requiere/footer.php"); ?> 
  </body>
  <script src="../assets/js/chat-pg.js"></script>
</html>
