<?php

		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/antena.class.php';
		include '../../../dbObject/connect.php';
		
		$sentido=$_REQUEST['sentido'];
		$descripcion=$_REQUEST['descripcion'];
		$id_dispositivo=$_REQUEST['antena_id_dispositivo_oculto'];
		
		$fecha_creacion = $_REQUEST['antena_fecha_creacion'];
		
		
		
		
		//echo '---'.$id_recinto;
		$obj=new Antena();
	
		$result=$obj->createnew_antena( 0,$id_dispositivo, $descripcion, $sentido, $fecha_creacion );
		
		
		
		//$result = @mysql_query($sql);
		if ($result)
		{
			echo json_encode(array('success'=>true));
		}
		else 
		{
			echo json_encode(array('msg'=>'error.'));
		}
?>