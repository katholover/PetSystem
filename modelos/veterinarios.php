<?php 
	include_once('../conexion/conexion.php');

	$sSql = "SELECT veterinarios.id, usuarios.nombre FROM `veterinarios` INNER JOIN `usuarios` on veterinarios.usuarios_id = usuarios.id";
	$count = 0;

	if ($respuesta = mysqli_query($conexion, $sSql)) {
		while ($resp = mysqli_fetch_array($respuesta)) {
			$r[$count]['nombre'] = $resp['nombre'];
			$r[$count]['id'] = $resp['id'];
			$count++;
		}
	}
	
	$r = json_encode($r);
	
	echo $r;
 ?>