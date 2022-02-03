<?php

		include '../../../php/conn.php';
	
	$id_usuario = intval($_REQUEST['id_usuario']);

		

		$sql = "update usuario set eliminado = '1' where id_usuario =$id_usuario";
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