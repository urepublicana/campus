<!DOCTYPE HTML>
<html>
    <head>
		<!--ANALYTICS-->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-86064116-1', 'auto');
		ga('send', 'pageview');

		</script>
		<meta http-equiv="refresh" content="30">
        <script type="text/javascript" src="timer/jquery.min.js"></script>
        <link rel="stylesheet" href="timer/bootstrap.min.css">
        <script type="text/javascript" src="timer/TimeCircles.js"></script>
        <link rel="stylesheet" href="timer/TimeCircles.css" />
		<title>Campus Virtual - UREPUBLICANA</title>
    </head>
    <body>
	<img id="fondo" src="imgs/lanzamiento.png">
	<img id="cohete" src="imgs/cohete.png">
	<img id="marcas" src="imgs/marcas.png">
	<div id="texto">
	<h1>Próximamente</h1>
	<h2>Campus Virtual<br><b>URepublicana</b></h2>
	</div>
        <div class="container">.
			<div id="CountDownTimer" data-date="2017-02-01 12:00:00"></div>
        </div>
        <script>
            $("#CountDownTimer").TimeCircles();
        </script>       
    </body>
</html>