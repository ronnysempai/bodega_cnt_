<?php

		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/dispositivo.class.php';
		include '../../../dbObject/connect.php';
		
		$nombre_dispositivo = $_REQUEST['nombre_dispositivo'];
		
		$marca = $_REQUEST['marca'];
		$modelo = $_REQUEST['modelo'];
		$num_antenas = $_REQUEST['num_antenas'];
		$num_serie = $_REQUEST['num_serie'];
		
		$id_area_bodega = $_REQUEST['dispositivo_id_area_bodega_oculto'];
		
		
		
		//echo '---'.$id_recinto;
		$obj=new Dispositivo();
	
		$result=$obj->createnew_dispositivo( 0,$nombre_dispositivo,$marca,$modelo,$num_serie,$num_antenas,$id_area_bodega);
		
		
		
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