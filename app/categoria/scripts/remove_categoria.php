<?php

$id_categoria = intval($_REQUEST['id_categoria']);

include '/../../../php/conn.php';

	$sql = "delete from categoria where id_categoria=$id_categoria";
	$result = @mysql_query($sql);
	
	if ($result)
	{
		echo json_encode(array('success'=>true));
	}
	else
	{
		echo json_encode(array('msg'=>'Errores ocurridos en la eliminacion.'));
	}
?>