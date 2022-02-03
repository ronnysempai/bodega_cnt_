<?php

		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/recinto.class.php';
		include '../../../dbObject/connect.php';
		
		$descripcion_recinto = $_REQUEST['descripcion_recinto'];
		$nombre_recinto = $_REQUEST['nombre_recinto'];
		$fecha_creacion = $_REQUEST['fecha_creacion'];
		
		$usuario = $_REQUEST['recinto_usuario'];
		
	//include '/../../../php/conn.php';

		$sql = "";
		
		$obj=new Recinto();
	
		$result=$obj->createnew_recinto( 0,$descripcion_recinto,$fecha_creacion,$usuario,$nombre_recinto);
		
		
		
		//$result = @mysql_query($sql);
		if ($result){
			echo json_encode(array('success'=>true));
		} else {
			echo json_encode(array('msg'=>'error.'));
		}
?>