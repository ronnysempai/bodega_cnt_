<?php

	$clave_producto = $_REQUEST['clave_producto'];
	$nombre_producto = $_REQUEST['nombre_producto'];
	$stock_actual = $_REQUEST['stock_actual'];
	$stock_minimo = $_REQUEST['stock_minimo'];
	$stock_inicial = $_REQUEST['stock_inicial'];
	$precio_promedio = $_REQUEST['precio_promedio'];
	$fecha_ingreso_stockini = $_REQUEST['fecha_ingreso_stockini'];
	$fecha_creacion = $_REQUEST['fecha_creacion'];
	$id_categoria=$_REQUEST['id_categoria'];
	$id_subcategoria=$_REQUEST['id_subcategoria'];
	$id_unidad_medida=$_REQUEST['cod_unidad_medida'];
	$usuario=$_REQUEST['usuario'];
	
	
	

	include '../php/conn.php';
	
		$sql = "insert into producto(clave_producto,id_categoria,id_subcategoria,nombre_producto,nombre_corto,cod_unidad_medida,stock_actual,stock_minimo,stock_inicial,precio_promedio,fecha_ingreso_stockini,fecha_creacion,usuario_creo) 
		values('$clave_producto','$id_categoria',$id_subcategoria,'$nombre_producto','',$id_unidad_medida,$stock_actual,$stock_minimo,$stock_inicial,$precio_promedio,'$fecha_ingreso_stockini','$fecha_creacion','$usuario')";
		//echo $sql;
	$result = @mysql_query($sql);
	if ($result)
	{
		echo json_encode(array('success'=>true));
	}
	else 
	{
		echo json_encode(array('msg'=>'Some errors occured.'));
	}
	
?>