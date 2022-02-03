<?php

		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/bodega.class.php';
		include '../../../dbObject/connect.php';
		
		$nombre_bodega = $_REQUEST['nombre_bodega'];
		$descripcion_bodega = $_REQUEST['descripcion_bodega'];
		$tipo_bodega = $_REQUEST['tipo_bodega'];
		
		$id_recinto = $_REQUEST['bodega_id_recinto_oculto'];
		$tipo_bodega = $_REQUEST['tipo_bodega'];
		
		
		$usuario = $_REQUEST['bodega_usuario'];
		$bodega_usuario_responsable = $_REQUEST['bodega_usuario_responsable'];
		$fecha_creacion = $_REQUEST['bodega_fecha_creacion'];
		
		
		
		
		//echo '---'.$id_recinto;
		$obj=new Bodega();
	
		$result=$obj->createnew_bodega( 0,$nombre_bodega,$descripcion_bodega,$tipo_bodega,$fecha_creacion,$usuario,$bodega_usuario_responsable,$id_recinto);
		
		
		
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