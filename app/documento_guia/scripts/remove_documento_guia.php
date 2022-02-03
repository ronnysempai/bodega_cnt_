<?php

		include '../../../php/conn.php';
	
	$id_documento_guia = intval($_REQUEST['id_documento_guia']);

		

		$sql = "update documento_guia set eliminado = '1' where id_documento_guia =$id_documento_guia";
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