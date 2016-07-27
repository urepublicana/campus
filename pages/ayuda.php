<!DOCTYPE html>
<html>
  <head>
	<?php require_once("../requiere/head.php"); ?>
  </head>

  <body>
	<?php 
	$pagina = "ayuda";
	require_once("../requiere/menu.php"); ?> 
	
	<div id="cabecera">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
					<p class="logo_bajo"><i class="fa fa-comments icon"></i></p>
				</div>
			</div>
		</div>
	</div>


		<div class="row centered">
			<div class="col-lg-3" >
				<h2>CHAT</h2>
				<a href="javascript:void(Tawk_API.toggle())">
				<img src="../imgs/help_chat.png" width="25%" />
				</a>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
			</div><!-- col-lg-4 -->
			
			<div class="col-lg-3">
				<h2>TICKETS</h2>
				<img src="../imgs/help_ticket.png" width="25%" />
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
			</div><!-- col-lg-4 -->

			<div class="col-lg-3">
				<h2>FAQ</h2>
				<img src="../imgs/help_faq.png" width="25%" />
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
			</div><!-- col-lg-4 -->

			<div class="col-lg-3">
				<h2>VERIFICA</h2>
				<a href="#" onclick="ver_check()"> <img src="../imgs/help_check.png" width="25%" /> </a>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
			</div><!-- col-lg-4 -->
		</div><!-- row -->



		<div class="row centered">
			<div class="col-lg-2" >
			</div><!-- col-lg-4 -->
			
			<div class="col-lg-8" id="verificado" style="display: none;">
				<h2>Sistema Verificado</h2>
				<table width="100%" cellpadding="10">
					<tr>
					<script type="text/javascript">
					//NAVEGADOR
					document.write("<td valign='top' align='center' width='25%'>");
					var recomendacion_nav = "<a href='#'><i class='fa fa-cloud-download'></i> Descargar Firefox</a> <br>"+
											"<a href='#'><i class='fa fa-cloud-download'></i> Descargar Google Chrome</a>";
					var navegador = navigator.userAgent;
					if (navigator.userAgent.indexOf('MSIE') !=-1) {
					document.write("<img src='../imgs/explorer.png' width='40%' /><h3><i class='fa fa-minus-circle'></i> Explorer</h3>"+recomendacion_nav);
					} 
					else if (navigator.userAgent.indexOf('Firefox') !=-1) {
					document.write("<img src='../imgs/firefox.png' width='40%' /><h3>Firefox  <i class='fa fa-check-circle green'></i></h3>");
					} 
					else if (navigator.userAgent.indexOf('Chrome') !=-1) {
					document.write("<img src='../imgs/chrome.png' width='40%' /><h3>Google Chrome <i class='fa fa-check-circle green'></i></h3>");
					} 
					else if (navigator.userAgent.indexOf('Opera') !=-1) {
					document.write("<img src='../imgs/opera.png' width='40%' /><h3><i class='fa fa-minus-circle'></i> Opera <h3>"+recomendacion_nav);
					} 
					else {
					document.write("<img src='../imgs/desconocido.png' width='40%'/><h3><i class='fa fa-minus-circle'></i> Navegador desconocido </h3>"+recomendacion_nav);
					}
					document.write("</td>");

					
					//JAVA
					var recomendacion_java = "<a href='#'><i class='fa fa-cloud-download'></i> Descargar Java</a> <br>";
					document.write("<td valign='top' align='center' width='25%'><img src='../imgs/java.png' width='40%' />");
					if (pluginlist.indexOf("Java")!=-1){
						document.write("<h3>Java <i class='fa fa-check-circle'></i></h3>");
					}
					else{
						document.write("<h3>Recomendamos Instalar Java <i class='fa fa-minus-circle'></i></h3>"+recomendacion_java);
					}
					document.write("</td>");


					//FLASH
					var recomendacion_flash = "<a href='#'><i class='fa fa-cloud-download'></i> Descargar Flash</a> <br>";
					document.write("<td valign='top' align='center' width='25%'><img src='../imgs/flash.png' width='40%' />");
					if (pluginlist.indexOf("Flash")!=-1){
						document.write("<h3>Flash <i class='fa fa-check-circle'></i></h3>");
					}
					else{
						document.write("<h3>Recomendamos Instalar Flash <i class='fa fa-minus-circle'></i></h3>"+recomendacion_flash);
					}
					document.write("</td>");

					//PDF
					var recomendacion_pdf = "<a href='#'><i class='fa fa-cloud-download'></i> Descargar Acrobat Reader</a> <br>";
					document.write("<td valign='top' align='center' width='25%'><img src='../imgs/pdf.png' width='40%' />");
					if (pluginlist.indexOf("Acrobat Reader")!=-1){
						document.write("<h3>Acrobat Reader <i class='fa fa-check-circle'></i></h3>");
					}
					else{
						document.write("<h3>Recomendamos Instalar Acrobat Reader <i class='fa fa-minus-circle'></i></h3>"+recomendacion_pdf);
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
