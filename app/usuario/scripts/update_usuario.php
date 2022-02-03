<?php
		//include '../../../php/conn.php';
		include '../../../dbObject/core.dbfunctions.php';
		include '../../../clases/usuario.class.php';
		include '../../../dbObject/connect.php';
	
		$id_usuario = intval($_REQUEST['id_usuario']);
		$nombre=$_REQUEST['nombre'];
		$apellido=$_REQUEST['apellido'];
		$cargo=$_REQUEST['cargo'];
		$usuario = $_REQUEST['usuario'];
		$password = $_REQUEST['password'];
		$perfil = $_REQUEST['perfil'];
		
	
	$obj = new Usuario();
	$obj->set_id_usuario($id_usuario);
	$obj->set_nombre($nombre);
	$obj->set_apellido($apellido);
	$obj->set_cargo($cargo);
	$obj->set_usuario($usuario);
	$obj->set_password($password);
	$obj->set_perfil($perfil);
	
	$result=$obj->update_usuario($id_usuario);
	
	if($result)
	{
		echo json_encode(array('success'=>true));
	} 
	else 
	{
		echo json_encode(array('msg'=>'Error al tratar de grabar en bases de datos'));
	}
?>