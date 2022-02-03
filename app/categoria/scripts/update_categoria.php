<?php

	$id_categoria = intval($_REQUEST['id_categoria']);
	$nombre_categoria = $_REQUEST['nombre_categoria'];
	$descripcion_categoria = $_REQUEST['descripcion_categoria'];
	$fecha_creacion = $_REQUEST['fecha_creacion'];
	

	include '/../../../php/conn.php';

	$sql = "update categoria set descripcion_categoria='$descripcion_categoria',
		nombre_categoria='$nombre_categoria',
		fecha_creacion = '$fecha_creacion'  
		where id_categoria=$id_categoria";
	$result = @mysql_query($sql);
	//echo $sql;
	if ($result)
	{
		echo json_encode(array('success'=>true));
	} 
	else 
	{
		echo json_encode(array('msg'=>'Some errors occured.'));
	}
?>