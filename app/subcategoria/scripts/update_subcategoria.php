<?php
		//include '../../../php/conn.php';
		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/subcategoria.class.php';
		include '../../../dbObject/connect.php';
	
		$id_subcategoria = intval($_REQUEST['id_subcategoria']);
		$nombre_subcategoria=$_REQUEST['nombre_subcategoria'];
		$descripcion_subcategoria=$_REQUEST['descripcion_subcategoria'];
		$id_categoria=$_REQUEST['subcategoria_id_categoria_oculto'];
		
		$fecha_creacion = $_REQUEST['subcategoria_fecha_creacion'];
		
	
		$obj = new Subcategoria($id_bodega);
		$obj->set_id_subcategoria($id_subcategoria);
		$obj->set_nombre_subcategoria($nombre_subcategoria);
		$obj->set_descripcion_subcategoria($descripcion_subcategoria);
		$obj->set_id_categoria ($id_categoria);
		$obj->set_fecha_creacion($fecha_creacion);
		
		
		
	$result=$obj->update_subcategoria($id_subcategoria);
	
	if($result)
	{
		echo json_encode(array('success'=>true));
	} 
	else 
	{
		echo json_encode(array('msg'=>'Error al tratar de grabar en bases de datos'));
	}
?>