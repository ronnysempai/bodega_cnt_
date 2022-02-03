<?php

//$conn = @mysql_connect('127.0.0.1','root','root');
	$name_server=$_SERVER['SERVER_NAME'];
	$str_datos = file_get_contents("http://$name_server//bodega_cnt//configuracion.json");
	$datos = json_decode($str_datos);
	
	$servidor=$datos->servidor;
	//echo $servidor;
	$conn = @mysql_connect($servidor,'root','root');
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('bodegas_cnt', $conn);

?>