<?php
	$conexion = mysqli_connect("localhost", "root", "", "bitnami_campus");

	if (!$conexion) {
		echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
		echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		exit;
	}

	//FUNCION EXPRESION REGULAR
	function valido($digitos){
		$patron = "/^[[:digit:]]+$/";
		if (preg_match($patron, $digitos)) {
			return $digitos;
		} else {
			mysqli_close($conexion);
			print("<meta http-equiv='refresh' content='0.1; url=../index.php' />");
		}

	}

	//echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
	//echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;
	
?>