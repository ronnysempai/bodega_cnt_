<?php

		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/usuario.class.php';
		include '../../../dbObject/connect.php';
		
		$nombre=$_REQUEST['nombre'];
		$apellido=$_REQUEST['apellido'];
		$cargo=$_REQUEST['cargo'];
		$usuario = $_REQUEST['usuario'];
		$password = $_REQUEST['password'];
		$perfil = $_REQUEST['perfil'];
		
		$obj=new Usuario();
	
		$result=$obj->createnew_usuario( 0,$nombre,$apellido,$cargo,$usuario,$password,$perfil);
		
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