<html lang="es">
	<head>
		<!--
		<meta http-equiv="refresh" content="0.1; url=noticias.php" />
		-->
		<title>Campus Virtual</title>
		<?php require_once("../requiere/head.php"); ?>
	</head>
<body>
<br><br><br><br>
	<div class="row">
		<div class="col-sm-4" >
		</div>
		<div class="col-sm-4 centered" >
			<img src="../imgs/logo_virtual.png">
			<form action="../admin/ingreso.php" method="post" id="login">
				<table cellpadding="4">
					<tr>
						<td><h2>Ingreso de Administrador</h2></td>
					</tr>
					<tr>
						<td><input type="text" id="usuario"  name="username" placeholder="Usuario" required/></td>
					</tr>
					<tr>
						<td><input type="password" id="password" name="password" placeholder="Contraseña" required/><br>
						</td>
					</tr>
					<tr>
						<td align="left"><input type="checkbox" id="ver_pass" onchange="mostrar('password', this.id)" /> Ver contraseña</td>
					</tr>
					<tr>
						<td align="center"><input type="submit" class="btn btn-success" value="INGRESAR" required/> </td>
					</tr>
				</table>
			</form>
		</div>
		<div class="col-sm-4" >
		</div>
	</div>
</body>
</html>