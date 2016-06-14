    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" id="menu_nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">UREPUBLICANA</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li id="index"><a href="index.php"><i class="fa fa-home icon"></i>INICIO</a></li>
            <li id="ingreso"><a href="ingreso.php"><i class="fa fa-unlock icon"></i>INGRESO</a></li>
            <li id="ayuda"><a href="ayuda.php"><i class="fa fa-comments icon"></i>¿NECESITAS AYUDA?</a></li>
            <li id="universidad"><a href="universidad.php"><i class="fa fa-bookmark icon"></i>UNIVERSIDAD</a></li>
            <li id="bienestar"><a href="bienestar.php"><i class="fa fa-heart-o icon"></i>BIENESTAR</a></li>
			
		  </ul>
			<?php print ("<script>document.getElementById('$pagina').className = 'active';</script>");?> 
        </div><!--/.nav-collapse -->
      </div>
    </div>