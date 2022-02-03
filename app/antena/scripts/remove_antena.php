<?php

		include '../../../php/conn.php';
	
	$id_antena = intval($_REQUEST['id_antena']);

		

		$sql = "update antena set eliminado = '1' where id_antena =$id_antena";
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