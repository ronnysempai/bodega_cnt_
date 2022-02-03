<?php
		//include '../../../php/conn.php';
		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/unidad_medida.class.php';
		include '../../../dbObject/connect.php';
	
	$id_unidad_medida = intval($_REQUEST['id_unidad_medida']);
	$nombre_unidad_medida = $_REQUEST['nombre_unidad_medida'];
	$clave_unidad_medida=$_REQUEST['clave_unidad_medida'];
	
	
	
	$obj = new Unidad_medida();
	$obj->set_id_unidad_medida($id_unidad_medida);
	$obj->set_nombre($nombre_unidad_medida);
	$obj->set_clave_unidad_medida($clave_unidad_medida);
	
	$result=$obj->update_unidad_medida($id_unidad_medida);
	
	if($result)
	{
		echo json_encode(array('success'=>true));
	} 
	else 
	{
		echo json_encode(array('msg'=>'Error al tratar de grabar en bases de datos'));
	}
?>