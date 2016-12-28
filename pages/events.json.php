<?php
require_once("../php/conexion.php");

$consulta = "SELECT * FROM `eventos_bienestar` ORDER BY fecha_inicio DESC";
$resultado = $conexion->query($consulta);

$out = array();
while ($row = $resultado->fetch_assoc()) {

	$fecha_i = new DateTime($row['fecha_inicio']);
	$fecha_i->add(new DateInterval('P1D'));

	$fecha_f = new DateTime($row['fecha_final']);
	$fecha_f->add(new DateInterval('P1D'));

    $fecha_inicio = date($fecha_i->format('Y-m-d'));
    $fecha_final = date($fecha_f->format('Y-m-d'));

    $out[] = array(
        'id' => $row['id_evento'],
        'title' => $row['titulo'],
        'url' => 'evento.php?id='.$row['id_evento'],
        'class' => $row['clase'],
        'start' => strtotime($fecha_inicio).'000',
        'end' => strtotime($fecha_final).'000'
    );
}

echo json_encode(array('success' => 1, 'result' => $out));
exit;
?>

<!--

"class": "event-warning",	Amarillo
"class": "event-success",	Verde
"class": "event-info",		Azul
"class": "event-inverse",	Negro
"class": "event-special",	Morado
"class": "", 				Gris
-->