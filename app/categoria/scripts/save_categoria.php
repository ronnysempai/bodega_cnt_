<?php

	$descripcion_categoria = $_REQUEST['descripcion_categoria'];
	$nombre_categoria = $_REQUEST['nombre_categoria'];
	$fecha_creacion = $_REQUEST['fecha_creacion'];


	include '/../../../php/conn.php';

		$sql = "insert into categoria(descripcion_categoria,
		nombre_categoria,
		fecha_creacion
		) 
		values('$descripcion_categoria','$nombre_categoria','$fecha_creacion')";
		
		$result = @mysql_query($sql);
		if ($result){
			echo json_encode(array('success'=>true));
		} else {
			echo json_encode(array('msg'=>'error.'));
		}
?>