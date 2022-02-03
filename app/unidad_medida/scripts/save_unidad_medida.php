<?php

		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/unidad_medida.class.php';
		include '../../../dbObject/connect.php';
		
		$clave_unidad_medida = $_REQUEST['clave_unidad_medida'];
		$nombre_unidad_medida = $_REQUEST['nombre_unidad_medida'];
		
		
		$usuario = $_REQUEST['unidad_medida_usuario'];
		
	//include '/../../../php/conn.php';

		//$sql = "";
		
		$obj=new Unidad_medida();
	
		$result=$obj->createnew_unidad_medida( 0,$clave_unidad_medida,$nombre_unidad_medida);
		
		
		
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