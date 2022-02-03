<?php
		//include '../../../php/conn.php';
		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/antena.class.php';
		include '../../../dbObject/connect.php';
	
		$id_antena = intval($_REQUEST['id_antena']);
		$sentido=$_REQUEST['sentido'];
		$descripcion=$_REQUEST['descripcion'];
		$id_dispositivo=$_REQUEST['antena_id_dispositivo_oculto'];
		
		$fecha_creacion = $_REQUEST['antena_fecha_creacion'];
		
		
	
		$obj = new Antena($id_bodega);
		$obj->set_id_antena($id_antena);
		$obj->set_sentido($sentido);
		$obj->set_descripcion($descripcion);
		$obj->set_id_dispositivo($id_dispositivo);
		$obj->set_fecha_creacion($fecha_creacion);
		
		
		
	$result=$obj->update_antena($id_antena);
	
	if($result)
	{
		echo json_encode(array('success'=>true));
	} 
	else 
	{
		echo json_encode(array('msg'=>'Error al tratar de grabar en bases de datos'));
	}
?>