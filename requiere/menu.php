    <!-- Fixed navbar -->
    <?php
      $style = "";
      if($pagina == "index"){
        $style = "efecto_menu";
      }
     ?>
     
    <div id="redes" class="redes">
      <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
      <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
      <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
    </div>

    <div class="navbar navbar-inverse navbar-fixed-top <?php echo $style; ?>" id="menu_nav" style="">
      <div class="container" id="menu_bar">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">UREPUBLICANA</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li id="index"><a href="index.php"><i class="fa fa-home icon"></i>Inicio</a></li>
            <li id="ayuda"><a href="ayuda.php">¿Necesitas ayuda?</a></li>
            <li id="mi_campus"><a href="mi_campus.php">Mi Campus</a></li>
            <li id="bienestar"><a href="bienestar.php">Bienestar</a></li>
            <li id="ingreso" class="ingreso"><a data-toggle="modal" data-target="#Ingreso" href="#Ingreso">Ingreso</a></li>
          </ul>
          <?php print ("<script>document.getElementById('$pagina').className = 'active';</script>");?> 
        </div><!--/.nav-collapse -->
      </div>
    </div>