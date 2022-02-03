<?php
		//include '../../../php/conn.php';
		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/recinto.class.php';
		include '../../../dbObject/connect.php';
	
	$id_recinto = intval($_REQUEST['id_recinto']);
	$nombre_recinto = $_REQUEST['nombre_recinto'];
	$descripcion_recinto = $_REQUEST['descripcion_recinto'];
	$fecha_creacion = $_REQUEST['fecha_creacion'];
	
	$usuario = $_REQUEST['recinto_usuario'];
	
	$obj = new Recinto();
	$obj->set_id_recinto($id_recinto);
	$obj->set_nombre_recinto($nombre_recinto);  
	$obj->set_descripcion_recinto($descripcion_recinto);
	$obj->set_fecha_creacion($fecha_creacion);
	$obj->set_user_creo($usuario);
	$result=$obj->update_recinto($id_recinto);
	
	if($result)
	{
		echo json_encode(array('success'=>true));
	} 
	else 
	{
		echo json_encode(array('msg'=>'Some errors occured.'));
	}
?>