<?php

		$id_producto = intval($_REQUEST['id_producto']);

		include '../php/conn.php';

		//$sql = "delete from producto where id_producto=$id_producto";
		$sql = "update producto set eliminado = '1' where id_producto =$id_producto";
		$result = @mysql_query($sql);
		if ($result){
			echo json_encode(array('success'=>true));
		} else {
			echo json_encode(array('msg'=>'Some errors occured.'));
		}
?>