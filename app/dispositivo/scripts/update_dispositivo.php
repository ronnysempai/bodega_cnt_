<?php
		//include '../../../php/conn.php';
		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/dispositivo.class.php';
		include '../../../dbObject/connect.php';
	
		$id_dispositivo = intval($_REQUEST['id_dispositivo']);
		$nombre_dispositivo = $_REQUEST['nombre_dispositivo'];
		
		$marca = $_REQUEST['marca'];
		$modelo = $_REQUEST['modelo'];
		$num_antenas = $_REQUEST['num_antenas'];
		$num_serie = $_REQUEST['num_serie'];
		$id_area_bodega = $_REQUEST['dispositivo_id_area_bodega_oculto'];
		
		
	
		$obj = new Dispositivo();
		$obj->set_id_dispositivo( $id_dispositivo );
		$obj->	set_nombre_dispositivo( $nombre_dispositivo );
		$obj->set_marca( $marca );
		$obj->set_modelo( $modelo );
		$obj->set_num_serie( $num_serie );
		$obj->set_num_antenas( $num_antenas );
		$obj->set_id_area_bodega( $id_area_bodega );
		
	
	
	$result=$obj->update_dispositivo($id_dispositivo);
	
	if($result)
	{
		echo json_encode(array('success'=>true));
	} 
	else 
	{
		echo json_encode(array('msg'=>'Error al tratar de grabar en bases de datos'));
	}
?>