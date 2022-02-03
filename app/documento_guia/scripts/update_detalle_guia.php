<?php
		//include '../../../php/conn.php';
		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/detalle_guia.class.php';
		include '../../../dbObject/connect.php';

	$id_detalle_guia = intval($_REQUEST['id_detalle_guia']);
	$id_producto = $_REQUEST['detalle_guia_id_producto'];
		$clave_producto = $_REQUEST['clave_producto'];
		$id_documento_guia = $_REQUEST['detalle_guia_id_documento_guia'];
		$cantidad = $_REQUEST['cantidad'];
		
		$fecha_creacion = $_REQUEST['detalle_guia_fecha_creacion'];
		$usuario = $_REQUEST['detalle_guia_usuario'];
	
	
	$obj = new Detalle_guia();
	$obj->set_id_detalle_guia($id_detalle_guia);
	$obj->set_id_documento_guia($id_documento_guia);
	$obj->set_id_producto($id_producto);
	$obj->set_clave_producto($clave_producto);
	$obj->set_cantidad($cantidad);
	$obj->set_fecha_creacion($fecha_creacion);
	$obj->set_usuario_creo($usuario);
	$obj->set_vigencia(1);
	$obj->set_estado('1');
	
	
	
	
	$result=$obj->update_detalle_guia($id_detalle_guia);
	
	if($result)
	{
		echo json_encode(array('success'=>true));
	} 
	else 
	{
		echo json_encode(array('msg'=>'Error al tratar de grabar en bases de datos'));
	}
?>