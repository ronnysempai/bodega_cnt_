<?php
		include '../../../php/conn.php';
		
		
		$id_tipo_documento_guia = $_REQUEST['id_tipo_documento_guia'];
		$nombre_tipo_documento_guia = $_REQUEST['nombre_tipo_documento_guia'];
		$fecha_creacion = $_REQUEST['tipo_documento_guia_fecha_creacion'];
		
		
		
		
		//echo '---'.$id_recinto;
		
		$sql="update tipo_documento_guia set nombre_tipo_documento_guia='$nombre_tipo_documento_guia' where id_tipo_documento_guia = $id_tipo_documento_guia";
		//echo $sql;
		$result = @mysql_query($sql);
		
	if($result)
	{
		echo json_encode(array('success'=>true));
	} 
	else 
	{
		echo json_encode(array('msg'=>'Error al tratar de grabar en bases de datos'));
	}
?>