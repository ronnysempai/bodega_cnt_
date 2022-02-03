<?php

		include '../../../php/conn.php';
	
	$id_recinto = intval($_REQUEST['id_recinto']);
	
	$sqlConsultaPrevia="select * from bodega where  bodega.id_recinto  = $id_recinto and bodega.eliminado <> '1'";
	$rsCosultaPrevia = mysql_query($sqlConsultaPrevia);
		while($row = mysql_fetch_object($rsCosultaPrevia))
			{
				echo json_encode(array('msg'=>'Error, este recinto tiene Bodegas Asociadas.'));
				exit;
			}
	
	$sql = "update recinto set eliminado = '1' where id_recinto =$id_recinto";
	
	
	$result = @mysql_query($sql);
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