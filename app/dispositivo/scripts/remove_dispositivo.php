<?php

		include '../../../php/conn.php';
	
	$id_dispositivo = intval($_REQUEST['id_dispositivo']);

		

		$sql = "update dispositivo set eliminado = '1' where id_dispositivo =$id_dispositivo";
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