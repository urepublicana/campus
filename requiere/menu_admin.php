    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" id="menu_nav">
      <div class="container">
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
            <li id="admin_noticias"><a href="noticias.php"><i class="fa fa-comments icon"></i>NOTICIAS</a></li>
            <li id="admin_usuarios"><a href="usuarios.php"><i class="fa fa-comments icon"></i>USUARIOS</a></li>			
		  </ul>
			<?php
        print ("<script>document.getElementById('$pagina').className = 'active';</script>");
      ?> 
        </div><!--/.nav-collapse -->
      </div>
    </div>