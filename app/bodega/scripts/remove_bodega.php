<?php

		include '../../../php/conn.php';
	
	$id_bodega = intval($_REQUEST['id_bodega']);
	
	$sqlConsultaPrevia="select * from area_bodega where  area_bodega.id_bodega  = $id_bodega and area_bodega.eliminado <> '1'";
	$rsCosultaPrevia = mysql_query($sqlConsultaPrevia);
		while($row = mysql_fetch_object($rsCosultaPrevia))
			{
				echo json_encode(array('msg'=>'Error, esta Bodega tiene Areas de Bodega Asociadas.'));
				exit;
			}
		

		$sql = "update bodega set eliminado = '1' where id_bodega =$id_bodega";
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