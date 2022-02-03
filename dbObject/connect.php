<?php
		// Lee el fichero en una variable,
		// y convierte su contenido a una estructura de datos
		$name_server=$_SERVER['SERVER_NAME'];
		$str_datos = file_get_contents("http://$name_server//bodega_cnt//configuracion.json");
		$datos = json_decode($str_datos,true);
		$servidor=$datos["servidor"];
		
		$GLOBALS['dbConn'] = new DbConnection();
		//$GLOBALS['dbConn']->useManualDefinition('localhost', 'bodegas_cnt', 'root', 'root');
		$GLOBALS['dbConn']->useManualDefinition($servidor, 'bodegas_cnt', 'root', 'root');
        $GLOBALS['dbConn']->doConnection(); //$GLOBALS['dbConn'];
		
		
		
 

?>