<?php

		include '../../../php/conn.php';
	
	$id_area_bodega = intval($_REQUEST['id_area_bodega']);
		$sqlConsultaPrevia="select * from dispositivo where  dispositivo.id_area_bodega  = $id_area_bodega and dispositivo.eliminado <> '1' ";
		$rsCosultaPrevia = mysql_query($sqlConsultaPrevia);
		while($row = mysql_fetch_object($rsCosultaPrevia))
			{
				echo json_encode(array('msg'=>'Error, esta Area de Bodega tiene Dispositivos Asociados.'));
				exit;
			}
		

		$sql = "update area_bodega set eliminado = '1' where id_area_bodega =$id_area_bodega";
		
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