<?php
	
	include 'dbObject/update_object.php';
	
	$obj=  new stdClass();
	$obj->id_producto = $_REQUEST['id_producto'];
	$obj->clave_producto = "'".$_REQUEST['clave_producto']."'";
	$obj->nombre_producto = "'".$_REQUEST['nombre_producto']."'";
	$obj->nombre_corto = "'nn'";//$_REQUEST['nombre_corto'];
	$obj->cod_unidad_medida = $_REQUEST['cod_unidad_medida'];
	
	$obj->stock_actual = $_REQUEST['stock_actual'];
	$obj->stock_minimo = $_REQUEST['stock_minimo'];
	$obj->precio_promedio = $_REQUEST['precio_promedio'];
	$obj->fecha_ingreso_stockini = "'".$_REQUEST['fecha_ingreso_stockini']."'";
	$obj->fecha_creacion = "'".$_REQUEST['fecha_creacion']."'";
	$obj->usuario_creo ="'".$_REQUEST['usuario']."'";
	
	$obj->id_categoria=$_REQUEST['id_categoria'];
	$obj->id_subcategoria=$_REQUEST['id_subcategoria'];
	
	$obj->nombre_clave='id_producto';
	
	
	
	
	
	$data=  new stdClass();
	$data->nombre_tabla="producto";
	$data->objeto=$obj;
	
	
	
	update_object($data,$obj->id_producto);
	
	
	
	//$obj=json_decode($_POST['consulta']);
	
	
		/*	

		include '../php/conn.php';



		$sql = "update users set poducto='$firstname',lastname='$lastname',phone='$phone',email='$email' where id=$id";
		$result = @mysql_query($sql);
		if ($result){
			echo json_encode(array('success'=>true));
		} else {
			echo json_encode(array('msg'=>'Some errors occured.'));
		}
		*/	
?>