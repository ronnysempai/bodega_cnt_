<?php
		//include '../../../php/conn.php';
		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/documento_guia.class.php';
		include '../../../dbObject/connect.php';
	
	$id_documento_guia = intval($_REQUEST['id_documento_guia']);
	$id_tipo_documento_guia = $_REQUEST['documento_guia_id_tipo_documento_guia'];
	$codigo_sap = $_REQUEST['codigo_sap'];
		$fuente = $_REQUEST['fuente'];
		$nombre = $_REQUEST['nombre'];
		$fecha_creacio = $_REQUEST['documento_guia_fecha_creacion'];
		$usuario = $_REQUEST['documento_guia_usuario'];
		
	
	$obj = new Documento_guia();
	$obj->set_id_documento_guia($id_documento_guia);
	$obj->set_id_tipo_documento($id_tipo_documento_guia);
	$obj->set_codigo_sap($codigo_sap);
	$obj->set_fuente($fuente);
	$obj->set_nombre($nombre);
	$obj->set_fecha_creacion($fecha_creacio);
	$obj->set_usuario_creacion($usuario);
	
	$result=$obj->update_documento_guia($id_documento_guia);
	
	if($result)
	{
		echo json_encode(array('success'=>true));
	} 
	else 
	{
		echo json_encode(array('msg'=>'Error al tratar de grabar en bases de datos'));
	}
?>