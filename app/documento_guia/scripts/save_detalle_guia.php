<?php

		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/detalle_guia.class.php';
		include '../../../dbObject/connect.php';
		
		$id_producto = $_REQUEST['detalle_guia_id_producto'];
		$clave_producto = $_REQUEST['clave_producto'];
		$id_documento_guia = $_REQUEST['detalle_guia_id_documento_guia'];
		$cantidad = $_REQUEST['cantidad'];
		
		$fecha_creacion = $_REQUEST['detalle_guia_fecha_creacion'];
		$usuario = $_REQUEST['detalle_guia_usuario'];
		
		
		
		
		
		$obj=new Detalle_guia();
	
		$result=$obj->createnew_detalle_guia(0, $id_documento_guia, $id_producto, $clave_producto, $cantidad, $fecha_creacion, $usuario, 1, '1' );
		
		
		
		//$result = @mysql_query($sql);
		if ($result)
		{
			echo json_encode(array('success'=>true));
		}
		else 
		{
			echo json_encode(array('msg'=>'error.'));
		}
?>