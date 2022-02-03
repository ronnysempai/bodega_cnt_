<?php

		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/documento_guia.class.php';
		include '../../../dbObject/connect.php';
		
		//$tipo_documento = $_REQUEST['tipo_documento'];
		$fuente = $_REQUEST['fuente'];
		$nombre = $_REQUEST['nombre'];
		$codigo_sap = $_REQUEST['codigo_sap'];
		
		$fecha_creacio = $_REQUEST['documento_guia_fecha_creacion'];
		$id_tipo_documento_guia = $_REQUEST['documento_guia_id_tipo_documento_guia'];
		$usuario = $_REQUEST['documento_guia_usuario'];
		
		
		if(isset($codigo_sap))
		{$rs = mysql_query("select documento_guia.*,tipo_documento_guia.nombre_tipo_documento_guia from documento_guia,tipo_documento_guia where tipo_documento_guia.id_tipo_documento_guia = documento_guia.id_tipo_documento_guia and documento_guia.eliminado <> '1' and tipo_documento_guia.eliminado <> '1' and documento_guia.codigo_sap ='".$codigo_sap."' ");
			if($r = mysql_fetch_object($rs))
			{echo json_encode(array('msg'=>'existe')); exit;}
		}
		$obj=new Documento_guia();
		$result=$obj->createnew_documento_guia( 0,'',$codigo_sap,$fuente,$nombre,$fecha_creacio,$usuario,$id_tipo_documento_guia);
		
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