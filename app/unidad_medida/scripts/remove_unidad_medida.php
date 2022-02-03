<?php

		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/unidad_medida.class.php';
		include '../../../dbObject/connect.php';
	
	$id_unidad_medida = intval($_REQUEST['id_unidad_medida']);
	
	
	$obj = new Unidad_medida();
	
	
	$result=$obj->delete_unidad_medida($id_unidad_medida);
	
	
	
	//$result = @mysql_query($sql);
	
	if ($result)
	{	
	
		echo json_encode(array('success'=>true));
		
	}
	else
	{
			
		echo json_encode(array('msg'=>'Errores ocurridos en la eliminacion.'));
	}
?>