<?php
		//include '../../../php/conn.php';
		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/bodega.class.php';
		include '../../../dbObject/connect.php';
	
		$id_bodega = intval($_REQUEST['id_bodega']);
		$nombre_bodega = $_REQUEST['nombre_bodega'];
		$descripcion_bodega = $_REQUEST['descripcion_bodega'];
		$tipo_bodega = $_REQUEST['tipo_bodega'];
		
		$id_recinto = $_REQUEST['bodega_id_recinto_oculto'];
		$tipo_bodega = $_REQUEST['tipo_bodega'];
		
		
		$usuario = $_REQUEST['bodega_usuario'];
		$bodega_usuario_responsable = $_REQUEST['bodega_usuario_responsable'];
		$fecha_creacion = $_REQUEST['bodega_fecha_creacion'];
		
	
	$obj = new Bodega();
	$obj->set_id_bodega($id_bodega);
	$obj->set_id_recinto($id_recinto);
	
	$obj->set_nombre_bodega($nombre_bodega);
	$obj->set_descripcion_bodega($descripcion_bodega);
	$obj->set_tipo_bodega($tipo_bodega);
	$obj->set_fecha_creacion($fecha_creacion);
	$obj->set_usuario_creo($usuario);
	$obj->set_usuario_responsable($bodega_usuario_responsable);
	
	$result=$obj->update_bodega($id_bodega);
	
	if($result)
	{
		echo json_encode(array('success'=>true));
	} 
	else 
	{
		echo json_encode(array('msg'=>'Error al tratar de grabar en bases de datos'));
	}
?>