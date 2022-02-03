<?php

		include '../../../php/conn.php';
		
		$nombre_tipo_documento_guia = $_REQUEST['nombre_tipo_documento_guia'];
		$fecha_creacion = $_REQUEST['tipo_documento_guia_fecha_creacion'];
		
		
		
		
		//echo '---'.$id_recinto;
		
		$sql="insert into tipo_documento_guia(id_tipo_documento_guia,nombre_tipo_documento_guia,fecha_creacion,eliminado)
		values(0,'$nombre_tipo_documento_guia','$fecha_creacion','0')";
		//echo $sql;
		$result = @mysql_query($sql);
		if ($result)
		{
			echo json_encode(array('success'=>true));
		}
		else 
		{
			echo json_encode(array('msg'=>'error.'));
		}
?>