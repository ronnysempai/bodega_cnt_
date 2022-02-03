<?php

		include '../../../php/conn.php';
	
	$id_subcategoria = intval($_REQUEST['id_subcategoria']);

		

		$sql = "update subcategoria set eliminado = '1' where id_subcategoria =$id_subcategoria";
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