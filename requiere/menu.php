    <!-- Fixed navbar -->
    <?php
      $style = "";
	  $imagen = "../imgs/logo_virtual_2.png";
      if($pagina == "index"){
        $style = "efecto_menu";
		$imagen = "../imgs/logo_virtual.png";
      }
     ?>
     
    <div id="redes" class="redes">
      
      <div class="col-xs-6 lefted">
        <a class="twitter" target="_blank" href="https://twitter.com/URepublicana"><i class="fa fa-twitter"></i></a>
        <a class="facebook" target="_blank" href="https://www.facebook.com/Corporaci%C3%B3n-Universitaria-Republicana-150568701638953/?fref=ts"><i class="fa fa-facebook"></i></a>
        <a class="google" target="_blank" href="https://plus.google.com/u/0/+urepublicana"><i class="fa fa-google-plus"></i></a>
        <a class="youtube" target="_blank" href="https://www.youtube.com/user/UREPUBLICANARADIO"><i class="fa fa-youtube-play"></i></a>
      </div>
      <div class="col-xs-6 rigthed">
        <a  target="_blank" class="tooltipped" data-position="bottom" data-delay="40" data-tooltip="Emisora" href="http://republicanaradio.com/"><img src="../imgs/radio.png" ></a>
        <a  target="_blank" class="tooltipped" data-position="bottom" data-delay="40" data-tooltip="Correo" href="https://outlook.office.com/owa/?realm=urepublicana.edu.co"><img src="../imgs/email.png" ></a>
      </div>
     
    </div>


    <div class="navbar navbar-inverse navbar-fixed-top <?php echo $style; ?>" id="menu_nav" style="">
      <div class="container" id="menu_bar">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img title="<?php echo $pagina; ?>" id="logo_virtual" src="<?php echo $imagen; ?>" ></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li id="index"><a href="index.php"><img id="img_index" width="13px" src="../imgs/home.png">Inicio</a></li>
            <li id="ayuda"><a href="ayuda.php">¿Necesitas ayuda?</a></li>
            <li id="mi_campus"><a href="mi_campus.php">Mi Campus</a></li>
            <li id="bienestar"><a href="bienestar.php">Bienestar</a></li>
            <li id="ingreso" class="ingreso"><a data-toggle="modal" data-target="#Ingreso" href="#Ingreso">Ingreso</a></li>
          </ul>
          <?php print ("<script>document.getElementById('$pagina').className = 'active';</script>");?> 
        </div><!--/.nav-collapse -->
      </div>
    </div>