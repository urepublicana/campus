<?php
require_once("../php/conexion.php");

//CICLO DE RECIBIR DATOS
$numero_post = count($_POST);
$tags = array_keys($_POST);
$valores = array_values($_POST);
// Fecha Hoy
$fec_hoy = date("Y-m-d");

//Tomamos Valores POST
if($numero_post > 0){
		//Tomamos Valores
	for($i=0;$i < $numero_post ;$i++){
		$$tags[$i]=$valores[$i];
	}

	if($accion == "agregar"){
		
		//Subir Imagen
		$nombreFichero = "";
		$copiarFichero = false;
				// Copiar fichero en directorio de ficheros subidos
				// Se renombra para evitar que sobreescriba un fichero existente
				// Para garantizar la unicidad del nombre se añade una marca de tiempo
		if (is_uploaded_file ($_FILES['imagen']['tmp_name']))
		{
			$nombreDirectorio = "imgs_news/";
			$nombreFichero = $_FILES['imagen']['name'];
			$copiarFichero = true;

			//Renombrar el Archivo
			$extension = end(explode('.',$nombreFichero)); 
			$idUnico = time();
			$nombreFichero = $idUnico.".".$extension;

		}
				// El fichero introducido supera el límite de tamaño permitido
		else if ($_FILES['imagen']['error'] == UPLOAD_ERR_FORM_SIZE)
		{
			$maxsize = 2000000;
			$errores["imagen"] = "¡El tamaño del fichero supera el límite permitido ($maxsize bytes)!";
			$error = true;
		}
				// No se ha introducido ningún fichero
		else if ($_FILES['imagen']['name'] == "")
			$nombreFichero = '';
				// El fichero introducido no se ha podido subir
		else
		{
			$errores["imagen"] = "¡No se ha podido subir el fichero!";
			$error = true;
		}	  
				// Mover foto a su ubicación definitiva
		$imagen = $nombreFichero;
		$fecha_publicacion = $fec_hoy;

		$query_insert = "INSERT INTO noticias (titular, importancia, imagen, fecha_publicacion, fecha_final, resumen, noticia) 
		VALUES ('$titular', '$importancia', '$imagen', '$fecha_publicacion', '$fecha_final', '$resumen', '$noticia')";

		$conexion->query($query_insert) or die ("ERROR INSERTAR NOTICIA".mysql_error());

		if ($copiarFichero){
			move_uploaded_file ($_FILES['imagen']['tmp_name'], $nombreDirectorio . $nombreFichero);
		}

		print("<script type='text/javascript'>window.alert('Guardado')</script>
			<meta http-equiv='refresh' content='0.1; url=noticias.php' />");
	}


	if($accion == "editar"){

		$imagen = $_FILES['imagen']['name'];
		if($imagen == ""){
			$imagen =  $imagen_actual;
		}

		$query_update = "UPDATE noticias SET titular = '$titular', importancia = '$importancia', imagen = '$imagen', fecha_publicacion = '$fec_hoy', fecha_final = '$fecha_final', resumen = '$resumen', noticia = '$noticia' WHERE id_noticia = '$id_noticia'";

		$conexion->query($query_update) or die ("ERROR INSERTAR NOTICIA".mysql_error());

		print("<script type='text/javascript'>window.alert('Noticia Actualizada')</script> <meta http-equiv='refresh' content='0.1; url=noticias.php' />");


	}

	/*
	
	*/

	
}
//Eliminar noticias
$numero_get = count($_GET);
if($numero_get == 1 ){
	$id = valido($_GET['id']);
	if($id > 0){
		$query_del = "DELETE FROM noticias WHERE id_noticia = '$id'";
		$conexion->query($query_insert) or die ("ERROR AL ELIMINAR NOTICIA".mysql_error());
		print("<script type='text/javascript'>window.alert('Noticia Eliminada')</script> <meta http-equiv='refresh' content='0.1; url=noticias.php' />");

	}
}

?>