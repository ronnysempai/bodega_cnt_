<?php
		//include '../../../php/conn.php';
		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/area_bodega.class.php';
		include '../../../dbObject/connect.php';
	
		$id_area_bodega = intval($_REQUEST['id_area_bodega']);
		$clave_area=$_REQUEST['clave_area'];
		$descripcion_area_bodega=$_REQUEST['descripcion_area_bodega'];
		$nombre_area_bodega=$_REQUEST['nombre_area_bodega'];
		$id_bodega=$_REQUEST['area_bodega_id_bodega_oculto'];
		
	
		$obj = new Area_bodega();
		$obj->set_id_area_bodega( $id_area_bodega );
		$obj->set_clave_area( $clave_area );
		$obj->set_descripcion_area_bodega( $descripcion_area_bodega );
		$obj->set_nombre_area_bodega( $nombre_area_bodega );
		$obj->set_id_bodega( $id_bodega );
		
	
	
	$result=$obj->update_area_bodega($id_area_bodega);
	
	if($result)
	{
		echo json_encode(array('success'=>true));
	} 
	else 
	{
		echo json_encode(array('msg'=>'Error al tratar de grabar en bases de datos'));
	}
?>