    <div id="redes" class="redes">
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-google-plus"></i></a>
    </div>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" id="menu_nav">
      <div class="container" id="menu_bar">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">UREPUBLICANA - ADMIN</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li id="admin_noticias"><a href="../admin/noticias.php"><i class="fa fa-comments icon"></i>NOTICIAS</a></li>
            <li id="admin_usuarios"><a href="../index.php"><i class="fa fa-lock icon"></i>CERRAR SESION</a></li>	
            
		  </ul>
			<?php
        print ("<script>document.getElementById('$pagina').className = 'active';</script>");
      ?> 
        </div><!--/.nav-collapse -->
      </div>
    </div>