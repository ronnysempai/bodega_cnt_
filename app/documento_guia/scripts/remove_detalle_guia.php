<?php

		include '../../../php/conn.php';
	
	$id_detalle_guia = intval($_REQUEST['id_detalle_guia']);

		

		$sql = "update detalle_guia set eliminado = '1' where id_detalle_guia =$id_detalle_guia";
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