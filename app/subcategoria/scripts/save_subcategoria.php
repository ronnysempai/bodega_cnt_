<?php

		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/subcategoria.class.php';
		include '../../../dbObject/connect.php';
		
		
		$nombre_subcategoria=$_REQUEST['nombre_subcategoria'];
		$descripcion_subcategoria=$_REQUEST['descripcion_subcategoria'];
		$id_categoria=$_REQUEST['subcategoria_id_categoria_oculto'];
		
		$fecha_creacion = $_REQUEST['subcategoria_fecha_creacion'];
		
		
		
		
		//echo '---'.$id_recinto;
		$obj=new Subcategoria();
		
		$result=$obj->createnew_subcategoria( 0,$id_categoria, $nombre_subcategoria, $descripcion_subcategoria, $fecha_creacion );
		
		
		
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