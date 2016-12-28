
    <div id="redes" class="redes">
      
      <div class="col-xs-6 lefted">
        <a class="twitter" target="_blank" href="https://twitter.com/vozurepublicana"><i class="fa fa-twitter"></i></a>
        <a class="facebook" target="_blank" href="https://www.facebook.com/Corporaci%C3%B3n-Universitaria-Republicana-150568701638953/?fref=ts"><i class="fa fa-facebook"></i></a>
        <a class="google" target="_blank" href="https://plus.google.com/u/0/+urepublicana"><i class="fa fa-google-plus"></i></a>
        <a class="youtube" target="_blank" href="https://www.youtube.com/user/UREPUBLICANARADIO"><i class="fa fa-youtube-play"></i></a>
      </div>
      <div class="col-xs-6 rigthed">
        <a  target="_blank" class="tooltipped" data-position="bottom" data-delay="40" data-tooltip="Emisora" href="http://republicanaradio.com/"><img src="../imgs/radio.png" ></a>
        <a  target="_blank" class="tooltipped" data-position="bottom" data-delay="40" data-tooltip="Correo" href="https://outlook.office.com/owa/?realm=urepublicana.edu.co"><img src="../imgs/email.png" ></a>
      </div>
     
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