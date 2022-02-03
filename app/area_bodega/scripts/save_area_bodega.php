<?php

		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/area_bodega.class.php';
		include '../../../dbObject/connect.php';
		
		
		$clave_area=$_REQUEST['clave_area'];
		$descripcion_area_bodega=$_REQUEST['descripcion_area_bodega'];
		$nombre_area_bodega=$_REQUEST['nombre_area_bodega'];
		$id_bodega=$_REQUEST['area_bodega_id_bodega_oculto'];
		
		
		
		
		
		
		//echo '---'.$id_recinto;
		$obj=new Area_bodega();
	
		$result=$obj->createnew_area_bodega( 0,$clave_area,$descripcion_area_bodega,$nombre_area_bodega,$id_bodega);
		
		
		
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